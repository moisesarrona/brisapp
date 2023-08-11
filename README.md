# BrisApp 💙
This web application automate processes in "Enjoy", register employees, customers, and register entries outputs the products and other functions very important, monitor the parties, and see in a calendar. Let's go!

>__v0.0.2__   
__Author:__ [@moisesarrona](https://github.com/mosesarrona)  
__Description:__ Update dependecies, fixing dependency dompdf

## Features

### Technologies 💻
- Laravel 8*
    - Migration (Create DB)
    - Seeders (Insert DB)
    - Factories (Data faker)
    - Auth Laravel/ui (auth backend)
- Bootstrap 4*
- JavaScript
    - JQuery
    - GSAP

### Dependencies 🏗️
- Carbon 2.4* (DateTime)
- Faker 1.9* (Data faker)

### Requirements 📋
- PHP ^7.3 - ^8.0
- MySQL 5.7.39
- Apache2 
- Composer 
- Git

## Install enviroment 
- install brew
    - install php - brew install php
    - install composer - brew install composer

## Setup 🚀

- Step 1
Download the project
```
~ ❯ git clone https://github.com/moisesarrona/brisapp.git
```
- Step 2
Update dependeces with
```
composer update
```
- Step 3
Copy development file
```
cp .env.example .env
```
- Step 4
Generate key to hashing
```
php artisan key:generate
```
- Step 5
Modify file .env with your credentials mysql
- Step 6
Run migration and seeders with
````
php artisan migrate --seed
````
- Step 7
````
php artisan serve
````
- Step 8
Log in  with this credentials
````
email: administrador@enjoy.com
password: Admin123
````


#### About me 👨‍💻
Hi, my name is **Moises Arrona** I'm creator this library, follow me in [Github](https://github.com/mosesarrona) for more projects or [Instagram](https://www.instagram.com/moisesarrona/) for anything