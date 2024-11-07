<?php
header("Content-Type: application/json");

require 'controllers/TaskController.php';

$controller = new TaskController();

// Detectar el método HTTP y llamar a la función correspondiente
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (isset($_GET['id'])) {
            echo json_encode($controller->getTask($_GET['id']));
        } else {
            echo json_encode($controller->getAllTasks());
        }
        break;
    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);
        echo json_encode($controller->addTask($data));
        break;
    case 'PUT':
        $data = json_decode(file_get_contents("php://input"), true);
        echo json_encode($controller->updateTask($data));
        break;
    case 'DELETE':
        if (isset($_GET['id'])) {
            echo json_encode($controller->deleteTask($_GET['id']));
        }
        break;
    default:
        echo json_encode(["error" => "Método no permitido"]);
        break;
}
?>
