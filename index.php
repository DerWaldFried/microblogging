<?php
declare(strict_types=1);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/app/Core/Database.php';
require_once __DIR__ . '/app/Core/Asset.php';
require_once __DIR__ . '/app/Core/Controller.php';
require_once __DIR__ . '/app/Core/Template.php';
require_once __DIR__ . '/app/Core/View.php';
require_once __DIR__ . '/app/Controller/HomeController.php';

$controller = new HomeController();
echo $controller->index();