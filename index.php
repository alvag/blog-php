<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:33:22
*/
require_once 'config/routes_config.php';
include "autoloader.php";
session_start();
$template = new TemplateController();
$template->template();
