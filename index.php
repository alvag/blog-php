<?php
/**
* Created by Max Alva
* Date: 2018/10/19
* Time: 21:33:22
*/

require_once "controllers/template.controller.php";
require_once 'controllers/user.controller.php';
require_once 'controllers/category.controller.php';
require_once 'controllers/post.controller.php';

include_once 'helpers/utils.helper.php';

$template = new TemplateController();
$template->template();
