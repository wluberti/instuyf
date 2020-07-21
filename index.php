<?php declare(strict_types=1);

$notifications = [];

require_once 'src/bootstrap.php';

$template = $twig->load('home.twig');
echo $template->render([
    'notifications' => $notifications,
]);
