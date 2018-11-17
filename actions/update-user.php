<?php
/**
* Created by Max Alva
* Date: 2018/10/23
* Time: 07:10:54
*/
require  $_SERVER['DOCUMENT_ROOT'].'/config/routes_config.php';
require DIR_BASE."/autoloader.php";
require CHECK_AUTH;
require DIR_HELPERS.'UtilsHelper.php';

if (isset($_POST)) {
    $request['firstName'] = getValue($_POST['firstName']);
    $request['lastName'] = getValue($_POST['lastName']);
    $request['email'] = getValue($_POST['email']);

    $_SESSION['register_form'] = $request;

    $errors = array();

    if (!isValidName($request['firstName'])) {
        $errors['firstName'] = true;
    }

    if (!isValidName($request['lastName'])) {
        $errors['lastName'] = true;
    }

    if (!isValidEmail($request['email'])) {
        $errors['email'] = true;
    }

    if (count($errors) == 0) {
        unset($_SESSION['account_errors']);
        if (UserController::create($request)) {
            $_SESSION['register_success'] = true;
            unset($_SESSION['register_form']);
        } else {
            $_SESSION['register_success'] = false;
        }
    } else {
        unset($_SESSION['register_success']);
        $_SESSION['account_errors'] = $errors;
    }
    header('Location: my-account.php');

}
