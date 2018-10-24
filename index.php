<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:33:22
*/
require_once 'config/routes_config.php';
require_once DIR_CTRLS.'TemplateController.php';
require_once DIR_CTRLS.'UserController.php';
require_once DIR_CTRLS.'PostController.php';
session_start();

include_once DIR_HELPERS.'/UtilsHelper.php';
$template = new TemplateController();
$template->template();
