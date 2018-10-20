<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:57:34
*/

session_start();
require_once 'helpers/utils.helper.php';

if (isset($_POST)) {
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : null;
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    $errors = array();

    if (!isValidName($firstName)) {
        $errors['firstName'] = true;
    }

    if (!isValidName($lastName)) {
        $errors['lastName'] = true;
    }

    if (!isValidEmail($email)) {
        $errors['email'] = true;
    }

    if (empty($password)) {
        $errors['password'] = true;
    }

    if (count($errors) == 0) {
        unset($_SESSION["errors_register"]);
        header("Location: index.php");
    } else {
        $_SESSION["errors_register"] = $errors;
        header("Location: index.php");
    }

}
