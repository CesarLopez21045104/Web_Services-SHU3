<?php
class Task {
    private $pdo;

    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost;dbname=gestor_tareas", "root", "");
    }

    public function getTasks() {
        $stmt = $this->pdo->query("SELECT * FROM tasks");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTaskById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createTask($title, $description) {
        $stmt = $this->pdo->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
        return $stmt->execute([$title, $description]);
    }

    public function updateTask($id, $title, $description) {
        $stmt = $this->pdo->prepare("UPDATE tasks SET title = ?, description = ? WHERE id = ?");
        return $stmt->execute([$title, $description, $id]);
    }

    public function deleteTask($id) {
        $stmt = $this->pdo->prepare("DELETE FROM tasks WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
