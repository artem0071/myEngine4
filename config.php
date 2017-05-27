<?php
// EXTENSIONS
define('PHP', '.php');
define('E_CSS', '.css');
define('E_JS', '.js');

// DATABASE
define('DB_CONNECTION', 'mysql:host=127.0.0.1');
define('DB_NAME', 'myAudio');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_OPTIONS', [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

// FOLDERS
define('DIR', __DIR__);
define('APP', 'app/');
define('CORE', 'core/');
define('DB', CORE.'DB/');
define('VIEWS', APP.'views/');
define('CONTROLLERS', APP.'controllers/');
define('MODULES', APP.'modules/');
define('CSS','public/src/css/');
define('JS','public/src/js/');
define('FONTS','public/src/fonts/');

// FILES
define('NOT_FOUND', VIEWS.'404'.PHP);