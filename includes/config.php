<?php
// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'MercadonLine');

// Configuración del sitio
define('SITE_URL', 'http://localhost/MercadonLine');
define('SITE_NAME', 'MercadonLine');

// Configuración de rutas //Creo constantes que guardan la ruta de los directorios
    //define('ROOT_PATH', 'DAW_Proyecto\\'); //Esta sentencia es lo mismo que la de abajo para esta localización de config.php
define('ROOT_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR); 

    //define('INCLUDES_PATH', 'DAW_Proyecto\\includes\\');  
    //Se ponen dos barras en la ruta pq una barra escapa el siguiente caracter en PHP, daria error al escapar la comilla final
define('INCLUDES_PATH', ROOT_PATH . 'includes' . DIRECTORY_SEPARATOR);

    //define('UPLOADS_PATH', 'DAW_Proyecto\\assets\\img\\products\\'); //
define('UPLOADS_PATH', ROOT_PATH . 'assets' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'products' . DIRECTORY_SEPARATOR);

// Configuración de sesión
session_start();