<?php
/**
* Created by Max Alva
* Date: 2018/10/20
* Time: 14:01:03
*/

require DIR_BASE."/autoloader.php";

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

    static public function update($request) {
        $user = new User;
        $user->setFirstName($request['firstName']);
        $user->setLastName($request['lastName']);
        $user->setEmail($request['email']);
        return $user->getOne();
    }


}
