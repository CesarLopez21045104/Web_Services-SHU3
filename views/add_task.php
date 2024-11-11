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

<!-- Estilos adicionales -->
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fc;
    }

    #addTask {
        background: linear-gradient(to right, #00c6ff, #0072ff);
        color: white;
        border-radius: 10px;
        padding: 40px 0;
    }

    #addTask h2 {
        font-size: 2.5rem;
        font-weight: bold;
        animation: slideIn 1s ease-out;
    }

    @keyframes slideIn {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    form {
        background-color: white;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        font-weight: 600;
        color: #333;
    }

    .form-control {
        border-radius: 5px;
        border: 1px solid #ddd;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        border-color: #0072ff;
        box-shadow: 0 0 5px rgba(0, 114, 255, 0.5);
    }

    button[type="submit"] {
        font-size: 1.2rem;
        padding: 10px 30px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }
</style>
