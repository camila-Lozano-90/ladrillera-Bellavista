<?php
//modelo correspondiente a cada controlador
class ReferenciasModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }
    public function listarReferencias()
    {   
        $this->db->query("SELECT * FROM referenciasladrillo");
        $resultSet = $this->db->getAll();
        return $resultSet;
        die(var_dump($resultSet));
    }

    public function agregar($data)
    {   //die(var_dump($data));
        $this->db->query("INSERT INTO referenciasladrillo(nombre, medidas, rendimiento, peso, referencia) 
        VALUES (:nombre,:medidas,:rendimiento,:peso,:referencia);");

        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':medidas', $data['medidas']);
        $this->db->bind(':rendimiento', $data['rendimiento']);
        $this->db->bind(':peso', $data['peso']);
        $this->db->bind(':referencia', $data['referencia']);
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        } 
    }

    public function editar($data)
    {   //die(var_dump($data));
        $this->db->query("UPDATE referenciasladrillo SET nombre=:nombre,medidas=:medidas,rendimiento=:rendimiento,
        peso=:peso,referencia=:referencia WHERE id=:id;");

        $this->db->bind(':id', $data['id']);        
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':medidas', $data['medidas']);
        $this->db->bind(':rendimiento', $data['rendimiento']);
        $this->db->bind(':peso', $data['peso']);
        $this->db->bind(':referencia', $data['referencia']);
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        } 
    }

    public function eliminar($data)
    {   //die(var_dump($data));
        $this->db->query("DELETE FROM referenciasladrillo WHERE id=:id;");

        $this->db->bind(':id', $data['id']);        
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        } 
    }

}