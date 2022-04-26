# Seaflex

Seaflex est une application permettant de gérer les parcours des étudiants de l'école d'ingérieur ENSSAT à Lannion.

# Pré-requis

* composer
* php 8
* Base de donnée Mysql nommé `Seaflex`

# Installation

``` 
git clone
composer install
php artisan migrate
php artisan db:seed
php artisan serve
```

Ensuite rendez-vous sur à l'adresse: `http://localhost:8000/`
