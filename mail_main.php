<?php 
require_once  __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function get_weather($location){
$weather_api_key = $_ENV['WHEATHER_API_KEY'];
$url = "http://api.weatherapi.com/v1/current.json?key=$weather_api_key&q=$location&aqi=no";
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

    return $weather_data;

}

curl_close($ch);

}
$location = $_POST['location'];
$weather_data = get_weather($location); 


$data  = "Dear User, \n\n\n";
$data  .= "I hope this message finds you well. I wanted to provide you with an update on the current weather conditions in your area: \n\n";
$data .= "Temperature: {$weather_data['current']['temp_c']}°C\n";
$data .= "Humidity: {$weather_data['current']['humidity']}%\n";
$data .= "Precipitation: {$weather_data['current']['precip_mm']} mm\n";
$data .= "Weather Condition: {$weather_data['current']['condition']['text']} \n";
$data .= "This information should help you plan your day accordingly. If you need any further details or assistance, please feel free to reach out.\n\n";
$data .= "Best regards,\n";
$data .= "Weather reporter.\n";


$to=$_POST["email"];
$subject="Weather Update: Current Conditions";
$email="shyamnandapuneedi123@gmail.com";
$header="From: $email";
$message=$data;
if(mail($to,$subject,$message,$header)){
    echo "email sent to {$to}";
}else{
    echo "error";
}

?>
