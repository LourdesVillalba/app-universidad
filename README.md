#  EduView

EduView es una aplicación web desarrollada en **Laravel** para la gestión de **perfiles de alumnos y usuarios**.  
Permite a los profesores consultar información académica y de contacto de los estudiantes de forma centralizada.

---

## Tecnologías Utilizadas
- **Framework:** Laravel 12  
- **Base de datos:** MySQL  
- **Frontend:** Blade + TailwindCSS  

---

##  Funcionalidades principales
- Registro e inicio de sesión de usuarios.
- Creación, edición y visualización de perfil de alumnos.
- Datos académicos: carrera, comisión.
- Información de contacto: WhatsApp, LinkedIn, GitHub.
- Subida de fotos de perfil.
- Rol administrador para listar perfiles de alumnos.

---

##  Estructura del proyecto
El proyecto sigue la estructura estándar de Laravel:

- `app/Models` → Modelos (`User`, `Perfil`).
- `app/Http/Controllers` → Controladores (`PerfilController`, `ProfesorController`, `RegisterController`, `SessionsController`).
- `resources/views` → Vistas Blade (`alumno/`, `profesor/`, `auth/`).
- `database/migrations` → Migraciones para las tablas.
- `database/seeders` → Seeders para inicializar el administrador.
- `routes/web.php` → Definición de rutas.

---

##  Instalación

1.  Clona el repositorio:
    ```bash
    git clone [URL_del_repositorio]
    ```
2.  Instala las dependencias de Composer:
    ```bash
    composer install
    ```
3.  Genera la clave de la aplicación:
    ```bash
    php artisan key:generate
    ```.  Configura tu base de datos en el archivo `.env`.

5.  Ejecuta las migraciones y seeders para poblar la base de datos:
    ```bash
    php artisan migrate
    php artisan migrate --seed
    ```
    
---

##  Vistas 
Inicio
<img width="1910" height="908" alt="Inicio" src="https://github.com/user-attachments/assets/a034362c-44d1-4b05-b4ec-fcb382093904" />
