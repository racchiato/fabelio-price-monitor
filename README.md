## About This Project

This project was made for the fullfillment of back-end engineer test provided by [Fabelio](https://www.fabelio.com). The demo of this project can be found [HERE](http://salty-mesa-33948.herokuapp.com/)

## Tools/Framework Used
    - Laravel 6
    - Boostrap CSS
    - ChartJS
    - Postgre SQL
    - Laravel Dusk for Testing
    - SublimeLinter and PHPCS

## Coding Standard

The coding standard is PHP PSR-2.

## How to Deploy in your local machine

###### Clone this github repo

You can use the command 'git clone https://github.com/racchiato/fabelio-price-monitor.git' in your terminal to clone this project

###### Install Composer Dependencies

Make sure you have installed Composer first. You can read it [here](https://getcomposer.org/download/). And afterwards, go to the project directory and use command
'composer install'

###### Install NPM Dependencies

Make sure you have installed NPM first. You can read it [here](https://www.npmjs.com/get-npm). And afterwards, go to the project directory and use command
'npm install'

###### Create a copy of .env file

.env files are not generally committed to source control for security reasons. Laravel provided sample .env file in the root directory. You can make your own by using this command in terminal
'cp .env.example .env'

###### Generate Application Key

To run, Laravel needs some sort of application key. After making the .env file, use this command to generate a new key for the project in your machine
'php artisan key:generate'

###### Create Database

Since I'm using PostgreSQL, create a new empty PostgreSQL database in your local machine.

###### Configure the Database

After making a new database, you can edit the database connection setting (user, server, port, db name) in your own .env file. Afterwards, change the pgsql database configuration in 'config/database.php' to your own database connection setting written in the .env file. To call the .env value, you can access it using 'env('VARIABLE_NAME')'. More about it [here](https://laravel.com/docs/6.x/database#configuration)

###### Run Migration

After setting up the database, run this command to migrate the database:
'php artisan migrate'

###### Run Server

To run the server, use this command
'php artisan serve'

## Controller Documentation

You can read the Controller Documentation [here](https://github.com/racchiato/fabelio-price-monitor/blob/master/Controller.md)

## Problems found in Developing the App

    - There are 3 test cases inside the 'ExampleTest.php', and there might have been a bug on the 'ChromeDriver' in Laravel Dusk where it mostly failed to create POST request to the server. I tried to google and do the workaround found, but still no changes.
    - I haven't fully followed the best design pattern for Laravel MVC. For example, as you can see in the controller, there are code rewritings especially in the 'addProduct' function about creating price and image instance. Tried to put the function in the Model, but apparently it wasn't really working well
    - Still a really simple validations rule, I couldn't make on time.







