<?php

//modelo correspondiente a cada controlador
class LoginModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }


    //retorna todos los registros
    public function getAll()
    {
        $this->db->query("SELECT * FROM usuariosbellavista");
        $resultSet = $this->db->getAll();
        // $resultSet = json_encode($resultSet);
        return $resultSet;
    }

    // retorna un registro de acuerdo al id
    public function getOne($id)
    {
        $this->db->query("SELECT * FROM usuariosbellavista where id =:id");
        $this->db->bind(':id', $id);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM usuariosbellavista WHERE documentoID = :documentoID');
        // Bind value
        $this->db->bind(':documentoID', $email);

        $row = $this->db->getOne();

        // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $password)
    {
        //die(var_dump($email));
        //die(var_dump($password));
        //die(var_dump('vamo a ve'));
        $this->db->query('SELECT * FROM usuariosbellavista WHERE documentoID = :documentoID');
        // Bindiamos
        $this->db->bind(':documentoID', $email);
        //obtenemos password de la BD
        $row = $this->db->getOne();
        //$variable = "passUsuario";
        $password_bd = $row -> passUsuario;
        //die(var_dump($password_bd));
        //die(var_dump($row));
        //if (password_verify($password, $password_bd))

        if ($password == $password_bd){
            //die(var_dump($row));
            return $row;

        } else {
            //die(var_dump('no funcionó parce'));
            return false;
        }
    }
}
