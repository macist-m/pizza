- first clone the repo into your local
~ git clone https://github.com/macist-m/pizza.git

- cd into the project folder
~cd pizza

- run composer install
~ composer install

- make a copy of .env file
~ cp .env.example .env

- generate laravel app keys
~ php artisan key:generate

- update your .env file with the correct DB credentials

- Clear caches and optimize
~ php artisan optimize

- migrate the tables for the DB
~ php artisan migrate


Now serve project with however you choose and go to root url with /register

Create an account and login

Now enjoy your pizzas :)

## In order to use docker
* First make copy of the .env-example ~ cp .env.example .env
* DO NOT change your newly created .env file leave it as it is
* Fire up docker and in this project's root run ~ docker-composer up -d
* It will take awhile and then enter the shell by ~  docker-compose exec php-fpm /bin/bash
* With in the shell ~ php artisan optimize & ~ php artisan migrate
* Go to 127.0.0.1:8081/register and create an acoount and login
* You can close down the docker and delete all containers by ~ docker-compose down -v