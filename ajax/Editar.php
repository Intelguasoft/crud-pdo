<?php
if (isset($_POST)) {
    require 'UsuarioCRUD.php';
 
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
 
    $usuario = new UsuarioCRUD();
 
    $usuario->Update($nombre, $apellidos, $direccion, $email, $id);
}