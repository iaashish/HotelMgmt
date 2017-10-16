# README #

This README would normally document whatever steps are necessary to get your application up and running.

### What is this repository for? ###

* Quick summary
* Version
* [Learn Markdown](https://bitbucket.org/tutorials/markdowndemo)

### How do I get set up? ###
git clone <url>



Install composer : `composer install`

create .env file


From the editing view(to preserve format), copy this content:

APP_NAME=Laravel  
APP_ENV=local<br />
APP_KEY=<br />
APP_DEBUG=true<br />
APP_LOG_LEVEL=debug<br />
APP_URL=http://localhost<br />

DB_CONNECTION=mysql<br />
DB_HOST=127.0.0.1<br />
DB_PORT=3306<br />
DB_DATABASE=homestead<br />
DB_USERNAME=homestead<br />
DB_PASSWORD=secret<br />

BROADCAST_DRIVER=log<br />
CACHE_DRIVER=file<br />
SESSION_DRIVER=file<br />
QUEUE_DRIVER=sync<br />

REDIS_HOST=127.0.0.1<br />
REDIS_PASSWORD=null<br />
REDIS_PORT=6379<br />

MAIL_DRIVER=smtp<br />
MAIL_HOST=smtp.mailtrap.io<br />
MAIL_PORT=2525<br />
MAIL_USERNAME=null<br />
MAIL_PASSWORD=null<br />
MAIL_ENCRYPTION=null<br />

PUSHER_APP_ID=<br />
PUSHER_APP_KEY=<br />
PUSHER_APP_SECRET=<br />


generate and encryption key : `php artisan key:generate`

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