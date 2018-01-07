<?php
 
require __DIR__ . '/Conexion.php';
 
class UsuarioCRUD
{
 
    protected $db;
 
    function __construct()
    {
        $this->db = DB();
    }
 
    function __destruct()
    {
        $this->db = null;
    }
 
    /*
     * Agregar un nuevo registro
     *
     * @param $nombre
     * @param $apellidos
     * @param $direccion
     * @param $email
     * @return $mixed
     * */
    public function Create($nombre, $apellidos, $direccion, $email)
    {
        $query = $this->db->prepare("INSERT INTO usuarios (nombre, apellidos, direccion, email) VALUES (:nombre, :apellidos, :direccion, :email)");
        $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
        $query->bindParam("apellidos", $apellidos, PDO::PARAM_STR);
        $query->bindParam("direccion", $direccion, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        return $this->db->lastInsertId();
    }
 
    /*
     * Devuelve todos los registros de la tabla
     *
     * @return $mixed
     * */
    public function Read()
    {
        $query = $this->db->prepare("SELECT * FROM usuarios");
        $query->execute();
        $data = array();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }
 
    /*
     * Borra un registro
     *
     * @param $id
     * */
    public function Delete($id)
    {
        $query = $this->db->prepare("DELETE FROM usuarios WHERE id = :id");
        $query->bindParam("id", $id, PDO::PARAM_STR);
        $query->execute();
    }
 
    /*
     * Actualiza el registro
     *
     * @param $nombre
     * @param $apellidos
     * @param $direccion
     * @param $email
     * @return $mixed
     * */
    public function Update($nombre, $apellidos, $direccion, $email, $id)
    {
        $query = $this->db->prepare("UPDATE usuarios SET nombre = :nombre, apellidos = :apellidos, direccion = :direccion, email = :email  WHERE id = :id");
        $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
        $query->bindParam("apellidos", $apellidos, PDO::PARAM_STR);
        $query->bindParam("direccion", $direccion, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->bindParam("id", $id, PDO::PARAM_STR);
        $query->execute();
    }
 
    /*
     * Obtiene los detalles del registro solicitado
     *
     * @param $id
     * */
    public function Details($id)
    {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
        $query->bindParam("id", $id, PDO::PARAM_STR);
        $query->execute();
        return json_encode($query->fetch(PDO::FETCH_ASSOC));
    }
}
 
?>