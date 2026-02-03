# ENLDWESProyectoTema5

## Descripción del Proyecto

Proyecto educativo de Desarrollo Web en Entorno Servidor centrado en control de acceso, autenticación de usuarios y gestión de sesiones y cookies en PHP. Este repositorio contiene ejercicios progresivos que implementan sistemas de identificación de usuarios, manejo de variables superglobales, sesiones PHP y cookies.

El proyecto abarca desde el estudio de variables del servidor hasta la implementación de sistemas completos de login con autenticación contra base de datos, gestión de sesiones, y control de acceso mediante formularios web. Se exploran las relaciones entre cookies del lado del cliente y del servidor, el ciclo de vida de las sesiones y el manejo seguro de credenciales.

**Tecnologías principales:** PHP 8.3, MySQL/MariaDB, PDO, Apache, Sessions, Cookies

## Requisitos Técnicos

- **Servidor Web:** Apache 2.4+
- **PHP:** 8.3 o superior
- **Base de Datos:** MySQL 8.0+ / MariaDB 10.5+
- **Motor de BD:** InnoDB
- **Entorno:** LAMP (Linux, Apache, MySQL, PHP)
- **Extensiones PHP requeridas:**
  - PDO
  - session (habilitada por defecto)
  - DateTime

## Instalación

### 1. Clonar el repositorio
```bash
git clone https://github.com/EnriqueNieto90/ENLDWESProyectoTema5.git
```

### 2. Configurar en servidor local
Copiar el proyecto al directorio de publicación de Apache:
```bash
cp -r ENLDWESProyectoTema5 /var/www/html/httpdocs/
```

### 3. Configurar la base de datos
Ejecutar los scripts SQL en el siguiente orden:

**a) Crear base de datos y usuario:**
```bash
mysql -u adminsql -p < scriptDB/CreaDBENLDWESProyectoTema5.sql
```

**b) Carga inicial de datos:**
```bash
mysql -u UserENLDWESProyectoTema5 -p DBENLDWESProyectoTema5 < scriptDB/CargaInicialDBENLDWESProyectoTema5.sql
```

### 4. Configurar credenciales
Editar el archivo de configuración de base de datos:
```php
// config/confDB.php
define('DB_HOST', 'localhost');
define('DB_NAME', 'DBENLDWESProyectoTema5');
define('DB_USER', 'userENLDWESProyectoTema5');
define('DB_PASS', 'paso');
```

### 5. Configurar permisos
```bash
chmod -R 755 /var/www/html/httpdocs/ENLDWESProyectoTema5
chmod -R 777 /var/www/html/httpdocs/ENLDWESProyectoTema5/tmp
```

### 6. Acceder a la aplicación
Abrir navegador web y acceder a:
```
http://localhost/httpdocs/ENLDWESProyectoTema5/indexProyectoTema5.php
```

## Estructura del Proyecto
```
ENLDWESProyectoTema5/
├── indexProyectoTema5.php      # Punto de entrada principal
├── .htaccess                   # Configuración Apache
├── /codigoPHP/                 # Ejercicios PHP (00-03)
│   ├── ejercicio00.php         # Variables superglobales y phpinfo()
│   ├── ejercicio01.php         # Control acceso con header()
│   ├── ejercicio02.php         # Control acceso con BD (PDO)
├── /mostrarcodigo/             # Visualización de código fuente
│   ├── muestraEjercicio00.php
│   ├── muestraEjercicio01.php
│   ├── muestraEjercicio02.php
├── /config/                    # Configuración de la aplicación
│   └── confDB.php              # Credenciales base de datos
├── /core/                      # Librerías y clases PHP
├── /doc/                       # Documentación técnica
├── /error/                     # Páginas de error personalizadas
├── /webroot/                   # Recursos estáticos
│   └── /css/                   # Hojas de estilo
├── /scriptDB/                  # Scripts SQL
│   ├── CreaDBENLDWESProyectoTema5.sql
│   ├── CargaInicialDBENLDWESProyectoTema5.sql
│   └── BorraDBENLDWESProyectoTema5.sql
└── /tmp/                       # Archivos temporales
```

## Modelo de Datos

### Tabla: T01_Usuario

| Campo | Tipo | Descripción |
|-------|------|-------------|
| **T01_CodUsuario** (PK) | VARCHAR(8) | Código de usuario (4-8 caracteres) |
| T01_Password | VARCHAR(8) | Contraseña (4-8 caracteres) |
| T01_DescUsuario | VARCHAR(255) | Nombre completo del usuario |
| T01_NumConexiones | INT | Contador de accesos al sistema |
| T01_FechaHoraUltimaConexion | DATETIME | Última conexión (automática) |
| T01_Perfil | VARCHAR(20) | Perfil: "usuario" o "administrador" |
| T01_ImagenUsuario | VARCHAR(255) | Ruta imagen de perfil (opcional) |

### Credenciales de Base de Datos

- **Base de datos:** DBENLDWESProyectoTema5
- **Usuario aplicación:** userENLDWESProyectoTema5
- **Contraseña:** paso
- **Usuario administrador:** adminsql / paso

## Ejercicios Implementados

### Ejercicio 00 - Variables Superglobales y phpinfo()
- Visualización completa de `$_SERVER`
- Exploración de `$_COOKIE`
- Análisis de `$_SESSION`
- Estudio de phpinfo() para configuración de sesiones
- Comprensión del entorno de ejecución PHP

### Ejercicio 01 - Control de Acceso con header()
- Sistema básico de autenticación HTTP
- Uso de la función `header()` para autenticación
- Control de acceso sin formulario
- Redirecciones HTTP 401 Unauthorized
- Manejo básico de credenciales

### Ejercicio 02 - Control de Acceso con Base de Datos
- Autenticación contra tabla T01_Usuario
- Consultas PDO con prepared statements
- Validación de credenciales en BD
- Mensajes de error personalizados
- Registro de intentos de acceso

## URLs de Acceso

### Página Principal
```
https://enriquenielor.ieslossauces.es/ENLDWESProyectoTema5/indexProyectoTema5.php
```

### Ejercicios Individuales
```
https://enriquenielor.ieslossauces.es/ENLDWESProyectoTema5/codigoPHP/ejercicio00.php
https://enriquenielor.ieslossauces.es/ENLDWESProyectoTema5/codigoPHP/ejercicio01.php
https://enriquenielor.ieslossauces.es/ENLDWESProyectoTema5/codigoPHP/ejercicio02.php
```

### Visualización de Código
```
https://enriquenielor.ieslossauces.es/ENLDWESProyectoTema5/mostrarcodigo/muestraEjercicio00.php
```

## Características Destacadas

- **Gestión de sesiones:** Implementación completa del ciclo de vida de sesiones PHP
- **Autenticación segura:** Validación de credenciales contra base de datos con PDO
- **Control de acceso:** Protección de páginas mediante verificación de sesión activa
- **Variables superglobales:** Estudio exhaustivo de `$_SERVER`, `$_COOKIE`, `$_SESSION`
- **Cookies y sesiones:** Comprensión de la relación PHPSESSID entre cliente y servidor
- **Prepared statements:** Todas las consultas SQL parametrizadas para seguridad

## Autor

**Enrique Nieto Lorenzo**

Estudiante de DAW2 (Desarrollo de Aplicaciones Web)  
IES Los Sauces - Curso 2025/2026  
Módulo: DWES (Desarrollo Web en Entorno Servidor)

GitHub: EnriqueNieto90  
Repositorio: ENLDWESProyectoTema5
```
