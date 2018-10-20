<?php
/**
* Created by Max Alva
* Date: 2018/10/20
* Time: 11:58:40
*/

require_once 'model.php';

class User extends Model {

    protected static $tableName = 'users';
    protected static $primaryKey = 'id';

    function setId($value) {
        $this->setColumnValue('id', $value);
    }

    function getId($value) {
        return $this->getColumnValue('id');
    }

    function setFirstName($value) {
        $this->setColumnValue('first_name', $value);
    }

    function getFirstName($value) {
        return $this->getColumnValue('first_name');
    }

    function setLastName($value) {
        $this->setColumnValue('last_name', $value);
    }

    function getLastName($value) {
        return $this->getColumnValue('last_name');
    }

    function setEmail($value) {
        $this->setColumnValue('email', $value);
    }

    function getEmail($value) {
        return $this->getColumnValue('email');
    }

    function setPassword($value) {
        $this->setColumnValue('password', $value);
    }

    function getPassword($value) {
        return $this->getColumnValue('password');
    }

    function getCreatedAt($value) {
        return $this->getColumnValue('created_at');
    }

    function getUpdatedAt($value) {
        return $this->getColumnValue('updated_at');
    }

    function getDeletedAt($value) {
        return $this->getColumnValue('deleted_at');
    }
}
