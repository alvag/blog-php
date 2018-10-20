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
    protected $columns;

    function __construct() {
        $this->columns = array();
    }

    function setColumnValue($column, $value){
        $this->columns[$column] = $value;
    }

    function getColumnValue($column){
        return $this->columns[$column];
    }

    /**
     * Save or update the item data in database
     */
    function save(){
        //$class = get_called_class();
        $query =  "REPLACE INTO " . static::$tableName . " (" . implode(",", array_keys($this->columns)) . ") VALUES(";
        $keys = array();
        foreach ($this->columns as $key => $value) {
            $keys[":".$key] = $value;
        }
        $query .= implode(",", array_keys($keys)).")";
        $db = Database::getInstance()->prepare($query);
        try {
            $db->execute($keys);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

}
