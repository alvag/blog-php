<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 22:17:12
*/

function getValue($value) {
    return (isset($value) && trim($value) != NULL) ? trim($value) : NULL;
}

function isValidName($name) {
    return !empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name);
}

function isValidEmail($email) {
    return !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
}

function hasError($errors, $field) {
    if (isset($_SESSION[$errors])) {
        $arrErrors = $_SESSION[$errors];
        return isset($arrErrors[$field]);
    } else {
        return false;
    }
}

function getValueSession($session, $field) {
    if (isset($_SESSION[$session])) {
        $arr = $_SESSION[$session];
        return $arr[$field];
    } else {
        return '';
    }
}

function encryptPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT, ['const' => 4]);
}

function passwordVerify($password, $encryptedPassword) {
    return password_verify($password, $encryptedPassword);
}
