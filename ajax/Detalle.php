<?php
if (isset($_POST['id']) && isset($_POST['id']) != "") {
    require 'UsuarioCRUD.php';
    $id = $_POST['id'];
 
    $usuario = new UsuarioCRUD();
 
    echo $usuario->Details($id);
}
?>