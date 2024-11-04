# [SET] Sueños en Telas - Backend

Este es un proyecto backend para la empresa Sueños en Telas (SET) en motivo de aprendizaje. 
<br>Responde al uso de tecnologias actuales, englobando PHP como lenguaje principal y MySQL para la base de datos. 
<br>Utiliza tambien el framework Laravel para facilitar la estructura y programacion del proyecto, Composer para manejo de dependencias y XAMPP para despliegue y consulta a la base de datos.

## Pasos para configurar y probar el frontend de forma local

- Descargar e instalar XAMPP  desde su pagina oficial (Ultima version estable)
- Descargar y ejecutar Composer desde su pagina oficial (Composer-Setup.exe) 
- Clonar el Repositorio.
- Duplicar el archivo `.env.example` y renombrarlo como `.env`.
- Ejecutar desde la terminal `composer update` para actualizar el archivo generado en el paso anterior.
- Ejecutar desde la terminal `php artisan key:generate` para establecer una clave de aplicacion propia del proyecto
- Modificar el archivo `.env` con los datos correctos de la base de datos donde se desea conectar (En el caso actual, una base de datos MySql administrada desde phpMyAdmin gracias a XAMPP)
- Ejecutar desde la terminal `php artisan migrate`. Este comando creará todos los modelos, establecidos previamente dentro de la carpeta `database/migration`
- Ejecutar desde la terminal `php artisan db:seed`. Este comando creará datos por defecto, establecidos previamente dentro del archivo `seeders/DatabaseSeeder` 
- Ejecutar desde la terminal `php artisan serve --host=0.0.0.0 --port=8000` para establecer conexion y el funcionamiento completo del backend. Host y Puerto para un mejor manejo de info.

Opcional: Se pueden utilizar las herramientas de artisan para establecer configuraciones adicionales. Por ejemplo, nuevos modelos, controladores o seeders antes de migrar la base de datos.

Nota: El proyecto actual tiene relacion con el frontend del mismo nombre, pero se puede verificar su funcionamiento utilizando `POSTMAN` o `Thunder Client` dentro de Visual Studio Code.