<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login con Google y Formulario</title>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
   <link rel="stylesheet" href="public/login.css">
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
