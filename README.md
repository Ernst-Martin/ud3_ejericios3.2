# Guía de Instalación - Gestión de Notas API

Esta guía te ayudará a configurar el proyecto desde cero en un nuevo sistema.

## Requisitos Previos

1. Instalar Docker y Docker Compose:
sudo apt update
sudo apt install docker.io docker-compose
sudo usermod -aG docker $USER
(Reinicia la sesión después de este paso)

## Instalación

1. Clonar el repositorio:
git clone https://github.com/Ernst-Martin/ud3_ejericios3.2.git
cd ud3_ejericios3.2

2. Iniciar el contenedor de MariaDB:
docker-compose up -d

3. Instalar dependencias de PHP:
composer install

4. Configurar el entorno:
cp .env.example .env
php artisan key:generate

5. Configurar la base de datos en .env:
DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gestion_notas
DB_USERNAME=root
DB_PASSWORD=m1_s3cr3t

6. Crear la base de datos:
docker exec -it mariadb-server mariadb -u root -p
(Usar contraseña: m1_s3cr3t)

CREATE DATABASE gestion_notas;
exit;

7. Ejecutar migraciones y seeders:
php artisan migrate:fresh --seed

8. Iniciar el servidor:
php artisan serve

## Probar la API

1. Abrir Postman

2. Importar la colección postman_collection.json

3. Probar el endpoint GET Alumnos:
  - Método: GET
  - URL: http://localhost:8000/api/alumnos

Deberías ver la lista de alumnos en formato JSON.

## Endpoints Disponibles

- Alumnos
 - GET /api/alumnos
 - GET /api/alumnos/{id}
 - POST /api/alumnos
 - PUT /api/alumnos/{id}
 - DELETE /api/alumnos/{id}

- Asignaturas
 - GET /api/asignaturas
 - GET /api/asignaturas/{id}
 - POST /api/asignaturas
 - PUT /api/asignaturas/{id}
 - DELETE /api/asignaturas/{id}

- Notas
 - GET /api/notas
 - GET /api/notas/{id}
 - POST /api/notas
 - PUT /api/notas/{id}
 - DELETE /api/notas/{id}
