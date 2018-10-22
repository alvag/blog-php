<?php
/**
* Created by Max Alva
* Date: 2018/10/20
* Time: 12:44:50
*/

/**
 * Model base class
 */

 require_once 'connection.php';

class Model {

    protected static $tableName = '';
    protected static $primaryKey = '';
    protected $attributes;

    function __construct() {
        $this->attributes = array();
    }

    function getAllAttributes() {
        return $this->attributes;
    }

    function setAttributeValue($attribute, $value){
        $this->attributes[$attribute] = $value;
    }

    function getAttributeValue($attribute){
        return $this->attributes[$attribute];
    }

    function getCreatedAt() {
        return $this->getAttributeValue('created_at');
    }

    function getUpdatedAt() {
        return $this->getAttributeValue('updated_at');
    }

    function getDeletedAt() {
        return $this->getAttributeValue('deleted_at');
    }

     /**
     * Crea una instancia del modelo con un registro de la base de datos.
     */
    function createFromDb($attributes){
        foreach ($attributes as $key => $value) {
            $this->attributes[$key] = $value;
        }
    }

    /**
     * Crea un registro en la base de datos.
     */
    function create(){
        $class = get_called_class();
        $query =  "INSERT INTO " . static::$tableName . " (" . implode(",", array_keys($this->attributes)) . ") VALUES(";
        $keys = array();
        foreach ($this->attributes as $key => $value) {
            $keys[":".$key] = $value;
        }
        $query .= implode(",", array_keys($keys)).")";
        $db = Database::getInstance()->prepare($query);
        try {
            return $db->execute($keys);
        } catch (Exception $e) {}
    }

    /**
     * Devuelve un solo registro
     */
    static function getOne($condition = array(), $order = NULL, $startIndex = NULL, $ignoreSoftDeleted = TRUE){
        $query = "SELECT * FROM " . static::$tableName;
        if(!empty($condition)){
            $query .= " WHERE ";
            foreach ($condition as $key => $value) {
                $query .= $key . "=:".$key." AND ";
            }
        }
        $query .= self::ignoreSoftDeleted($condition, $ignoreSoftDeleted);
        $query = rtrim($query,' AND ');
        if($order){
            $query .= " ORDER BY " . $order;
        }
        if($startIndex !== NULL){
            $query .= " LIMIT " . $startIndex . ",1";
        }
        $db = Database::getInstance();
        $s = $db->prepare($query);
        foreach ($condition as $key => $value) {
            $condition[':'.$key] = $value;
            unset($condition[$key]);
        }
        $s->execute($condition);
        $row = $s->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $className = get_called_class();
            $item = new $className();
            $item->createFromDb($row);
            return $item;
        } else {
            return NULL;
        }
    }

    /**
     * Obtiene todos los registros de BD
     * @example getAll(array(name=>'Bond',job=>'artist'),'age DESC',0,25) converts to SELECT * FROM TABLE WHERE name='Bond' AND job='artist' ORDER BY age DESC LIMIT 0,25
     */
    static function getAll($condition = array(), $order = NULL, $startIndex = NULL, $count = NULL, $ignoreSoftDeleted = TRUE) {
        $query = "SELECT * FROM " . static::$tableName;
        if(!empty($condition)) {
            $query .= " WHERE ";
            foreach ($condition as $key => $value) {
                $query .= $key . "=:".$key." AND ";
            }
        }
        $query .= self::ignoreSoftDeleted($condition, $ignoreSoftDeleted);
        $query = rtrim($query,' AND ');
        if($order){
            $query .= " ORDER BY " . $order;
        }
        if($startIndex !== NULL){
            $query .= " LIMIT " . $startIndex;
            if($count){
                $query .= "," . $count;
            }
        }
        return self::get($query, $condition);
    }

    /**
     * Obtiene los datos de la BD
     * @example get('SELECT * FROM TABLE WHERE name=:user OR age<:age',array(name=>'Bond',age=>25))
     */
    static function get($query, $condition = array()){
        $db = Database::getInstance();
        $s = $db->prepare($query);
        foreach ($condition as $key => $value) {
            $condition[':'.$key] = $value;
            unset($condition[$key]);
        }
        $s->execute($condition);
        $result = $s->fetchAll(PDO::FETCH_ASSOC);
        $collection = array();
        $className = get_called_class();
        foreach($result as $row){
            $item = new $className();
            $item->createFromDb($row);
            array_push($collection, $item);
        }
        return $collection;
    }

    /**
     * Obtiene un registro por la primarykey
     */
    static function getByPrimaryKey($value, $ignoreSoftDeleted = TRUE) {
        $condition = array();
        $condition[static::$primaryKey] = $value;
        return self::getOne($condition, NULL, NULL, $ignoreSoftDeleted);
    }

    function ignoreSoftDeleted($condition, $ignore) {
        if ($ignore) {
            if(!empty($condition)) {
                return "deleted_at IS NULL AND ";
            } else {
                return " WHERE deleted_at IS NULL AND ";
            }
        }
    }


}
