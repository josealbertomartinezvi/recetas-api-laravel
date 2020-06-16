EL proyecto esta realizado con laravel por tanto es necesario tener instalado composer en el computador.

1. Dentro de la carpeta del proyecto ejecutar el comando "composer install" para instalar todas las dependencias del proyecto necesarias para su funcionanmiento.

## Configuración del proyecto

1. Crear una copia del archivo .env.example en la raiz del proyecto y renombrarlo a .env
2. Modificar el contenido del archivo .env asignando los valores de la base de datos a utilizar 
	DB_DATABASE="nombre de la base de datos"
	DB_USERNAME="usuario"
	DB_PASSWORD="contraseña"
3. Crear la base de datos con el mismo nombre y las crecedenciales descritas en el paso anterior
4. Ejecutar el comando "php artisan migrate" en la ventana de comandos para ejecutar las migraciones y crear las tablas en la base de datos.
5. Ejecutar el comando "php artisan db:seed" en la ventana de comandos para ejjecutar los seeders que continiene la información inicial con la cual se permitira almacenar los nuevos registros en la base de datos.
6. Ejecutar el comando "php artisan serve" para ejecutar el servisor que se inicializara en http://127.0.0.1:8000/ y donde se podran relizar peticiones en http://127.0.0.1:8000/api/
7. Probar el servidor con los endpoints del archivo api.php en la ruta "routes/api.php"
