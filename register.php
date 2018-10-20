<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:57:34
*/

require_once 'helpers/utils.helper.php';

if (isset($_POST)) {
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : null;
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    $errors = array();

    if (!Utils::isValidName($firstName)) {
        $errors['firstName'] = 'El nombre no es válido.';
    }

    if (!Utils::isValidName($lastName)) {
        $errors['lastName'] = 'El apellido no es válido.';
    }

    if (!Utils::isValidEmail($email)) {
        $errors['email'] = 'El email no tiene un formato válido.';
    }

    if (empty($password)) {
        $errors['password'] = 'La contraseña es requerida.';
    }



}
