<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$twig = new Environment(new FilesystemLoader('templates/'));


try {
    $dbconn = new PDO("mysql:host=127.0.0.1;dbname=instuyf", 'root', 'example');
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $notifications[] = "Connected successfully";
} catch(PDOException $e) {
    $notifications[] = "Connection failed: " . $e->getMessage();
}