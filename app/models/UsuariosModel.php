<?php
//modelo correspondiente a cada controlador
class UsuariosModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }    
    /**
     * getAllUsers
     * Selecciona todos los usuarios de la BD
     * @return data
     */
    public function getAllUsers()
    {
        $this->db->query("SELECT * FROM usuariosbellavista");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    public function getOne($data)
    {
        $this->db->query("SELECT * FROM usuariosbellavista WHERE documentoID=:documentoID;");
        $this->db->bind(':documentoID', $data['numeroIdU']);

        $resultSet = $this->db->getOne();
        return $resultSet;
    }
    ## Función para registrar usuarios
    public function registroUsuario($data)
    {
        $this->db->query("INSERT INTO usuariosbellavista (nombres, apellidos, documentoID, passUsuario) 
        VALUES (:nombresU,:apellidosU,:numeroIdU,:passU)");
        $this->db->bind(':nombresU', $data['nombresU']);
        $this->db->bind(':apellidosU', $data['apellidosU']);
        $this->db->bind(':numeroIdU', $data['numeroIdU']);
        $this->db->bind(':passU', $data['passU']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        } 
    }

    //actualiza un registro
    public function update($data)
    {
        $this->db->query("UPDATE `usuarios` SET `nomUsuario`=:nomUsuario,`apeUsuario`=:apeUsuario,`direccionUsuario`=:direccionUsuario,`fechaNacUsuario`=:fechaNacUsuario,`ciudadUsuario`=:ciudadUsuario,`passUsuario`=:passUsuario WHERE `idUsuario`=:idUsuario "       
        );
        $this->db->bind(':nomUsuario', $data['nomUsuario']);
        $this->db->bind(':apeUsuario', $data['apeUsuario']);
        $this->db->bind(':direccionUsuario', $data['direccionUsuario']);
        $this->db->bind(':fechaNacUsuario', $data['fechaNacUsuario']);
        $this->db->bind(':ciudadUsuario', $data['ciudadUsuario']);
        $this->db->bind(':passUsuario', $data['passUsuario']);
        $this->db->bind(':idUsuario', $data['idUsuario']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
/*     public function update($nomUsuario,$apeUsuario,$direccionUsuario,$fechaNacUsuario,$ciudadUsuario,$passUsuario,$idUsuario)
    {
        $this->db->query("UPDATE `usuarios` SET `nomUsuario`='$nomUsuario',`apeUsuario`='$apeUsuario',`direccionUsuario`='$direccionUsuario',`fechaNacUsuario`='$fechaNacUsuario',`ciudadUsuario`='$ciudadUsuario',`passUsuario`='$passUsuario' WHERE `idUsuario`=$idUsuario;"       
        );
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    } */
    // Elimina un registro
    public function delete($data)
    {
        $this->db->query("DELETE FROM `usuarios` WHERE `idUsuario` = :idUsuario");
        $this->db->bind(':idUsuario', $data['idUsuario']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function search($nombre)
    {
        $this->db->query("SELECT * FROM usuarios WHERE `nomUsuario` LIKE CONCAT('%','$nombre','%')");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }    
    /**
     * totalUsuarios
     * devuelve total usuarios para paginación
     * @return void
     */
    public function totalUsuarios()
    {
        $this->db->query("SELECT COUNT(idUsuario) as numevents FROM usuarios");
        $resultSet = $this->db->getOne();
        return  $resultSet;
    }
    /**
     * totalPages
     * devuelve el total de paginas de acuerdo al limite y al offset
     * @param  mixed $perPage
     * @param  mixed $offset
     * @return void
     */
    public function totalPages($perPage, $offset)
    {
        $this->db->query("SELECT * from usuarios ORDER BY nomUsuario ASC LIMIT $perPage OFFSET $offset");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
}
