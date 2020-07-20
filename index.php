<?php declare(strict_types=1);

require_once 'vendor/autoload.php';
$templateDir = 'templates/';

$loader = new \Twig\Loader\FilesystemLoader($templateDir);
$twig = new \Twig\Environment($loader, [
    // 'cache' => 'var/cache',
]);

$displayPage = 'home.twig';
$notifications[] = 'hoi';

$template = $twig->load($displayPage);
echo $template->render([
    'notifications' => $notifications,
]);
