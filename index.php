<?php
$api_key = 'c9fc4d0d109d4a34a52183941242604';
$location = 'New York'; // or any other location

$url = "https://api.weather.com/v3/weather/now?apiKey=$api_key&location=$location";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$weather_data = json_decode($response, true);
$weather_summary = $weather_data['forecast']['summary']['description'];
echo "Weather Summary: $weather_summary";
?>
