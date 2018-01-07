<?php
if (isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['direccion']) && isset($_POST['email'])) {
    require("UsuarioCRUD.php");
 
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
 
    $usuario = new UsuarioCRUD();
 
    $usuario->Create($nombre, $apellidos, $direccion, $email);
}
?>