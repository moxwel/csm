# Organización

- Todo lo que sean imagenes y recursos graficos, por favor en la carpeta [assets](./assets/).
- Si tienes archivos o codigo de prueba, por favor ponerlos en la carpeta [debug](./debug/).
- Si deseas poner CSS o JavaScript externo, por favor crear una carpeta correspondiente dentro de [include](./include/).
- Todas las paginas principales estan dentro de [page](./page/), y codigo PHP exclusivo y de utilidad en [tools](./page/tools/).

# Clonar el repositorio en XAMPP

- Descarga XAMPP para Windows desde [aquí](https://www.apachefriends.org/es/index.html).
- Descarga el repositorio desde GitHub Web como ZIP.
- Ve a la carpeta donde tienes instalado XAMPP (por defecto es `C:\xampp`).
- Accede a la carpeta `htdocs`.
- Desde el ZIP, extrae la carpeta `csm-master` allí.

> ⚠ Importante: Asegurate primero de importar el [esquema SQL](./debug/users.sql) en phpMyAdmin (accede a `localhost/phpmyadmin/server_import.php`).

# Acceder a las páginas

En el navegador web, y con el **servidor de Apache y MySQL corriendo**, ya puedes acceder a las paginas. Las más importantes son:

- `localhost/csm/` para acceder a la pagina inicial.
- `localhost/csm/debug/` para acceder a la seccion de pruebas.
