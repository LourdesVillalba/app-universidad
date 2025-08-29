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
### Inicio

<img width="1910" height="908" alt="Inicio" src="https://github.com/user-attachments/assets/a034362c-44d1-4b05-b4ec-fcb382093904" />

### Registro

<img width="1898" height="905" alt="Registro" src="https://github.com/user-attachments/assets/440f2ef5-aefd-427d-8a88-ef2e47bd7959" />

### Inicio Sesion

<img width="1919" height="834" alt="Inicio Sesion" src="https://github.com/user-attachments/assets/80d10ac1-be4b-43ba-9d79-41ff5a66b92a" />

### Completar perfil (Vista Alumno)

<img width="1897" height="912" alt="image" src="https://github.com/user-attachments/assets/c48e61e6-f343-4d48-901c-c961b9bdc480" />

### Inicio (Vista Alumno)

<img width="1895" height="903" alt="image" src="https://github.com/user-attachments/assets/8564b73a-8392-4e7c-b578-91eb4681396c" />

### Perfil Alumno (Vista Alumno)

<img width="1915" height="902" alt="image" src="https://github.com/user-attachments/assets/236d6245-6818-4280-875a-43024bdd7216" />

### Editar perfil (Vista Alumno)

<img width="1897" height="910" alt="image" src="https://github.com/user-attachments/assets/5e848d70-6c0d-4434-8d61-201004c29405" />

### Inicio (Vista Profesor)

<img width="1912" height="906" alt="image" src="https://github.com/user-attachments/assets/c69fe518-ebf9-4d7f-b071-c0a01dc41442" />

### Lista de perfiles (Vista Profesor)

<img width="1897" height="885" alt="image" src="https://github.com/user-attachments/assets/7152e27e-fa29-4925-9dfb-4588a13ec682" />

### Perfil Alumno (Vista Profesor)

<img width="1916" height="886" alt="image" src="https://github.com/user-attachments/assets/b8be3aac-124a-4d29-8a80-6693024f794d" />
