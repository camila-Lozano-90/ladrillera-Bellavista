<?php
//modelo correspondiente a cada controlador
class cargueDescargueModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }
    public function todos()
    {   
        $this->db->query("SELECT carguedescarguehorno.responsableCargue, carguedescarguehorno.fechaCargue, carguedescarguehorno.nave, carguedescarguehorno.paquete, carguedescarguehorno.linea,

        carguedescarguehornofooter.nombre, carguedescarguehornofooter.medidas, carguedescarguehornofooter.rendimiento, 
        carguedescarguehornofooter.peso, carguedescarguehornofooter.referencia, carguedescarguehornofooter.cantidad, carguedescarguehornofooter.idCargueHeader
        
        FROM carguedescarguehorno INNER JOIN carguedescarguehornofooter ON carguedescarguehorno.idCargueHeader = carguedescarguehornofooter.idCargueHeader;");

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

    public function addHeader($data)
    {   
        $this->db->query("INSERT INTO carguedescarguehorno (responsableCargue, fechaCargue, nave, quema, paquete, linea) 
        VALUES (:responsableCargue,:fechaCargue,:nave,:quema,:paquete,:linea)");

        $this->db->bind(':responsableCargue', $data['responsableCargue']);
        $this->db->bind(':nave', $data['nave']);
        $this->db->bind(':quema', $data['quema']);
        $this->db->bind(':paquete', $data['paquete']);
        $this->db->bind(':linea', $data['linea']);
        $this->db->bind(':fechaCargue', $data['fechaCargue']);
        
        if($this->db->execute()){
            return true;
        }else{
            return false;
        } 
    }

    # Obtener el id del último préstamo registrado
    public function getLast()
    {
        $ultimo = $this->db->lastInsertId();
        return $ultimo;
        die(var_dump($ultimo));
    }

    # Para obtener la cantidad de libros prestados según el número del préstamo guaradado en el header
    public function getCantRef($numCargue)
    {
        $cantidadReferencias = $this->db->query("SELECT COUNT(idCargueHeader) FROM carguedescarguehornofooter WHERE idCargueHeader = $numCargue");
        return $cantidadReferencias;
    }

    public function addFooter($data, $numCargue)
    {
        //die(var_dump($data));
       // die(var_dump($numPrestamo));        
        $numeroFilas = 0;
        //die(var_dump(count($data['id'])));
        while ($numeroFilas < count($data['id'])) {
            $this->db->query("INSERT INTO carguedescarguehornofooter (id, nombre, medidas, rendimiento, peso, referencia, cantidad, idCargueHeader) 
            VALUES (:id,:nombreRef,:medidasRef,:rendimientoRef,:pesoRef,:referencia,:cantidad,:numCargue)");
            
            $this->db->bind(':id', $data['id'][$numeroFilas]);
            $this->db->bind(':nombreRef', $data['nombre'][$numeroFilas]);
            $this->db->bind(':medidasRef', $data['medidas'][$numeroFilas]);
            $this->db->bind(':rendimientoRef', $data['rendimiento'][$numeroFilas]);
            $this->db->bind(':pesoRef', $data['peso'][$numeroFilas]);
            $this->db->bind(':referencia', $data['referencia'][$numeroFilas]);
            $this->db->bind(':cantidad', $data['cantidad'][$numeroFilas]);
            $this->db->bind(':numCargue',$numCargue);
            
            $resulset = $this->db->execute();
            $numeroFilas = $numeroFilas + 1;
        }  
        if ($resulset) {
            return true;
        } else {
            return false;
        } 
    }

    # Para actualizar la cantidad de libros prestados en el header del préstamo
    public function addCantRef($cantidadLibros,$numPrestamo)
    {
        die(var_dump($cantidadLibros));
        die(var_dump($numPrestamo));
        $this->db->query("UPDATE `prestamosheader` SET `cantLibros`=$cantidadLibros WHERE `numPrestamo`=$numPrestamo ");
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}