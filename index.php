<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:33:22
*/
require_once 'config/routes_config.php';
require_once DIR_CTRLS.'template.controller.php';
require_once DIR_CTRLS.'user.controller.php';
require_once DIR_CTRLS.'post.controller.php';
session_start();

include_once DIR_HELPERS.'/utils.helper.php';
$template = new TemplateController();
$template->template();
