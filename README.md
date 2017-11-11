# README #
#test

FOR RUNNING PHPUNIT:

./vendor/bin/phpunit

FOR RUNNING DUSK:

php artisan dusk


This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* Quick summary
* Version
* [Learn Markdown](https://bitbucket.org/tutorials/markdowndemo)

### How do I get set up? ###
Setup Laravel with Xampp, Composer, and Visual Studio Code

This video series helps:
https://www.youtube.com/watch?v=EU7PRmCpx-0&t=3s

Clone repository:

git clone <url>

Navigate to directory of project

Install composer from terminal : `composer install`

create .env file in project directory

Copy this content into .env file

APP_NAME=Laravel  
APP_ENV=local  
APP_KEY=  
APP_DEBUG=true  
APP_LOG_LEVEL=debug  
APP_URL=http://localhost  

DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=homestead  
DB_USERNAME=homestead  
DB_PASSWORD=secret  

BROADCAST_DRIVER=log  
CACHE_DRIVER=file  
SESSION_DRIVER=file  
QUEUE_DRIVER=sync  

REDIS_HOST=127.0.0.1  
REDIS_PASSWORD=null  
REDIS_PORT=6379  

MAIL_DRIVER=smtp  
MAIL_HOST=smtp.mailtrap.io  
MAIL_PORT=2525  
MAIL_USERNAME=null  
MAIL_PASSWORD=null  
MAIL_ENCRYPTION=null  

PUSHER_APP_ID=  
PUSHER_APP_KEY=  
PUSHER_APP_SECRET=  


generate an encryption key : `php artisan key:generate`

* Summary of set up
* Configuration
* Dependencies
* Database configuration
* How to run tests
* Deployment instructions

### Contribution guidelines ###

* Writing tests
* Code review
* Other guidelines

### Who do I talk to? ###

* Repo owner or admin
* Other community or team contact