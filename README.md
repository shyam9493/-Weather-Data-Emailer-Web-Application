# Weather-Data-Emailer 

## Description
This project is a simple web application built using HTML, CSS, and JavaScript and php. It allows users to send email which contains the wheather report of a particular location.

## Table of Contents
- [Prerequisites](#Prerequisites)
- [Installation](#Installation)
- [Dependencies](#Dependencies)
- [Approach](#approach)
- [Api](#api)
  

## Prerequisites
Before getting started, ensure you have the following prerequisites installed on your system:

- Git: [Download & Install Git](https://git-scm.com/downloads)
- Xampp: [Download & Install](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.0.30/xampp-windows-x64-8.0.30-0-VS16-installer.exe)
- Composer: [Download & Install](https://getcomposer.org/Composer-Setup.exe)
  After successfull installation make changes in php.ini which is located in the C:\xampp\php\ folder and also sendmail in C:\xampp
  (C:\xampp is the default location else try out C:\path to your xampp\php)
- In php.ini changes are
  if you have any trouble in locating php.ini just run the xampp and there you can find config->php(php.ini) select config which is in Apache server
  search smtp and change the following
  ```bash
  SMTP=smtp.gmail.com
  smtp_port=587
  sendmail_from ="yourmail@example.com"(from where you want to send the emails)
  sendmail_path ="\"C:\xampp\sendmail\sendmail.exe\" -t"
  ```
- In sendmail-> sendmail.ini changes are
  ```bash
  smtp_server=smtp.gmail.com
  smtp_port=587
  auth_username=yourmail@example.com
  auth_password=your app password
  ```
  To get auth password it is mandatory that you should turn on two step authentication and search for app passwords and create a new password
  for more clarity try reaching out this youtube link
  Youtube: [watch](https://youtu.be/aB6iovBcAAQ?si=99p_B2Vs7F3hMU6t)
## Installation
To run this project locally, follow these steps:
- Clone the repository:
```bash
git clone https://github.com/shyam9493/-Weather-Data-Emailer-Web-Application.git
```
- select repo destination in C=> xampp=> htdocs
- locate to the folder where you have installed and create a file named '.env' and the content is 
```bash
WHEATHER_API_KEY=Your Api key
OPEN_AI_API_KEY=Your Api key
```
To get API key 
Sign up for a Weather.com API key at
(https://www.weatherapi.com/signup.aspx)

- To run this first turn on the Apache and xampp server and open your preferred browser and type localhost/path_to_your_folder(excluding C:\xampp\htdocs)
  This probably runs the project

## Dependencies
PHPMailer:(https://github.com/PHPMailer/PHPMailer),Weather.com (https://www.weatherapi.com/)

## Approach

I first created a api from weather.com and then wrote a small program using the documentation:(https://www.weatherapi.com/docs/) and retrieved the information for a static location.
Then I started exploring php mailer and tried sending a Hi messages through mail .Then I started Entering the subject through the first created small program using api and merged these two fields and I then started creating a small interface which is suitable for the inputs and posted them into the merged code.

## Output

After Entering the email and location you would get a prompt saying that email sent to youremail@example.com

##  Note 
extension of this we can use open ai to create mails , I have set open_ai.php where we use open ai api key to retrieve some data.
To integrate with it just merge those codes and send that weather report as an input for the model and include some prompt like write a email such that returns some data , put that data to subject of the mail

## API 
- Wheather.com api sample response
  ```bash
  {
    "location": {
        "name": "New Delhi",
        "region": "Delhi",
        "country": "India",
        "lat": 28.6,
        "lon": 77.2,
        "tz_id": "Asia/Kolkata",
        "localtime_epoch": 1714286003,
        "localtime": "2024-04-28 12:03"
    },
    "current": {
        "last_updated_epoch": 1714285800,
        "last_updated": "2024-04-28 12:00",
        "temp_c": 34,
        "temp_f": 93.2,
        "is_day": 1,
        "condition": {
            "text": "Mist",
            "icon": "//cdn.weatherapi.com/weather/64x64/day/143.png",
            "code": 1030
        },
        "wind_mph": 2.2,
        "wind_kph": 3.6,
        "wind_degree": 287,
        "wind_dir": "WNW",
        "pressure_mb": 1009,
        "pressure_in": 29.8,
        "precip_mm": 0,
        "precip_in": 0,
        "humidity": 23,
        "cloud": 50,
        "feelslike_c": 32,
        "feelslike_f": 89.6,
        "vis_km": 3.5,
        "vis_miles": 2,
        "uv": 9,
        "gust_mph": 9,
        "gust_kph": 14.5
    }
}
  ```

