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

    function setAttributeValue($attribute, $value){
        $this->attributes[$attribute] = $value;
    }

    function getAttributeValue($attribute){
        return $this->attributes[$attribute];
    }

    function getAllAttributes() {
        return $this->attributes;
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
    static function getOne($condition = array(), $order = NULL, $startIndex = NULL){
        $query = "SELECT * FROM " . static::$tableName;
        if(!empty($condition)){
            $query .= " WHERE ";
            foreach ($condition as $key => $value) {
                $query .= $key . "=:".$key." AND ";
            }
        }
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

}
