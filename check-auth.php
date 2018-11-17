<?php
/**
* Created by Max Alva
* Date: 2018/10/22
* Time: 07:08:29
*/

if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['user'])) {
    header('Location: /');
    die();
}
