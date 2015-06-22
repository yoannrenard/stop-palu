<?php
switch($_SERVER['HTTP_HOST']) {
	case 'localhost':
		//DB data
		define('DB_BASE', 'mysql');
		define('DB_HOST', 'localhost');
		define('DB_NAME', 'stoppalu');
		define('DB_USER', 'root');
		define('DB_PASSWORD', '');
		
		$_SERVER['VIRTUAL_ROOT'] = 'http://localhost/stop-palu/web/';
		break;
	case 'http://www.stop-palu.com':
	default:
		//DB data
		define('DB_BASE', 'mysql');
		define('DB_HOST', 'db413565108.db.1and1.com');
		define('DB_NAME', 'db413565108');
		define('DB_USER', 'dbo413565108');
		define('DB_PASSWORD', 'Ne7yVQq');
	
		$_SERVER['VIRTUAL_ROOT'] = 'http://www.stop-palu.com/';
		break;
}

define('ROOTPATH', __DIR__.'/../');

define('REF_DESCRIPTION', '');
define('REF_KEYWORDS', '');