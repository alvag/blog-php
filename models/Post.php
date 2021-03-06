<?php
/**
* Created by Max Alva
* Date: 2018/10/21
* Time: 17:30:32
*/

require_once DIR_MODELS.'Model.php';
require_once DIR_MODELS.'Category.php';
require_once DIR_MODELS.'User.php';

class Post extends Model {

    protected static $tableName = 'posts';
    protected static $primaryKey = 'id';

    function __construct() {
        $this->attributes = array();
    }

    function setId($value) {
        $this->setAttributeValue('id', $value);
    }

    function getId() {
        return $this->getAttributeValue('id');
    }

    function setTitle($value) {
        $this->setAttributeValue('title', $value);
    }

    function getTitle() {
        return $this->getAttributeValue('title');
    }

    function setDescription($value) {
        $this->setAttributeValue('description', $value);
    }

    function getDescription() {
        return $this->getAttributeValue('description');
    }

    function setCategoryId($value) {
        $this->setAttributeValue('category_id', $value);
    }

    function getCategoryId() {
        return $this->getAttributeValue('category_id');
    }

    function setUserId($value) {
        $this->setAttributeValue('user_id', $value);
    }

    function getUserId() {
        return $this->getAttributeValue('user_id');
    }

    function getCategory() {
        $category = new Category;
        return $category->getByPrimaryKey(self::getCategoryId(), FALSE);
    }

    function getUser() {
        $user = new User;
        return $user->getByPrimaryKey(self::getUserId(), FALSE);
    }

}
