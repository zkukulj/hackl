<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$message = $data['message'];

// Here you would query ChatGPT API with the message
// For demonstration, we'll just echo back the message
$response = "This is a placeholder response for: " . $message;

echo json_encode(['response' => $response]);
