# Installation du projet Actu-01

``` 
git clone https://github.com/MDW-Guillaume/actu01.git
cd actu01
```

## Installation du programme

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
```
```
php artisan db:seed RubricSeeder
php artisan db:seed UserSeeder
php artisan db:seed ArticleSeeder
```

## Lancez le serveur
```
npm run dev
```

```
php artisan serve
```

*Et voila le travail !*



