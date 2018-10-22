<?php
/**
* Created by Max Alva
* Date: 2018/10/21
* Time: 17:31:03
*/

require_once 'models/post.model.php';

class PostController {

    static function getAll() {
        $post = new Post;
        return $post->getAll(array(), 'id DESC', 0, 5);
    }

    static public function getById($id) {
        $post = new Post;
        return $post->getByPrimaryKey($id);
    }
}
