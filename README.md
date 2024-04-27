# Weather-Data-Emailer 

## Description
This project is a simple web application built using HTML, CSS, and JavaScript and php. It allows users to send email which contains the wheather report of a particular location.

## Table of Contents
- [Prerequisites](#Prerequisites)
- [Installation](#Installation)
- [Usage](#usage)
- [Approach](#approach)
  

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

1. Clone the repository:
```bash
git clone https://github.com/shyam9493/-Weather-Data-Emailer-Web-Application.git
```

