<?php

// EXTRAEMOS LA DIRECCION DE LA URL A TRAVES DE LA VARIABLE $_SERVER
$folderPath = dirname($_SERVER['SCRIPT_NAME']);
$urlPath = $_SERVER['REQUEST_URI'];
// Elegimos la parte de la URL que nos interesa
$url = substr($urlPath, strlen($folderPath)); 

///// DEFINIMOS VARIABLES GLOBALES
define('URL', $url);
define('URL_PATH', $folderPath);