<table style="width: 100%; border-spacing: 0;">
    <tr>
        <td style="width: 50%; padding-right: 20px;">
            <!-- Sección de Tareas -->
            <section id="taskList">
                <h2>Tareas</h2>
                <ul id="tasks">
                    <!-- Aquí se listarán las tareas -->
                </ul>
            </section>
        </td>
        <td style="width: 50%; padding-left: 20px;">
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
        </td>
    </tr>
</table>

<!-- Estilos adicionales -->
<style>
 /* Estilo para el botón de editar (verde) */
.edit-button {
    padding: 10px 20px;
    border-radius: 5px;
    background-color: #43C30F; /* Verde */
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.edit-button:hover {
    background-color: #36a30b; /* Un verde más oscuro al pasar el mouse */
    transform: scale(1.05);
}

/* Estilo para el botón de borrar (rojo) */
.delete-button {
    padding: 10px 20px;
    border-radius: 5px;
    background-color: #E4080A; /* Rojo */
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.delete-button:hover {
    background-color: #b30707; /* Rojo más oscuro al pasar el mouse */
    transform: scale(1.05);
}

/* Estilo para el texto de la tarea */
strong {
    font-weight: bold;
    font-size: 1.2rem;
    color: #333;
}

p {
    font-size: 1rem;
    color: #666;
}
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f7fc;
    }

    /* Estilos para las secciones */
    #taskList, #editTask {
        width: 100%; /* Ocupa todo el espacio dentro del contenedor del td */
        padding: 40px;
        border-radius: 10px;
        background-color: #0072ff; /* Fondo similar al navbar */
        color: white;
        margin-bottom: 30px;
    }

    #taskList h2, #editTask h2 {
        font-size: 2.5rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
        animation: slideIn 1s ease-out;
    }

    #tasks {
        list-style: none;
        padding-left: 0;
    }

    #tasks li {
        background-color: white;
        margin: 10px 0;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #tasks li:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    #editTask {
        background-color: white;
        color: #333;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    #editForm label {
        font-weight: 600;
        color: #333;
        display: block;
        margin-bottom: 5px;
    }

    #editForm input,
    #editForm textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: 1px solid #ddd;
        transition: border-color 0.3s ease;
    }

    #editForm input:focus,
    #editForm textarea:focus {
        border-color: #0072ff;
        box-shadow: 0 0 5px rgba(0, 114, 255, 0.5);
    }

    #editForm button[type="submit"] {
        font-size: 1.2rem;
        padding: 10px 30px;
        border-radius: 5px;
        background-color: #0072ff;
        color: white;
        border: none;
        transition: background-color 0.3s ease;
    }

    #editForm button[type="submit"]:hover {
        background-color: #0056b3;
        transform: scale(1.05);
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
</style>
