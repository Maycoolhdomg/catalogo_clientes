## Catálogo de Clientes – Laravel
Aplicación web desarrollada con Laravel que permite gestionar un catálogo de clientes mediante operaciones CRUD (Crear, Leer, Actualizar y Eliminar). El proyecto implementa arquitectura MVC, migraciones, Eloquent ORM, vistas Blade, Bootstrap responsive y control de versiones con Git.

## Tecnologías Utilizadas:
- PHP 8.3.30
- Composer 2.9.4
- Laravel 12.52.0
- MySQL
- Bootstrap 5
- Laragon (entorno de desarrollo local)

## Arquitectura del Proyecto
El proyecto sigue el patrón MVC (Modelo - Vista - Controlador):

## Modelo
- Cliente.php
- Uso de Eloquent ORM
- Asignación masiva protegida con `$fillable`

## Controlador
- ClienteController.php
- Implementación completa de métodos resource:
- index
- create
- store
- show
- edit
- update
- destroy

## Vistas
- Blade Templates
- Layout principal reutilizable
- Diseño responsive con Bootstrap
- Buscador y paginación

## Rutas
web.php
Route::resource('clientes', ClienteController::class);

Base de Datos
Base de datos: catalogoclientes
Tabla: clientes
Campos:
- id
- nombre
- apellido
- email (único)
- telefono
- direccion
- created_at
- updated_at

## Requisitos Previos
Antes de ejecutar el proyecto debes tener instalado:
- PHP >= 8.3
- Composer >= 2.9
- MySQL
- Laragon (recomendado)

## PASOS DE INSTALACION
- Clonar repositorio: git clone https://github.com/Maycoolhdomg/catalogo_clientes
- Entrar al Proyecto: cd catalogoClientes
- Instalar dependencias: composer install
- Copiar archivo de entorno: cp .env.example .env
- Configurar base de datos en .env: 
DB_DATABASE=catalogoclientes
DB_USERNAME=root
DB_PASSWORD
- Generar clave de aplicación: php artisan key:generate
- Ejecutar migraciones: php artisan migrate
- Iniciar servidor local: php artisan serve
- Acceder desde el navegador: http://127.0.0.1:8000/clientes

## Funcionalidades Implementadas
- Crear clientes
- Listar clientes
- Ver detalle de cliente
- Editar cliente
- Eliminar cliente
- Validaciones de formulario
- Buscador por nombre, apellido o email
- Paginación
- Diseño responsive con Bootstrap
- Confirmación al eliminar

## Diseño Responsive
- Adaptado para móviles
- Tabla con table-responsive
- Formularios centrados
- Botones adaptables
- Layout principal reutilizable

## Conceptos Aplicados
- Arquitectura MVC
- Migraciones
- Eloquent ORM
- Route Model Binding
- Validaciones
- Blade Templates
- Control de versiones con Git

## Control de Versiones
- Proyecto Laravel creado y subido a GitHub
- Creacion modelo Cliente con migracion y .env adaptado a la base de datos
- Agregado lógica de CRUD, rutas y controlador. Correccion en modelo Cliente
- Agregado vistas del CRUD en Blade.php
- Agregado Bootstrap con layouts, y arreglo de visuales menores

## EVIDENCIAS
- Video: https://mega.nz/file/OkJw3bJR#uSN6vZWVi_bVis0LdLGyPxdyFGJwmiwvBylGClDLadU


## Imagenes
- LISTA
<img width="2495" height="1330" alt="Screenshot 2026-02-26 223824" src="https://github.com/user-attachments/assets/781500b0-0923-4436-9b03-5bcb004e1de1" />

- CREATE
<img width="2351" height="1035" alt="Screenshot 2026-02-26 224001" src="https://github.com/user-attachments/assets/9a310cb5-5ce8-494a-af9d-36963b33ac2c" />

- READ
<img width="2236" height="880" alt="Screenshot 2026-02-26 224023" src="https://github.com/user-attachments/assets/ed2c5229-1788-4c29-a25b-28ddf92491b1" />

- UPDATE
<img width="2194" height="996" alt="Screenshot 2026-02-26 224039" src="https://github.com/user-attachments/assets/cb756dbc-253f-4d72-9f25-8e305f15eda3" />
<img width="2181" height="791" alt="Screenshot 2026-02-26 224052" src="https://github.com/user-attachments/assets/7c4f9669-e4ba-4115-b45c-39ca2b902ccf" />

- DELETE

<img width="680" height="227" alt="Screenshot 2026-02-26 224102" src="https://github.com/user-attachments/assets/e35a7c5a-8aaa-4e30-9845-b9070c7c06b1" />
<img width="2070" height="663" alt="Screenshot 2026-02-26 224111" src="https://github.com/user-attachments/assets/e33b1402-820e-417c-88e3-9f48932835fe" />







<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
