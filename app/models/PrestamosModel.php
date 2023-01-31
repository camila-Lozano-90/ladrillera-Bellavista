<?php
//modelo correspondiente a cada controlador
class PrestamosModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }
    public function todos()
    {   
        $this->db->query("SELECT prestamosheader.nomPrestador, prestamosheader.nomUsuario, prestamosheader.fechaSalidaPrestamo, prestamosheader.fechaDevolucionPrestamo, prestamosheader.fechaMaxDevPrestamo, prestamosheader.cantLibros,

        prestamosfooter.codLibro, prestamosfooter.nomLibro, prestamosfooter.idEditorial, prestamosfooter.numPagLibro, prestamosfooter.generoLibro,
        prestamosfooter.autorLibro, prestamosfooter.numPrestamo
        
        FROM prestamosheader INNER JOIN prestamosfooter ON prestamosheader.numPrestamo = prestamosfooter.numPrestamo;");

        $resultSet = $this->db->getAll();
        return $resultSet;
        //var_dump($resulset);
    }
    public function prestador()
    {   
        $this->db->query("SELECT nomPrestador FROM prestador");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }
    public function listarLibros()
    {   
        $this->db->query("SELECT * FROM libros");
        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    public function addHeader($data)
    {   
        $this->db->query("INSERT INTO `prestamosheader`(`nomPrestador`, `nomUsuario`, `fechaSalidaPrestamo`, `fechaDevolucionPrestamo`, `fechaMaxDevPrestamo`, `cantLibros`) 
        VALUES (:nomPrestador,:nomUsuario,:fechaSal,:fechaEntrega,:fechaMax,1)");

        $this->db->bind(':nomPrestador', $data['nomPrestador']);
        $this->db->bind(':nomUsuario', $data['nomUsuario']);
        $this->db->bind(':fechaSal', $data['fechaSal']);
        $this->db->bind(':fechaEntrega', $data['fechaEntrega']);
        $this->db->bind(':fechaMax', $data['fechaMax']);
        
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
    }
/*     public function getLast(){
        $this->db->query("SELECT MAX(numPrestamo) AS numPrestamo FROM prestamosheader;");
        $resultSet = $this->db->getOne();
        return $resultSet;
    } */

    # Para obtener la cantidad de libros prestados según el número del préstamo guaradado en el header
    public function cantLibros($numPrestamo)
    {
        $cantLibros = $this->db->query("SELECT COUNT(numPrestamo) FROM prestamosfooter WHERE numPrestamo = $numPrestamo");
        return $cantLibros;
    }

    public function addFooter($data, $numPrestamo)
    {
       // die(var_dump($data));
       // die(var_dump($numPrestamo));        
        $numeroFilas = 0;
       //  die(var_dump(count($data['codLibro']))); 
        #$idPrestamoFooter = null;
        while ($numeroFilas < count($data['codLibro'])) {
            $this->db->query("INSERT INTO prestamosfooter(codLibro, nomLibro, idEditorial, numPagLibro, generoLibro, autorLibro, numPrestamo) VALUES 
            (:codLibro,:nomLibro,:idEditorial,:numPagLibro,:generoLibro,:autorLibro,:numPrestamo)");
            
            $this->db->bind(':codLibro', $data['codLibro'][$numeroFilas]);
            $this->db->bind(':nomLibro', $data['nomLibro'][$numeroFilas]);
            $this->db->bind(':idEditorial', $data['idEditorial'][$numeroFilas]);
            $this->db->bind(':numPagLibro', $data['numPagLibro'][$numeroFilas]);
            $this->db->bind(':generoLibro', $data['generoLibro'][$numeroFilas]);
            $this->db->bind(':autorLibro', $data['autorLibro'][$numeroFilas]);
            $this->db->bind(':numPrestamo',$numPrestamo);
            #$this->db->bind(':idPrestamoFooter',$idPrestamoFooter[$numeroFilas]);
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
    public function addCantLibros($cantidadLibros,$numPrestamo)
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