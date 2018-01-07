<?php
 
require 'UsuarioCRUD.php';
 
$usuario = new UsuarioCRUD();
 
// Design initial table header
$data = '<table class="table table-bordered table-striped">
                        <tr>
                            <th>No.</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Dirección</th>
                            <th>Correo electronico</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>';
 
 
$usuarios = $usuario->Read();
 
if (count($usuarios) > 0) {
    $correlativo = 1;
    foreach ($usuarios as $user) {
        $data .= '<tr>
                <td>' . $correlativo . '</td>
                <td>' . $user['nombre'] . '</td>
                <td>' . $user['apellidos'] . '</td>
                <td>' . $user['direccion'] . '</td>
                <td>' . $user['email'] . '</td>
                <td>
                    <button onclick="getDetails(' . $user['id'] . ')" class="btn btn-warning">Editar</button>
                </td>
                <td>
                    <button onclick="deleteRecord(' . $user['id'] . ')" class="btn btn-danger">Eliminar</button>
                </td>
            </tr>';
        $correlativo++;
    }
} else {
    // no se encontraron registros
    $data .= '<tr><td colspan="7">No se encontraron registros!</td></tr>';
}
 
$data .= '</table>';
 
echo $data;
 
?>