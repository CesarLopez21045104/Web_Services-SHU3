<?php
require_once 'models/Task.php';

class TaskController {
    private $taskModel;

    public function __construct() {
        $this->taskModel = new Task();
    }

    public function getAllTasks() {
        return $this->taskModel->getTasks();
    }

    public function getTask($id) {
        return $this->taskModel->getTaskById($id);
    }

    public function addTask($data) {
        // Aseguramos que 'end' esté incluido en el array de datos
        return $this->taskModel->createTask(
            $data['title'], 
            $data['description'], 
            $data['end'] // Nuevo campo agregado
        );
    }

    public function updateTask($data) {
        // Aseguramos que 'end' esté incluido en el array de datos
        return $this->taskModel->updateTask(
            $data['id'], 
            $data['title'], 
            $data['description'], 
            $data['end'] // Nuevo campo agregado
        );
    }

    public function deleteTask($id) {
        return $this->taskModel->deleteTask($id);
    }
}
?>
