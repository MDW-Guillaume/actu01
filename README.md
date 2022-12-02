# Actu-01

## Prérequis

``` 
node >= 16.0.0
```

## Installation

``` 
git clone https://github.com/MDW-Guillaume/actu01.git
cd actu01
```


## Installation / Configuration des composants

```
composer install
composer update
```

```
npm install
```

Ensuite, dupliquez le fichier *.env.example*, renommez le en *.env* et remplissez les variables de base de donnée et d'application en fonction de votre environnement.

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

## Remplissage de la base de donnée

```
php artisan migrate
php artisan db:seed 
```

## Lancez le serveur

```
php artisan key:generate
php artisan serve
```

```
npm run dev
```
*Et voila le travail !*



