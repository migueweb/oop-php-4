<?php
require_once './vendor/autoload.php';

use App\Model\Connection;
use App\Controller\Contractor;
use App\Controller\Planta;

// Load Dotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); $dotenv->load();


$con = new Connection($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);

