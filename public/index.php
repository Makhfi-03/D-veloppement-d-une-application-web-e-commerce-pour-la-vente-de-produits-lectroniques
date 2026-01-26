<?php
include '../app/config/config.php';
include '../app/models/User.php';
include '../app/controllers/AuthController.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
switch ($uri) {
    case '/login':
        $user = new AuthController();
        $user->Login();
        break;

    case '/register':
        $user = new AuthController();
        $user->Register();
        break;

    case '/logout':
        $user = new AuthController();
        $user->logout();
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
        session_start();
        require_once __DIR__ . '/../app/views/back/dashboardAdmin.php';
        break;

    case '/Client':
        session_start();
        require_once __DIR__ . '/../app/views/back/dashboardClient.php';
        break;

    case '/Historique':
        session_start();
        require_once __DIR__ . '/../app/views/back/historiqueCommandes.php';
        break;

    case '/product':
        session_start();
        require_once __DIR__ . '/../app/views/back/product.php';
        break;

    default:
        header('Location: ../app/views/front/404.php');
        break;
}
