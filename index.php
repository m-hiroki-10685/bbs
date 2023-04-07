<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo $_ENV["HOST_NAME"] ."<br>";
echo $_ENV["DB_NAME"] ."<br>";
echo $_ENV["DB_USER"] ."<br>";
echo $_ENV["DB_PASSWORD"] ."<br>";