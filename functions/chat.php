<?php

//header('Content-Type: application/json');
$apiKey = '';
$data = json_decode(file_get_contents('php://input'), true);
$message = $data['message'];
$context = $data['context'] ?? ''; // Optional context parameter
if( $apiKey != "" ){
$url = 'https://api.openai.com/v1/chat/completions';

$headers = [
    "Authorization: Bearer " . $apiKey,
    "Content-Type: application/json"
];

$eventsJson = json_encode($context);

$payload = [
    'model' => 'gpt-4.1-mini-2025-04-14',
    'messages' => [
        [
            'role' => 'system',
            'content' =>
                <<<EOT
                You have access to upcoming sports events data in this format (JSON):
                $eventsJson
                Use this information when answering user queries about upcoming events.
                EOT
        ],
        [
            'role' =>'user',
            'content'=> $message,
        ]
     ]
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // For local development only
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // For local development only

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$errno = curl_errno($ch);
$error = curl_error($ch);
curl_close($ch);

header('Content-Type: application/json');

if ($errno !== 0) {
    echo json_encode(['error' => $error]);
} elseif ($httpCode !== 200) {
    echo json_encode(['error' => 'HTTP error ' . $httpCode]);
} else {
    $responseData = json_decode($response, true);
    if (isset($responseData['choices'][0]['message']['content'])) {
        echo json_encode(['response' => $responseData['choices'][0]['message']['content']]);
    } else {
        echo json_encode(['error' => 'Unexpected response format']);
    }
}
} else {// API KEY NEMA RADI TESTA
    echo json_encode(['response' => $message]);
}