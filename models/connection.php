<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:46:54
*/

include_once 'config/db_config.php';

class DataBase {

	public static function getInstance() {

		// trae los caracteres en escritura latina sin ningun problema
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

		$link = new PDO("mysql:host=localhost;dbname=blog_php", DB_USER, DB_PASSWORD, $options);
		return $link;
	}

}
