<?php
// Recibe el token desde el frontend
$input = json_decode(file_get_contents("php://input"), true);
$token = $input['token'] ?? null;

if ($token) {
    // Verifica el token con Google
    $url = 'https://oauth2.googleapis.com/tokeninfo?id_token=' . $token;
    $response = file_get_contents($url);
    $userData = json_decode($response);

    // Comprobación y respuesta al cliente
    if (isset($userData->email)) {
        // Retornar información al cliente en JSON
        echo json_encode([
            'success' => true,
            'name' => $userData->name,
            'email' => $userData->email
        ]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Token inválido']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Token no recibido']);
}
?>
