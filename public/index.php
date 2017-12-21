<?php

session_start();

require_once '../vendor/autoload.php';
use app\core;
use app\core\Loger;

core\Route::start();
