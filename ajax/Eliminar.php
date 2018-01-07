<?php
if (isset($_POST['id']) && isset($_POST['id']) != "") {
    require 'UsuarioCRUD.php';
    $id = $_POST['id'];
 
    $usuario = new UsuarioCRUD();
    $usuario->Delete($id);
}
?>