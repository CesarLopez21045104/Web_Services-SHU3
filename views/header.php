<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Tareas</title>

    <!-- Cargando el CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/header.css">
   
</head>
<body>

    <header class="text-center">
        <div class="container">
            <h1>Gestor de Tareas</h1>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <ul class="nav me-auto"> <!-- Esto alinea los primeros items a la izquierda -->
                        <li class="nav-item">
                            <a href="index.php?page=task_list" class="nav-link">Ver Tareas</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=add_task" class="nav-link">Agregar Tarea</a>
                        </li>
                    </ul>

                    <!-- El botón "Cerrar Sesión" se alinea al final de la barra de navegación y se ve igual que los otros botones -->
                    <ul class="nav ms-auto"> <!-- Esto alinea los items a la derecha -->
    <li class="nav-item">
        <a href="login.php" class="nav-link logout-btn">Cerrar Sesión</a>
    </li>
</ul>

                </div>
            </nav>
        </div>
        <main class="container">
        <!-- Aquí va el contenido principal -->
        <div class="jumbotron text-center">
            <h2>Bienvenido al Gestor de Tareas</h2>
            <p class="lead">Utiliza las opciones de arriba para gestionar tus tareas.</p>
        </div>
        </main>
    </header>

    <!-- Cargando el script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
