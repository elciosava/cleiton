<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $name = $data['name'];
    $email = $data['email'];
    $message = $data['message'];

    $to = 'seuemail@exemplo.com';
    $subject = 'Novo contato de ' . $name;
    $body = "Nome: $name\nE-mail: $email\nMensagem:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo json_encode(['message' => 'E-mail enviado com sucesso']);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'Falha no envio do e-mail']);
    }
} else {
    http_response_code(405);
    echo json_encode(['message' => 'Método não permitido']);
}
?>
