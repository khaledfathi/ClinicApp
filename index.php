<?php
require('vendor/autoload.php');

use Clinicsys\Core\Database\MySQL as db;
use Clinicsys\Core\Validation\Validation as valid;
use Clinicsys\Core\Environment\Env;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

