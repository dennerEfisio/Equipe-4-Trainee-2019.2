<?php 

ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

require 'config/config.php';
require 'app/core/Core.php';
require 'vendor/autoload.php';

$core = new Core;
$core->run();