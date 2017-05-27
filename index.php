<?
session_start();
require 'config.php';
require 'core/bootstrap.php';

$app = new App();
$app->render();