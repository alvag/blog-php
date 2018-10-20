<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:57:34
*/
session_start();
include_once 'helpers/utils.helper.php';
require_once 'controllers/user.controller.php';

if (isset($_POST)) {
    $request = $_POST;
    $_SESSION['register_form'] = $_POST;

    $request['firstName'] = isset($_POST['firstName']) ? $_POST['firstName'] : null;
    $request['lastName'] = isset($_POST['lastName']) ? $_POST['lastName'] : null;
    $request['email'] = isset($_POST['email']) ? $_POST['email'] : null;
    $request['password']= isset($_POST['password']) ? $_POST['password'] : null;

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

    if (empty($request['password'])) {
        $errors['password'] = true;
    }

    if (count($errors) == 0) {
        unset($_SESSION['errors_register']);
        $request['password'] = encryptPassword($request['password']);
        if (UserController::create($request)) {
            $_SESSION['register_success'] = true;
            unset($_SESSION['register_form']);
        } else {
            $_SESSION['register_success'] = false;
        }
    } else {
        unset($_SESSION['register_success']);
        $_SESSION['errors_register'] = $errors;
    }
    header('Location: index.php');
}
