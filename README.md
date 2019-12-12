<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Requisitos 
 Debes tener instalado un servidor local xampp para trabajo con el gestor de bases de datos PhpMyAdmin en MySql, en donde deberás crear
 unas base de datos llamada andai. allí guardaremos todos los datos de nuestra aplicación 


## Instalación

Primero debe descargar el proyecto desde github y decomprimirlo en alguna instancia de tu equipo (Recomendado Disco C)




## Paso 1 

abre el proyecto en tu editor de texto favorito y entra en el archivo env. que se encuentra en la carpeta madre del proyecto

## Pase 2

Una vez allí encontrarás el codigo que nos conecta a la base de datos
- vas a encontrar muchas lineas de codigo pero nos enfocarémos en las siguientes

  9-   DB_CONNECTION=mysql
  10-  DB_HOST=127.0.0.1
  11-  DB_PORT=3306
  12-  DB_DATABASE=andali
  13-  DB_USERNAME=root
  14-  DB_PASSWORD=
  
 
 # Linea 9 = motor de bas de datos  
 # Linea 10 = direccion del host 
 # Linea 11 = puerto 
 # Linea 12 = nombre de la base de datos (andali)
 # Linea 13 = usuario
 # Linea 14 = contraseña () 


El usuario y la contraseña dependerán de como los tengas en tu base de datos
    
    Ejemplo

	User name	Host name	Type	Privileges	    Grant	Action
	root	    127.0.0.1	global	ALL PRIVILEGES	Yes	    Edit privileges Edit privileges	Export Export


## Parte 3

Para el que proyecto se ejecute correctamente debes ejecutar las migraciones del mimos, las cuales ya se encuentran creadas dentro del proyecto.

# Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

# Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

# License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
