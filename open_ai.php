<?php
require_once  __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$url = 'https://api.openai.com/v1/chat/completions';

$api_key = $_ENV['OPEN_AI_API_KEY'];

$data = array(
    'model' => 'text-davinci-003',
    'prompt' => 'Hello, how are you?',
    'max_tokens' => 50
);

// Initialize cURL session
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $api_key
));

$response = curl_exec($ch);

if ($response === false) {
    echo 'Error: ' . curl_error($ch);
} else {
    $decoded_response = json_decode($response, true);
    print_r($decoded_response);
}

// Close cURL session
curl_close($ch);
?>
