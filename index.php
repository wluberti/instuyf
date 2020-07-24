<?php declare(strict_types=1);

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once 'vendor/autoload.php';

$errors = [];
$notifications = [];

try {
    $pdo = new PDO("mysql:host=instuyf_mysql;dbname=instuyf", 'root', 'example');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $errors[] = "Connected successfully";
} catch(PDOException $e) {
    $errors[] = "Connection failed: " . $e->getMessage();
}

$app = new \Spuyt\Database($pdo);

foreach ($app->getAllUsers() as $user){
    $notifications[] = $user['email'];
}
$notifications[] = "==================";

foreach ($app->searchUser('est') as $user){
    $notifications[] = $user['email'];
}

$twig = new Environment(new FilesystemLoader('templates/'));
$template = $twig->load('home.twig');
echo $template->render([
    'notifications' => $notifications,
]);
