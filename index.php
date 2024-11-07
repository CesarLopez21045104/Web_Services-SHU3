<?php
$page = $_GET['page'] ?? 'task_list';

include 'views/header.php';

switch ($page) {
    case 'add_task':
        include 'views/add_task.php';
        break;
    case 'edit_task':
        include 'views/edit_task.php';
        break;
    default:
        include 'views/task_list.php';
}

include 'views/footer.php';
?>
