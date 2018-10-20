<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 19:41:06
*/

include_once 'config/db_config.php';
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_query($db, "SET NAMES 'utf8'");
