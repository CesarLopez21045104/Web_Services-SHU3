<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Tareas</title>

    <!-- Cargando el CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header class="bg-primary text-white p-4 mb-4">
        <div class="container">
            <h1 class="display-4">Gestor de Tareas</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="index.php?page=task_list" class="nav-link text-white">Ver Tareas</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=add_task" class="nav-link text-white">Agregar Tarea</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <!-- Aquí va el contenido principal -->
        <div class="jumbotron">
            <h2 class="text-center">Bienvenido al Gestor de Tareas</h2>
            <p class="lead text-center">Utiliza las opciones de arriba para gestionar tus tareas.</p>
        </div>
    </main>

    <!-- Cargando el script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
