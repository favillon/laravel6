# Laravel 6

Curso de laravel de la plataforma [style](https://styde.net/)

Instalar laravel
```
composer create-project laravel/laravel curso-laravel-styde "6.*"
```

Revisar le version de laravel
```
php artisan --version
```

Lista de comando php artisan
```
php artisan list
```


Front Controller

Archivo `config/app.php` se encuentra el alias de Route


Creacion de rutas en el archivo `routes/web.php`

Importancia el order de las ruta 
1. Tipicamente las url con parametros dinamicos debajo de las rutas estaticas
2. Filtro de Rutas con expresiones regulares

