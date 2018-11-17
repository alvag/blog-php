<?php
/**
* Created by Max Alva
* Date: 2018/10/22
* Time: 22:42:39
*/

require $_SERVER['DOCUMENT_ROOT'].'/config/routes_config.php';
require DIR_BASE."/autoloader.php";
require CHECK_AUTH;
require DIR_HELPERS.'UtilsHelper.php';

if (isset($_POST)) {
    $request['title'] = getValue($_POST['title']);
    $request['description'] = getValue($_POST['description']);
    $request['category_id'] = getValue($_POST['category_id']);

    $_SESSION['post_form'] = $request;

    $errors = array();

    if (empty($request['title'])) {
        $errors['title'] = true;
    }

    if (empty($request['description'])) {
        $errors['description'] = true;
    }

    $request['user_id'] = $_SESSION['user']->getId();

    if (count($errors) == 0) {
        unset($_SESSION['post_errors']);
        if (PostController::create($request)) {
            $_SESSION['post_success'] = true;
            unset($_SESSION['post_form']);
        } else {
            $_SESSION['register_success'] = false;
        }
    } else {
        unset($_SESSION['post_success']);
        $_SESSION['post_errors'] = $errors;
    }

    header('Location: '.DIR_PAGES.'create-post.php');



}
