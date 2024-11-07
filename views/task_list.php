<section id="taskList">
    <h2>Tareas</h2>
    <ul id="tasks">
        <!-- Aquí se listarán las tareas -->
    </ul>
</section>

<!-- Formulario de edición, inicialmente oculto -->
<section id="editTask" style="display: none;">
    <h2>Editar Tarea</h2>
    <form id="editForm" action="index.php?page=task_list" method="POST">
        <input type="hidden" id="task_id" name="task_id">
        
        <label for="title">Título:</label>
        <input type="text" id="edit_title" name="title" required>
        
        <label for="description">Descripción:</label>
        <textarea id="edit_description" name="description" required></textarea>
        
        <label for="end">Fecha de finalización:</label>
        <input type="datetime-local" id="edit_end" name="end" required>
        
        <button type="submit">Guardar Cambios</button>
    </form>
</section>
