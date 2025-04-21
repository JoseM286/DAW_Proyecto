<?php
// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'tienda_alimentacion');

// Configuración del sitio
define('SITE_URL', 'http://localhost/tienda-alimentacion');
define('SITE_NAME', 'Tienda Alimentación');

// Configuración de rutas
define('ROOT_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('INCLUDES_PATH', ROOT_PATH . 'includes' . DIRECTORY_SEPARATOR);
define('UPLOADS_PATH', ROOT_PATH . 'assets/img/products' . DIRECTORY_SEPARATOR);

// Configuración de sesión
session_start();