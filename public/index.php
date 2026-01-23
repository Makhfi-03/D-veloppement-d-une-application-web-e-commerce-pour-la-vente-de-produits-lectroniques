<?php
include '../app/config/config.php';
include '../app/models/User.php';
include '../app/controllers/AuthController.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
var_dump($uri);

switch ($uri) {
    case '/Accueil':
        echo 'this is home';
        break;

    case '/login':
        $user = new AuthController();
        $user->Login();
        break;

    case '/register':
        $user = new AuthController();
        $user->Register();
        break;

    case '/':
        require_once '../app/views/front/Accueil.php';
        break;

    case '/auth/register':
        require_once '../app/views/auth/register.php';
        break;

    case '/auth/login':
        require_once '../app/views/auth/login.php';
        break;

    case '/Admin':
        require_once '../app/views/back/dashboardAdmin.php';
        break;

    default:
        header('Location: ../app/views/front/404.php');
        break;
}
