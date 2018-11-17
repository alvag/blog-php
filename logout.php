<?php
/**
* Created by Max Alva
* Date: 2018/10/21
* Time: 14:39:44
*/

session_start();

if (isset($_SESSION['user'])) {
    session_destroy();
}

header('Location: /');
