<section id="addTask">
    <h2>Agregar Tarea</h2>
    <form id="taskForm" action="index.php?page=task_list" method="POST">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="description">Descripción:</label>
        <textarea id="description" name="description" required></textarea>
        
        <label for="end">Fecha de finalización:</label>
        <input type="datetime-local" id="end" name="end" required>
        
        <button type="submit">Agregar Tarea</button>
    </form>
</section>
