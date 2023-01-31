<?php

/*
Configuración general del framework
Constantes
*/

// DIRECTORIO RAIZ DEL FRAMEWORK
define('APPROOT', dirname(dirname(__FILE__)));
//echo APPROOT;
//URL DE LA APP
// si fuese en la nube
// define('URLROOT', 'http://www.elDominio.com/');
define('URLROOT', 'http://localhost/ProyectoBellavista/');
//NOMBRE DE LA APLICACIÓN
define('SITENAME', 'Inversiones Bellavista');
//CREDENCIALES PARA LA BASE DE DATOS
define('DB_HOST',  'localhost'); // ojo: cambiarla en el deploy
define('DB_USER', 'root'); //USUARIO DE LA BD
define('DB_PASSWORD', ''); //PASSWORD USUARIO DE LA BD
define('DB_NAME', 'bd_bellavista'); //nombre de la base de datos con la que se va a trabajar en el proyecto
