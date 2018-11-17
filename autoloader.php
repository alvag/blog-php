<?php
/**
* Created by Max Alva
* Date: 2018/11/16
* Time: 01:05:11
*/

spl_autoload_register(function ($class_name) {
    $directorys = array("models/", "controllers/");

    foreach($directorys as $directory) {
        if(file_exists(DIR_BASE.$directory.$class_name . '.php')) {
            include DIR_BASE.$directory.$class_name . '.php';
        };

    }
});
