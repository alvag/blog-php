<?php
/**
* Created by Max Alva
* Date: 2018/10/22
* Time: 07:34:27
*/

session_start();
require_once '../config/routes_config.php';
require_once DIR_CTRLS.'category.controller.php';
require_once DIR_HELPERS.'utils.helper.php';

if (isset($_POST)) {
    $request['name']  = getValue($_POST['name']);

    $_SESSION['category_form'] = $name;
    $errors = array();

    if (empty($request['name'])) {
        $errors['name'] = true;
    }

    if (count($errors) == 0) {
        unset($_SESSION['category_errors']);
        if (CategoryController::create($request)) {
            $_SESSION['category_success'] = true;
            unset($_SESSION['category_form']);
        } else {
            $_SESSION['register_success'] = false;
        }
    } else {
        unset($_SESSION['category_success']);
        $_SESSION['category_errors'] = $errors;
    }

    header('Location: /create-category.php');
}
