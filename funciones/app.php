<?php

require_once  __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/funcion.php';
require_once __DIR__ . '/../config/db.php';

use Models\ActiveRecord;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$db = conectardb();

ActiveRecord::setDB($db);
