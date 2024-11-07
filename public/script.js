document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("taskForm");
    const editForm = document.getElementById("editForm");
    const taskList = document.getElementById("tasks");
    const editSection = document.getElementById("editTask");

    if (!editSection) {
        console.error("No se encontró la sección de edición (editTask) en el DOM");
    }

    // Función para mostrar tareas en el DOM
    const displayTasks = (tasks) => {
        taskList.innerHTML = '';

        tasks.forEach(task => {
            const listItem = document.createElement("li");
            listItem.innerHTML = `
                <strong>${task.title}</strong>
                <p>${task.description}</p>
                <p>Fecha de finalización: ${task.end}</p>
                <button class="edit-button" data-id="${task.id}" data-title="${task.title}" data-description="${task.description}" data-end="${task.end}">Editar</button>
                <button class="delete-button" data-id="${task.id}">Borrar</button>
            `;
            taskList.appendChild(listItem);
        });

        // Añadir evento de clic a cada botón de edición
        document.querySelectorAll(".edit-button").forEach(button => {
            button.addEventListener("click", (e) => {
                const id = e.target.getAttribute("data-id");
                const title = e.target.getAttribute("data-title");
                const description = e.target.getAttribute("data-description");
                const end = e.target.getAttribute("data-end");

                console.log(`Editando tarea con ID: ${id}`);
                editTask(id, title, description, end); // Llamada a la función de edición
            });
        });

        // Añadir evento de clic a cada botón de borrado
        document.querySelectorAll(".delete-button").forEach(button => {
            button.addEventListener("click", (e) => {
                const id = e.target.getAttribute("data-id");
                console.log(`Borrando tarea con ID: ${id}`);
                deleteTask(id); // Llamada a la función de eliminación
            });
        });
    };

    // Obtener y mostrar todas las tareas
    const fetchTasks = () => {
        fetch('api.php')
            .then(response => response.json())
            .then(data => {
                displayTasks(data);
            })
            .catch(error => console.error('Error al obtener tareas:', error));
    };

    // Llama a fetchTasks para obtener y mostrar las tareas al cargar la página
    fetchTasks();

    // Función para mostrar el formulario de edición y rellenarlo con los datos de la tarea
    const editTask = (id, title, description, end) => {
        if (!editSection) return;

        // Mostrar formulario de edición
        editSection.style.display = "block";
        document.getElementById("task_id").value = id;
        document.getElementById("edit_title").value = title;
        document.getElementById("edit_description").value = description;
        document.getElementById("edit_end").value = end; // Rellenar el campo 'end'
        console.log("Formulario de edición mostrado");
    };

    // Función para eliminar tarea
    const deleteTask = (id) => {
        if (confirm("¿Estás seguro de que deseas borrar esta tarea?")) {
            fetch(`api.php?id=${id}`, {  // Usamos GET para pasar el id en la URL
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => response.json())
            .then(data => {
                alert("Tarea eliminada correctamente");
                fetchTasks(); // Refresca la lista de tareas
            })
            .catch(error => console.error('Error al eliminar la tarea:', error));
        }
    };

    // Manejo del envío del formulario de creación de tarea
    form && form.addEventListener("submit", (e) => {
        e.preventDefault();

        const title = form.title.value.trim();
        const description = form.description.value.trim();
        const end = form.end.value.trim(); // Obtener el valor del campo 'end'

        if (title && description && end) {
            fetch('api.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ title, description, end })
            })
            .then(response => response.json())
            .then(data => {
                alert("Tarea agregada correctamente");
                form.reset();
                fetchTasks();
            })
            .catch(error => console.error('Error al agregar la tarea:', error));
        } else {
            alert("Por favor, complete todos los campos.");
        }
    });

    // Manejo del envío del formulario de edición de tarea
    editForm && editForm.addEventListener("submit", (e) => {
        e.preventDefault();

        const id = document.getElementById("task_id").value;
        const title = document.getElementById("edit_title").value.trim();
        const description = document.getElementById("edit_description").value.trim();
        const end = document.getElementById("edit_end").value.trim(); // Obtener el valor del campo 'end'

        if (title && description && end) {
            fetch('api.php', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id, title, description, end })
            })
            .then(response => response.json())
            .then(data => {
                alert("Tarea actualizada correctamente");
                editForm.reset();
                editSection.style.display = "none"; // Ocultar el formulario de edición
                fetchTasks(); // Refresca la lista de tareas
            })
            .catch(error => console.error('Error al actualizar la tarea:', error));
        } else {
            alert("Por favor, complete todos los campos.");
        }
    });
});
