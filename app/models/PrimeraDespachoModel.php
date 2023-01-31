<?php
//modelo correspondiente a cada controlador
class PrimeraDespachoModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }
    public function todos()
    {   
        $this->db->query("SELECT responsableCargue, fechaCargue, primera, 
        segunda, rotura, cd, referencia FROM controldiariodespachos;");

        $resultSet = $this->db->getAll();
        return $resultSet;
        //var_dump($resulset);
    }

    public function operarios()
    {   
        $this->db->query("SELECT * FROM operarios");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    
    public function agregar($data)
    {   //die(var_dump($data));
        $this->db->query("INSERT INTO primeradespacho(referencia, unidades, fecha) 
        VALUES (:referencia,:unidades,:fecha);");

        $this->db->bind(':referencia', $data['referencia']);
        $this->db->bind(':unidades', $data['unidades']);
        $this->db->bind(':fecha', $data['fecha']);
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        } 
    }

    public function unidadesDiaInv($data)
    {   //die(var_dump($data['referencia']));
        $this->db->query("SELECT SUM(primera) FROM controldiariodespachosfooter WHERE referencia = :referencia;");
        $this->db->bind(':referencia', $data['referencia']);
        $resulset = $this->db->getOne();
        $res = json_encode($resulset->{'SUM(primera)'});
        $res1 = trim($res,'"');
        //die($res1);
        return $res1;
    }

    public function hayDescargueHoy($data)
    {   //die(var_dump($data['referencia']));
        //$dateTime = date('Y-m-d');
        $this->db->query("SELECT * FROM controldiariodespachos WHERE fechaDiario = :fecha;");
        $this->db->bind(':fecha', $data['fecha']);
        $resulset = $this->db->getOne();
        //die($resulset);
        return $resulset;
    }

    public function actualizarDiario($data,$ultimoInsert,$unidadesInv)
    {   //die(var_dump($data));
        //die(var_dump($unidadesInv));
        $UnidadesRestantes = intval($unidadesInv) - intval($data['unidades']);
        //die(var_dump($UnidadesRestantes));
        $this->db->query("UPDATE controldiariodespachosfooter SET primera=:unidades 
        WHERE referencia=:referencia AND idCrtlDespFoot = :ultimoInsert;");

        $this->db->bind(':referencia', $data['referencia']);
        $this->db->bind(':unidades', $UnidadesRestantes);
        $this->db->bind(':ultimoInsert', $ultimoInsert);
        //$this->db->bind(':idCtrDesp', $ultimoInsert);
        $resulset = $this->db->execute();
        
        if ($resulset) {
            return true;
        } else {
            return false;
        }
    }

    # Obtener el id del último préstamo registrado
    public function getLast($data)
    {
        $this->db->query("SELECT idCrtlDespFoot FROM controldiariodespachosfooter WHERE referencia = :referencia AND primera > 0;");
        $this->db->bind(':referencia', $data['referencia']);
        $resulset = $this->db->getOne();

        $res = json_encode($resulset->{'idCrtlDespFoot'});
        $res1 = trim($res,'"');
        //die($res1);

        ## RETORNO **********************************************
        return $res1;
    }

}