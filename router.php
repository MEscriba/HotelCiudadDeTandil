<?php
require_once 'app/HabitacionController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'homenuevo'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// tabla de ruteo
switch ($params[0]) {
    case 'homenuevo':
        $habController = new HabController();
        $habController->showHome();
        break;
    case 'show-capacity':
        $habController = new HabController();
        $habController->showCapacity();
        break;
    case 'show':
        $habController = new HabController();
        $habController->show();
        break;
    case 'add':
        $habController = new HabController();
        $habController->add();
        break;
    default:
        echo('404 Page not found');
        break;
}
  