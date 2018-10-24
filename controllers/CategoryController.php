<?php
/**
* Created by Max Alva
* Date: 2018/10/21
* Time: 15:48:42
*/

require_once DIR_MODELS.'Category.php';

class CategoryController {

    static public function create($request) {
        $category = new Category;
        $category->setName($request['name']);
        return $category->create();
    }

    static function getAll() {
        $category = new Category;
        return $category->getAll();
    }

    static public function getOne($request) {
        $category = new Category;
        return $category->getOne($request);
    }
}
