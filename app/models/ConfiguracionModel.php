<?php

//modelo correspondiente a cada controlador
class ConfiguracionModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    //retorna todos los registros
    public function horario()
    {
        $this->db->query("SELECT * FROM horarios;");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function semana()
    {
        $this->db->query("SELECT horarioApertura, horarioCierre FROM horarios WHERE dia='Lunes';");
        $result = $this->db->getAll();
        return $result;
    }

    public function finde()
    {
        $this->db->query("SELECT horarioApertura, horarioCierre FROM horarios WHERE dia='Sabado';");
        $result = $this->db->getAll();
        return $result;
    }

    public function telefonos()
    {
        $this->db->query("SELECT id, numero, descripcion FROM telefonos;");
        $result = $this->db->getAll();
        return $result;
    }

    // retorna un registro de acuerdo al id
    public function getOneTel($data)
    {
        $this->db->query("SELECT * FROM telefonos WHERE numero=:numero;");
        $this->db->bind(':numero', $data['num']);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }
    //
    public function cambiarTel($data)
    {
        $this->db->query("INSERT INTO telefonos(numero, descripcion) VALUES (:numero,:descripcion)");
        $this->db->bind(':numero', $data['num']);
        $this->db->bind(':descripcion', $data['descripcion']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //
    public function cambiarTel2($data)
    {
        $this->db->query("UPDATE telefonos SET descripcion=:descripcion WHERE numero=:numero;");
        $this->db->bind(':numero', $data['num']);
        $this->db->bind(':descripcion', $data['descripcion']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //
    public function DeleteTel($data)
    {
        $this->db->query("DELETE FROM telefonos WHERE numero=:numero;");
        $this->db->bind(':numero', $data['num']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    // retorna un registro de acuerdo al dia
    public function getOne($data)
    {
        $this->db->query("SELECT * FROM horarios WHERE dia=:dia;");
        $this->db->bind(':dia', $data['dia']);
        $resultSet = $this->db->getOne();
        return $resultSet;
    }

    public function cambiarHorarios($data)
    {
        $this->db->query("INSERT INTO horarios(dia, horarioApertura, horarioCierre) 
        VALUES (:dia,:horarioAper,:horarioCierre)");
        $this->db->bind(':dia', $data['dia']);
        $this->db->bind(':horarioAper', $data['horarioAper']);
        $this->db->bind(':horarioCierre', $data['horarioCierre']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function cambiarHorarios2($data)
    {
        $this->db->query("UPDATE horarios SET horarioApertura=:horarioAper,horarioCierre=:horarioCierre WHERE dia=:dia;");
        $this->db->bind(':dia', $data['dia']);
        $this->db->bind(':horarioAper', $data['horarioAper']);
        $this->db->bind(':horarioCierre', $data['horarioCierre']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function DeleteHorario($data)
    {
        $this->db->query("DELETE FROM horarios WHERE dia=:dia;");
        $this->db->bind(':dia', $data['dia']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
