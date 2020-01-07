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


## Front Controller

Creacion de rutas en el archivo `routes/web.php`

En el archivo `config/app.php` se encuentra el alias de Route

Importancia el order de las ruta 
1. Tipicamente las url con parametros dinamicos debajo de las rutas estaticas
2. Filtro de Rutas con expresiones regulares


## Plantillas y / o Blade

El helper `asset` permite cargar nuestros archivos estaticos (css/imagenes/etc)

Blade permite convertir la plantilla en php 

Limpiar las plantillas en la ruta `storage/framework/views/*` o ejecutar el comando `php artisan view:clear`

Para impresion de html en la plantilla de blade se tiene que hacer de la siguiente manera `{!!  $note !!}`


### Layouts

Se crean los layouts, se adicionan a los layouts `@yield('content')` para apertura y `@endsection` para su repectivo cierre dentro de ellos va el respectivo codigo. 

Para adicionar los contenido a remplazar  si no existe se puede definir valores por defecto para que una informacion precargada se muestre`@yield('titulo', 'Titulo por defecto')`