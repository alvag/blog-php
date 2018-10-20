<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:46:54
*/

include_once 'config/db_config.php';

class Conexion {

	public static function conectar() {

		// trae los caracteres en escritura latina sin ningun problema
        $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

		$link = new PDO("mysql:host={DB_HOST};dbname={DB_NAME}", DB_USER, DB_PASSWORD, $options);
		return $link;
	}

}
