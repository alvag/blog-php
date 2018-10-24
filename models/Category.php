<?php
/**
* Created by Max Alva
* Date: 2018/10/21
* Time: 15:44:18
*/

require_once 'Model.php';

class Category extends Model {

    protected static $tableName = 'categories';
    protected static $primaryKey = 'id';

    function setId($value) {
        $this->setAttributeValue('id', $value);
    }

    function getId() {
        return $this->getAttributeValue('id');
    }

    function setName($value) {
        $this->setAttributeValue('name', $value);
    }

    function getName() {
        return $this->getAttributeValue('name');
    }

}
