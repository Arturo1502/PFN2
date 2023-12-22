

gitBienvenido al proyecto final del nivel 2. En este proyecto estaremos aplicando los conocimientos adquiridos a lo largo del nivel. Sigue las instrucciones de este archivo para completar el proyecto y ten en cuenta que estas mismas se tomarán en cuenta para la evaluación final del proyecto.

## Instrucciones

Existe una universidad que desea crear su plataforma virtual. El diseño de la página web no está terminado, pero existen algunas vistas que podrían servir de referencia que vamos a dejarte en este repositorio. Según las instrucciones que el cliente nos ha dado, te daré las indicaciones necesarias para completar el proyecto.

Para este proyecto, debes crear una plataforma con sistema de roles. Existen tres en específico: admin, maestro y alumno. Cada uno tendrá las siguientes funcionalidades:

### ADMIN

- Crear, Leer, Actualizar y Eliminar registros de maestros (CRUD).
- Crear, Leer, Actualizar y Eliminar clases/materias/cursos registrados (CRUD).
- Relacionar un maestro a varios cursos.
- Se pueden eliminar registros de maestros aún si él/ella tiene asignado(a) varias clases.
- Cambiar el rol de cada usuario (no se permite crear nuevos roles).

### MAESTRO

- Ver la clase a la que como maestro está asignado.

## Archivos proporcionados en este repositorio

En este repositorio te hemos dado los siguientes archivos:

- En la carpeta `assets` encontrarás un archivo llamado `logo.jpg` el cual es el logo de la universidad en cuestión.
- En la carpeta `design` encontrarás tres carpetas: `admin` y `maestro`. En cada una se encuentran las respectivas capturas de pantalla que ilustran la funcionalidad del proyecto. Recuerda que <b>NO</b> es 100% obligatorio utilizar el mismo diseño. Sin embargo, debes aún **respetar la funcionalidad y los colores del logo que te hemos proporcionado**.

> **NOTA:** En la barra de navegación lateral y en otras partes de las imágenes que te proporcionamos en `design` verás botones o texto que dice "Alumnos", no es necesario que los coloques porque en este proyecto no hemos implementado ese rol.

## Consideraciones para la calificación

A continuación te presentaremos los requerimientos que se tomarán en cuenta para la calificacion del proyecto, así como sus respectivos puntajes.

### Interfaz de Usuario (UI) - 10 puntos

| Requerimiento                                                                          | Valor (puntaje) |
| :------------------------------------------------------------------------------------- | :-------------: |
| La interfaz del usuario (UI) tiene el logo de la universidad.                          |        5        |
| Respetar los colores del logo de la universidad o buscar otros que combinen con estos. |        5        |
| Total                                                                                  |    10 puntos    |

### Login - 10 puntos

| Requerimiento                     | Valor (puntaje) |
| :-------------------------------- | :-------------: |
| Contraseña hasheada o encriptada. |        5        |
| Login de acuerdo al rol.          |        5        |
| Total                             |    10 puntos    |

### Rol: Admin - 40 puntos

| Requerimiento                            | Valor (puntaje) |
| :--------------------------------------- | :-------------: |
| Crear registros de maestros (CRUD).      |        4        |
| Leer registros de maestros (CRUD).       |        4        |
| Actualizar registros de maestros (CRUD). |        4        |
| Eliminar registros de maestros (CRUD).   |        4        |
| Crear materias (CRUD).                   |        4        |
| Leer materias (CRUD).                    |        4        |
| Actualizar materias (CRUD).              |        4        |
| Eliminar materias (CRUD).                |        4        |
| Relacionar un maestro a varios cursos.   |        4        |
| Cambiar el rol de cada usuario.          |        4        |
| Total                                    |    40 puntos    |

### Rol: Maestro - 8 puntos

| Requerimiento                                            | Valor (puntaje) |
| :------------------------------------------------------- | :-------------: |
| Ver todas las clase a la que como maestro está asignado. |        8        |
| Total                                                    |    8 puntos     |

### Estructura del proyecto - 32 puntos

| Requerimiento                                                      | Valor (puntaje) |
| :----------------------------------------------------------------- | :-------------: |
| MVC                                                                |        7        |
| POO                                                                |        8        |
| Usar llaves foráneas en la base de datos                           |       15        |
| El archivo index.php se encuentra en la carpeta raíz del proyecto. |        2        |
| Total                                                              |    32 puntos    |

## ACUMULADO

| Categoría                | Valor (puntaje) |
| :----------------------- | :-------------: |
| Interfaz de Usuario (UI) |       10        |
| Login                    |       10        |
| Rol: Admin               |       40        |
| Rol: Maestro             |        8        |
| Estructura del proyecto  |       32        |
| Total                    |   100 puntos    |

## Consideraciones OPCIONALES que suman puntos:

- El diseño debe ser 100% responsive.
- Activar o desactivar a un usuario en el panel de administrador (quiere decir que si un usuario ha sido desactivado, no debería poder acceder con sus credenciales hasta que sea activado nuevamente).
- Las tablas tienen botones que permiten exportar los datos de las mismas en formato PDF, Excel, etc.
- Las tablas están paginadas.
- Usar el plugin de Datatables (https://datatables.net/).
- Alguna otra funcionalidad acorde a la lógica del negocio.

Si existiesen requerimientos extras que se hayan realizado (de la lista de consideraciones opcionales o de tu propia iniciativa), debes dejar una nota en el archivo README.md de tu repositorio en GitHub que especifique cada una.
