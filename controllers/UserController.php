<?php
/**
* Created by Max Alva
* Date: 2018/10/20
* Time: 14:01:03
*/

require_once  $_SERVER['DOCUMENT_ROOT'].'/config/routes_config.php';
require_once DIR_MODELS.'User.php';

class UserController {

    static public function create($request) {
        $user = new User;
        $user->setFirstName($request['firstName']);
        $user->setLastName($request['lastName']);
        $user->setEmail($request['email']);
        $user->setPassword($request['password']);
        return $user->create();
    }

    static public function getOne($request) {
        $user = new User;
        return $user->getOne($request);
    }

}
