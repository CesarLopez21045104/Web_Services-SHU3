<link rel="stylesheet" href="public/add.css">
<section id="addTask" class="py-5">
    <div class="container">
        <form id="taskForm" action="index.php?page=task_list" method="POST" class="bg-white p-4 rounded shadow-lg">
            <div class="form-group mb-3">
                <label for="title" class="form-label">Título:</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            
            <div class="form-group mb-3">
                <label for="description" class="form-label">Descripción:</label>
                <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
            </div>
            
            <div class="form-group mb-3">
                <label for="end" class="form-label">Fecha de finalización:</label>
                <input type="datetime-local" id="end" name="end" class="form-control" required>
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg mt-3">Agregar Tarea</button>
            </div>
        </form>
    </div>
</section>
