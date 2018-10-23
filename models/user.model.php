<?php
/**
* Created by Max Alva
* Date: 2018/10/20
* Time: 11:58:40
*/
require_once './config/routes_config.php';
require_once DIR_MODELS.'model.php';

class User extends Model {

    protected static $tableName = 'users';
    protected static $primaryKey = 'id';

    function setId($value) {
        $this->setAttributeValue('id', $value);
    }

    function getId() {
        return $this->getAttributeValue('id');
    }

    function setFirstName($value) {
        $this->setAttributeValue('first_name', $value);
    }

    function getFirstName() {
        return $this->getAttributeValue('first_name');
    }

    function setLastName($value) {
        $this->setAttributeValue('last_name', $value);
    }

    function getLastName() {
        return $this->getAttributeValue('last_name');
    }

    function setEmail($value) {
        $this->setAttributeValue('email', $value);
    }

    function getEmail() {
        return $this->getAttributeValue('email');
    }

    function setPassword($value) {
        $this->setAttributeValue('password', $value);
    }

    function getPassword() {
        return $this->getAttributeValue('password');
    }
}
