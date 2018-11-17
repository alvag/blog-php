<?php
/**
* Created by Max Alva
* Date: 2018/10/21
* Time: 17:31:03
*/

require DIR_BASE."/autoloader.php";

class PostController {

    static public function create($request) {
        $post = new Post;
        $post->setTitle($request['title']);
        $post->setDescription($request['description']);
        $post->setCategoryId($request['category_id']);
        $post->setUserId($request['user_id']);
        return $post->create();
    }

    static function getAll() {
        $post = new Post;
        return $post->getAll(array(), 'id DESC', 0, 5);
    }

    static public function getById($id) {
        $post = new Post;
        return $post->getByPrimaryKey($id);
    }
}
