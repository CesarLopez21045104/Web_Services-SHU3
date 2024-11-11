<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login con Google</title>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>
<body>
    <h2>Iniciar sesión con Google</h2>
    <div id="g_id_onload"
         data-client_id="657602146822-bsec49bb8nli0q636nshqoourskqemv1.apps.googleusercontent.com"
         data-callback="handleCredentialResponse">
    </div>
    <div class="g_id_signin" data-type="standard"></div>

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
