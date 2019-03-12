# MdeAmor

## Instalar
Requiere de una instalacion en dominio personalizado, ej. http://local.mdeamor.com/

## Instalacion en XAMMP:

Configurar archivo hosts, C:\Windows\System32\drivers\etc\hots

```
127.0.0.1   local.mdeamor.com

```
Configurar archivo hosts, C:\xampp\apache\conf\extra\

```
<VirtualHost *:80>  
    DocumentRoot "C:\xampp\htdocs\local.mdeamor.com"
    ServerName local.mdeamor.com
</VirtualHost>

```
##Instalación del tema:
-Configura el archivo config.inc.php en la raiz 
--Api
--Api Key
--Servidor de base de datos
--Usuario de base de datos
--Nombre de base de datos
--Contraseña de base de datos
Los demás campos son opcionales de modificar


```php
define(	"RUTA_ACTUAL","http://local.ministeriosdeamor.org.mx/");  // URL actual del sistema
...
define(	"JMY_API","XXXXX"); 
define(	"JMY_APIKEY","XXXXXX"); 
... 
/*MySQL*/
define(	"DB_HO","localhost"); //servidor
define(	"DB_US","root"); //usuario
define(	"DB_PA",""); //contrase�a
define(	"DB_DB","mdeamor"); //Base de datos
...

```

-Ingresa a: http://local.mdeamor.com/entrar
-Registrate con tu cuenta de desarrollador
-Instala la base en: http://local.mdeamor.com/INSTALAR
-Instala el administrador en: http://local.mdeamor.com/administrador/instalar/
-Sal del sistema e reingresa: http://local.mdeamor.com/entrar/salir/
-Edita los permisos de usuarios: http://local.mdeamor.com/administrador/usuarios/

## Listo!
