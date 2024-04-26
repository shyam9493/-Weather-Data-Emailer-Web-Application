<?php
$api_key = 'dd19dca0dc4949c6a4c191534242604';
$location = 'India';

$url = "http://api.weatherapi.com/v1/current.json?key=$api_key&q=$location&aqi=no";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if ($response === false) {
    die('Error: Failed to retrieve weather data.');
}


$weather_data = json_decode($response, true);

if (isset($weather_data['current']['temp_c'])){
    $temperature_celsius = $weather_data['current']['temp_c'];
    $temperature_fahrenheit = $weather_data['current']['temp_f'];
    $humidity = $weather_data['current']['humidity'];
    $precipitation_mm = $weather_data['current']['precip_mm'];
    $weather_condition = $weather_data['current']['condition']['text'];

    echo "Temperature:",$temperature_celsius,"<br>";
    echo "Humidity: $humidity <br>";
    echo $precipitation_mm,"<br>";
    echo $weather_condition;

}

curl_close($ch);
?>
