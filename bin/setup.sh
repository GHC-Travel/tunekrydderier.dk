#!/usr/bin/env bash
composer install
npm install

cp .env.example .env

read -p 'Database user? ' DB_USERNAME
read -sp 'Database password? ' DB_PASSWORD
echo -e "\n"

defaultDatabaseName="$(basename $(pwd))"
read -e -p "Database name? " -i "${defaultDatabaseName}" DB_DATABASE

sed -i "s/DB_USERNAME=.*/DB_USERNAME=${DB_USERNAME:-root}/ig" .env
sed -i "s/DB_PASSWORD=.*/DB_PASSWORD=${DB_PASSWORD}/ig" .env
sed -i "s/DB_DATABASE=.*/DB_DATABASE=${DB_DATABASE}/ig" .env

php artisan key:generate
npm run dev
php artisan migrate:fresh --seed

shopt -s nocasematch

read -p 'Run server? [y/n]' runServer

if [[ $runServer =~ "y" ]]; then
	php artisan serve
fi

shopt -u nocasematch
