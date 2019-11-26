- first clone the repo into your local
git clone https://github.com/macist-m/pizza.git

- cd into the project folder
cd pizza

- run composer install
composer install

- make a copy of .env file
cp .env.example .env

- generate laravel app keys
php artisan key:generate

- update your .env file with the correct DB credentials

- Clear caches and optimize
php artisan optimize

- migrate the tables for the DB
php artisan migrate


Now serve project with however you choose and go to root url with /register

Create an account and login

Enjoy your pizzas :)