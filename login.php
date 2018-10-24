<?php
/**
* Created by Max Alva
* Date: 2018/10/21
* Time: 11:33:24
*/

require_once  $_SERVER['DOCUMENT_ROOT'].'/config/routes_config.php';
require_once DIR_CTRLS.'UserController.php';
require_once DIR_HELPERS.'UtilsHelper.php';
session_start();

if (isset($_POST)) {

    $request['email'] = getValue($_POST['email']);
    $password= getValue($_POST['password']);

    $_SESSION['login_form'] = $request;

    $errors = array();

    if (!isValidEmail($request['email'])) {
        $errors['email'] = true;
    }

    if (empty($password)) {
        $errors['password'] = true;
    }

    if (count($errors) == 0) {
        unset($_SESSION['login_errors']);

        $user = UserController::getOne($request);

        if ($user) {
            $isLoggedIn = passwordVerify($password, $user->getPassword());
            if ($isLoggedIn) {
                $_SESSION['user'] = $user;
                unset($_SESSION['login_success']);
            } else {
                $_SESSION['login_success'] = false;
            }
        }else {
            $_SESSION['login_success'] = false;
        }

    } else {
        unset($_SESSION['login_success']);
        $_SESSION['login_errors'] = $errors;
    }

    header('Location: index.php');
}
