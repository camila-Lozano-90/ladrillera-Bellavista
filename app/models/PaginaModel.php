<?php
//modelo correspondiente a cada controlador
class PaginaModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

}