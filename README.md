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
  
 
 ## Linea 9 = motor de bas de datos  
 ## Linea 10 = direccion del host 
 ## Linea 11 = puerto 
 ## Linea 12 = nombre de la base de datos (andali)
 ## Linea 13 = usuario
 ## Linea 14 = contraseña () 


El usuario y la contraseña dependerán de como los tengas en tu base de datos
    
    Ejemplo

	User name	Host name	Type	Privileges	    Grant	Action
	root	    127.0.0.1	global	ALL PRIVILEGES	Yes	    Edit privileges Edit privileges	Export Export


## Parte 3

Para el que proyecto se ejecute correctamente debes ejecutar las migraciones del mimos, las cuales ya se encuentran creadas dentro del proyecto, para esto debemos entrar a nuestra consola y entrar a a dirección de nuestro proyecto:

##Ejemplo

C:\Users\Usuario>cd..

C:\Users>cd..

C:\>cd laravel

C:\laravel>cd prueba

C:\laravel\prueba>

## paso 3.1

una vez allí debemo ejecutar el siguiente comando 
 
 C:\laravel\prueba>php artisan migrate
 
 -Esto nos creará los campos necesarios en nuestra base de datos para que el proyecto funciones correctamente
 
## paso 4

una vez hayas ejecutado las migraciones solo faltará ejercutar el proyecto con el comando

php artisan serve
 
# Información extra

En la ultima version de laravel, el comando que generaba el acceso /login y /register se reemplazo para permitir al usuario definir que librerias trabajar como vue y bootstrap, por lo que "php artisan make:auth" ya no se reconoce como un comadno de laravel.


##Metodo nuevo


primero debemos descargar este paquete opcional desde composer con el siguiente comando

-composer require laravel/ui

Una vez tengamos descargado este paquete podemos ejecutar el siguieten comando

php artisan ui:auth

quien no generará todo lo necesario para /login y /register

