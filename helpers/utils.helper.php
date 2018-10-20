<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 22:17:12
*/

class Utils {

    public function isValidName($name) {
        return !empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name);
    }

    public function isValidEmail($email) {
        return !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
    }

}
