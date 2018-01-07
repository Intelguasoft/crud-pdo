<?php
 
// Script para conexion a BBDD  
 
// Variables para la conexion a la BBDD
define('HOST', 'localhost'); // Servidor de BBDD. localhost
define('USER', 'root'); // Usuario de la BBDD root
define('PASSWORD', ''); // Password de la BBDD  (Si no tiene asignado alguno, deje vacio )
define('PORT', '3300'); // Puerto de comunicacion con la BBDD
define('DATABASE', 'demo_pdo'); // Nombre de la BBDD
define('CHARSET', 'utf8'); // Cotejamiento de la BBDD
 
function DB()
{
    static $cnn;
    if ($cnn === null) {
        $opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => FALSE,
        );
        $dsn = 'mysql:host=' . HOST . ';port=' . PORT . ';dbname=' . DATABASE . ';charset=' . CHARSET;
        $cnn = new PDO($dsn, USER, PASSWORD, $opt);
    }
    return $cnn;
}
 
?>