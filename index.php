<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather App</title>
    <link rel="stylesheet" href="public/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>

<body>

    <div class="container">
        <h1>Weather Data Emailer</h1>
        <form action="mail_main.php" method="POST">
            <div class="form-group">
                <label for="location"><i class="fas fa-map-marker-alt"></i>Location:</label>
                <input type="text" id="location" name="location" placeholder="Enter your location" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i>Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <button type="submit">Get Weather</button>
        </form>
    </div>
</body>
</html>
