<?php
//modelo correspondiente a cada controlador
class DiarioInventarioModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }
    ## PARA CARGAR LAS TABLAS *************************************************************************************************
    public function todos()
    {
        $this->db->query("SELECT controldiariodespachos.responsableCargue, controldiariodespachos.fechaDiario, 

        controldiariodespachosfooter.referencia, controldiariodespachosfooter.primera, controldiariodespachosfooter.segunda, controldiariodespachosfooter.rotura
        
        FROM controldiariodespachos
        INNER JOIN controldiariodespachosfooter
        ON controldiariodespachos.idCtrDesp = controldiariodespachosfooter.idcontroldiariodespachos;");

        $resultSet = $this->db->getAll();
        return $resultSet;
        //var_dump($resulset);
    }
    ## PARA OBTENER LOS NOMBRES DE LOS OPERARIOS *********************************************************************************************************************
    public function operarios()
    {   
        $this->db->query("SELECT * FROM operarios");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    ## PARA INSERTAR EN EL DIARIO DE DESPACHOS ******************************************************************************
/*     public function agregar($data)
    {   
        $this->db->query("INSERT INTO controldiariodespachos (responsableCargue, fechaCargue, primera, segunda, cd, referencia) 
        VALUES (:responsableCargue,:fechaDia,:primera,:segunda,:cd,:referencia)");

        $this->db->bind(':responsableCargue', $data['responsableCargue']);
        $this->db->bind(':fechaDia', $data['fechaDia']);
        $this->db->bind(':primera', $data['primera']);
        $this->db->bind(':segunda', $data['segunda']);
        $this->db->bind(':cd', $data['cd']);
        $this->db->bind(':referencia', $data['referencia']);
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        } 
    }

    public function agregarResp($data)
    {   
        $this->db->query("INSERT INTO controldiariodespachos (responsableCargue) 
        VALUES (:responsableCargue)");

        $this->db->bind(':responsableCargue', $data['responsableDiario']);
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        } 
    } */

    # Obtener el id del último préstamo registrado
    public function getLast()
    {
        $ultimo = $this->db->lastInsertId();
        return $ultimo;
        //die(var_dump($ultimo));
    }

}