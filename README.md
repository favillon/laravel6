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

### Generar url absolutas

Helper `url`  para concadenar el dominio con la url especificada

Url actual `dd(url()->current());`

Helper `route` se utiliza con el nombre de cada ruta  como segunda parametro podemos indicar un arreglo con los datos de metodo necesario


# Migraciones 

Configurar la conexion a BD en el archivo `.env` reiniciar servicio despues de cambiar las varaibles


Ejecutar migraciones
```
php artisan migrate
```

Realizar migraciones en la bd de pruebas 
```
php artisan migrate --database=pgsql_test
```


Deshacer migraciones
```
php artisan migrate:rollback 
```
Referescar las migraciones
```
php artisan migrate:refresh
```


# Test

Crear test en la carpeta Feature

```
php artisan make:test UsersModuleTest
```


# Modelos



# Pruebas 

Para la ejecucion de pruebas en otra bd  se configura en el archivo `config/database.php` un nueva de conexion con las 
siguientes caracteristicas

modificar `'default' => env('DB_CONNECTION', '<<CONEXION_BD>>')`

`<<VARIABLE>>` Es la variable a remplzar

```php
    'pgsql_test' => [
        'driver' => 'pgsql',
        'host' => env('DB_HOST', '127.0.0.1'),
        'port' => env('DB_PORT', '5432'),
        'database' => env('DB_DATABASE_TEST', '<<BD>>'),
        'username' => env('PGUSER', env('DB_USERNAME', '<<USER>>')),
        'password' => env('PGPASSWORD', env('DB_PASSWORD', '<<PWD>>')),
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
    ],
```

Y en el archivo `phpunit.xml` se adiciona la siguiente linea ` <server name="DB_CONNECTION" value="pgsql_test"/>`