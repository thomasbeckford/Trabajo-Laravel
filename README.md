# Trabajo Laravel

Desarrollo de Curso Full Stack Web **Digital House Argentina**.

Proyecto E-Commerce:

En este proyecto Laravel utilizamos Routes, Views, Controllers, Models. Realizamos una conexion con la base de datos segura, aseguramos un login en el cual podemos acceder y recuperar contraseña. Tambien migramos tablas y creamos los seeds de ejemplo para nuestra base.

## Getting Started
```
git clone https://github.com/tebeck/Trabajo-Laravel.git
```
### Prerequisites

```
LOCALHOST y DB ( FE: XAMPP)
COMPOSER
LARAVEL
```

### Installing

Steps
```
composer update
CREAR FILE .ENV Y NUESTRA BASE DE DATOS ( CONFIGURAR SCHEMA, NAME, PASSWORD )
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve

```
Ya tenemos nuestra pagina funcionando, nuestra base migrada y nuestros registros cargados, ahora debemos abrir un navegador y pegar esto:

```
http://localhost:8000/
```
## What i should correct

Testing...
