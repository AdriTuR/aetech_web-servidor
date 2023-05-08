# aetech_web-servidor
Repositorio de la web y el servidor

INSTALACIÓN
=======================================================================================================================================================================
Para poder ejecutar el programa correctamente es necesario seguir una serie de pasos que se explican detalladamente a continuación.

Paso 1: Instalar o tener instaladas las aplicaciones necesarias:  -XAMPP Control Panel

Paso 2: Configuración del XAMPP:

Tras la instalación de XAMPP se creará una carpeta con el siguiente aspecto: 

<img src="/docs/img_readme/A1.png" alt=""/>

Hay que comprobar que esta carpeta se encuentra en la raiz del disco C:/ tal como se ve en la imagen, en caso contrario hay que reubicarla en la ruta indicada.

A continuación, tendremos que coger todos los archivos de este repositorio menos aquellos que se encuentren en la carpeta img_readme y meterlos en una nueva carpeta (el nombre puede ser otro pero hay que ser consciente de cual es), esta nueva carpeta hay que ponerla dentro de la carpeta htdocs que se encuentra dentro de la carpeta xampp del paso anterior.

Seguidamente hay una imagen que muestra el resultado esperado: 

<img src="/docs/img_readme/A2.png" alt=""/>


Paso 3: Acceder a phpMyadmin y preparar la estructura de la base de datos

Tras abrir la aplicación XAMPP hay que activar el Apache y el MySQL clicando el boton Start. Una vez activados, hay que observar la columna de Port(s) en la fila Apache, donde aparecerá un valor seguido de una coma y otro valor, hay que fijarse en el valor anterior a la coma, este es el puerto por el que está escuchando el servidor.

En la imagen siguiente se observa que en ese caso el numero de puerto es el 80 y que tiene activos el Apache y el MySQL: 

<img src="/docs/img_readme/A3.png" alt=""/>

Una vez claro el numero de puerto y con todos los campos mencionados activos, hay que ir a un servidor e insertar una búsqueda con la siguiente estructura: localhost:80
pero cambiando el 80 por el número de puerto correspondiente.

Si todo ha ido bien habrá una página web con el icono de Xampp bien visible. En esta página se podrá encontrar en la parte superior derecha un botón llamado phpMyAdmin. Hay que pulsarlo.

Una vez clicado estaremos dentro de phpMyAdmin, aquí, habrá que crear una base de datos con el nombre "": 
<img src="/docs/img_readme/A4.png" alt=""/>


Paso 4: Acceder a la web y ver que todo funciona bien:

Para ello es necesario saber a ciencia cierta el nombre de la carpeta que hemos creado en el Paso 2, ya que tendremos que entrar en un navegador teniendo Apache y MySQL todavia activos en XAMPP, y introducir la siguiente dirección:
localhost/src/index.php o como se llame la carpeta y la ruta.

donde src es el nombre de nuestra carpeta  (en caso de haber puesto otro nombre hay que sustituir el nombre src por el nombre asignado).

Si la dirección es correcta debería aparecer una web similar a la siguiente:
<img src="/docs/img_readme/W1.jpg" alt=""/>

Para acceder al panel del usuario los datos son: -"Usuario" -"12345"  
