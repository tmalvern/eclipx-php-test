# Eclipx PHP Coding Test By Tendai Mpita

## Framework Used

The **Laravel Framework 8.67.0** was used.

## Setup

Once you have cloned the repository, please run the following commands:

- docker-compose build
- docker-compose up -d

Please add the database details which are contained in the the file docker-compose.yaml into the src/.env

Once the containers are running please ssh into the php-apache-environment container to run the following command

- composer install

To create the the registration field and fill it with the extracted registration number from the descricption, please run the following commands:

- php artisan migrate
- php artisan db:seed

## Links

Invoice link [http://localhost:8008/invoices](http://localhost:8008/invoices).
