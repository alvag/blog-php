<?php
/**
* Created by Max Alva
* Date: 2018/10/22
* Time: 21:28:32
*/
define('DIR_BASE',      $_SERVER['DOCUMENT_ROOT'] . '/');
//define('DIR_BASE',      dirname( dirname( __FILE__ ) ) . '/');
define('DIR_MODULES',     DIR_BASE . 'views/modules/');
define('DIR_CTRLS',      DIR_BASE . 'controllers/');
define('DIR_MODELS',      DIR_BASE . 'models/');
define('DIR_PAGES',      '/pages/');
define('DIR_CONFIG',      DIR_BASE . 'config/');
define('DIR_HELPERS',      DIR_BASE . 'helpers/');
define('DIR_ACTIONS',      '/actions/');
define('CHECK_AUTH',      DIR_BASE . 'check-auth.php');
define('SESSION_START',      DIR_BASE . 'session_start.php');
