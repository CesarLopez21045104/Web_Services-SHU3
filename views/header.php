<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Tareas</title>

    <!-- Cargando el CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Estilos personalizados -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
        }

        header {
            background: linear-gradient(to right, #007bff, #6610f2);
            color: white;
            border-bottom: 3px solid #0056b3;
            padding: 20px 0;
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        /* Estilo para el Navbar */
        nav {
            background: #343a40;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav .nav-item {
            position: relative;
        }

        nav .nav-link {
            color: #ffffff;
            font-size: 1.2rem;
            padding: 12px 20px;
            display: block;
            text-align: center;
            transition: all 0.3s ease;
        }

        nav .nav-link:hover {
            background-color: #17a2b8;
            color: #fff;
            transform: scale(1.1);
        }

        nav .nav-link:before {
            content: "";
            position: absolute;
            bottom: -4px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #17a2b8;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease-out;
        }

        nav .nav-link:hover:before {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /* Efecto de animación en el header */
        header h1 {
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

        /* Estilos para el contenido principal */
        .jumbotron {
            background: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .jumbotron h2 {
            font-size: 2rem;
            font-weight: 600;
        }

        .jumbotron p {
            font-size: 1.2rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <header class="text-center">
        <div class="container">
            <h1>Gestor de Tareas</h1>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="index.php?page=task_list" class="nav-link">Ver Tareas</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=add_task" class="nav-link">Agregar Tarea</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="container">
        <!-- Aquí va el contenido principal -->
        <div class="jumbotron text-center">
            <h2>Bienvenido al Gestor de Tareas</h2>
            <p class="lead">Utiliza las opciones de arriba para gestionar tus tareas.</p>
        </div>
    </main>

    <!-- Cargando el script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
