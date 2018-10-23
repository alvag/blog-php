<?php
/**
* Created by Max Alva
* Date: 2018/10/22
* Time: 22:42:39
*/

require_once dirname( dirname( __FILE__ ) ).'/config/routes_config.php';
require_once DIR_MODELS.'user.model.php';
session_start();
require_once DIR_CTRLS.'post.controller.php';
require_once DIR_HELPERS.'utils.helper.php';

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

    header('Location: /create-post.php');



}
