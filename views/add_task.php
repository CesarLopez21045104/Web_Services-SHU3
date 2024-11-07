<section id="addTask">
    <h2>Agregar Tarea</h2>
    <form id="taskForm" action="index.php?page=task_list" method="POST">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="description">Descripción:</label>
        <textarea id="description" name="description" required></textarea>
        
        <button type="submit">Agregar Tarea</button>
    </form>
</section>
