<?php
/**
* Created by Max Alva
* Date: 2018/10/21
* Time: 15:48:42
*/

require_once 'models/category.model.php';

class CategoryController {

    static function getAll() {
        $category = new Category;
        return $category->getAll();
    }
}
