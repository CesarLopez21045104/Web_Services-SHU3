<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login con Google y Formulario</title>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #0072ff, #00c6ff);
            box-shadow: inset 0 0 200px rgba(0, 0, 0, 0.3); /* Sombra más intensa en el fondo */
        }

        h2 {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
            margin-bottom: 25px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            animation: slideIn 1s ease-out;
        }

        /* Contenedor único */
        .container {
            width: 100%;
            max-width: 400px;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            border-radius: 12px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3); /* Sombra más intensa */
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        /* Estilo para los botones */
        .g_id_signin {
            display: inline-block;
            margin-top: 25px;
            width: 100%;
            background-color: #4285F4;
            color: white;
            padding: 14px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 1.2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Sombra para el botón */
        }

        .g_id_signin:hover {
            background-color: #357ae8;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        /* Estilo del formulario */
        .login-form input {
            width: 100%;
            padding: 12px;
            margin: 15px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            transition: border-color 0.3s ease;
            background-color: #e0e7ff;
        }

        .login-form input:focus {
            border-color: #0072ff;
            box-shadow: 0 0 5px rgba(0, 114, 255, 0.5);
        }

        .login-form button {
            padding: 12px;
            border-radius: 5px;
            background-color: #43C30F;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 1.2rem;
            width: 100%;
        }

        .login-form button:hover {
            background-color: #36a30b;
            transform: scale(1.05);
        }

        /* Animación de deslizamiento */
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

        /* Animación de aparición */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>

    <!-- Contenedor único para el login con Google y formulario -->
    <div class="container">
        <h2>Iniciar sesión</h2>
        <h3>Gestor De Tareas</h3>

        <!-- Formulario de Login -->
        <form class="login-form" action="add_task.php" method="POST">
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar sesión</button>
        </form>

        <!-- Google Login debajo del formulario -->
        <div id="g_id_onload"
            data-client_id="657602146822-bsec49bb8nli0q636nshqoourskqemv1.apps.googleusercontent.com"
            data-callback="handleCredentialResponse">
        </div>
        <div class="g_id_signin" data-type="standard"></div>
    </div>

    <script>
        function handleCredentialResponse(response) {
            console.log("JWT del usuario recibido: " + response.credential);

            // Enviar el JWT al servidor para verificarlo
            fetch('/API/callback.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ token: response.credential })
            })
            .then(response => response.json())
            .then(data => {
                console.log("Respuesta del servidor:", data);
                if (data.success) {
                    // Inicio de sesión exitoso
                    alert("Bienvenido, " + data.name);
                    // Redirigir a la URL deseada
                    window.location.href = "http://localhost/API/index.php?page=add_task";
                } else {
                    // Muestra un mensaje de error
                    alert("Error en el inicio de sesión.");
                }
            })
            .catch(error => {
                console.error('Error en la solicitud:', error);
                alert("Hubo un problema en el inicio de sesión.");
            });
        }
    </script>

</body>
</html>
