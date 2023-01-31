<?php
//modelo correspondiente a cada controlador
class DescargueHornosModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }
    public function todos()
    {
        $this->db->query("SELECT * FROM descarguehorno");

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
    {
        $datetime = date('l jS \of F Y h:i:s A');

        ## INICIO CONDICIONES DE INSERCIÓN *************************************************************************
        if ($data['crudos'] == "") {
            $data['crudos'] = "ningún valor";
        }
        if ($data['cantPrimera'] <= 0) {
            $data['cantPrimera'] = 0;
        }
        if ($data['cantSegunda'] <= 0) {
            $data['cantSegunda'] = 0;
        }
        if ($data['roturaHorno'] <= 0) {
            $data['roturaHorno'] = 0;
        }
        if ($data['descargueEstimado'] <= 0) {
            $data['descargueEstimado'] = 0;
        }
        if (
            $data['porcentaje'] <= 0 or $data['totalDescargue'] <= 0 or $data['totalRoturaDia'] <= 0
            or $data['PorcentajeRoturaDia'] <= 0
        ) {
            $data['porcentaje'] = 0;
            $data['totalDescargue'] = 0;
            $data['totalRoturaDia'] = 0;
            $data['PorcentajeRoturaDia'] = 0;
        }
        ## FIN CONDICIONES DE INSERCIÓN *****************************************************************************
        $this->db->query("INSERT INTO descarguehorno(responsableHornos, responsablePatios, referencia, descargueEstimado, diferencia, cantPrimera, cantSegunda, roturaHorno, porcentaje, crudos, totalDescargue, totalRoturaDia, PorcentajeRoturaDia, fecha) 
        VALUES (:responsableHornos,:responsablePatios,:referencia,:descargueEstimado,:diferencia,:cantPrimera,:cantSegunda,:roturaHorno,:porcentaje,:crudos,:totalDescargue,:totalRoturaDia,:PorcentajeRoturaDia,:fecha)");


        $this->db->bind(':responsableHornos', $data['responsableHornos']);
        $this->db->bind(':responsablePatios', $data['responsablePatios']);
        $this->db->bind(':referencia', $data['referencia']);
        $this->db->bind(':descargueEstimado', $data['descargueEstimado']);
        $this->db->bind(':diferencia', $data['diferencia']);
        $this->db->bind(':cantPrimera', $data['cantPrimera']);
        $this->db->bind(':cantSegunda', $data['cantSegunda']);
        $this->db->bind(':roturaHorno', $data['roturaHorno']);
        $this->db->bind(':porcentaje', $data['porcentaje']);
        $this->db->bind(':crudos', $data['crudos']);
        $this->db->bind(':totalDescargue', $data['totalDescargue']);
        $this->db->bind(':totalRoturaDia', $data['totalRoturaDia']);
        $this->db->bind(':PorcentajeRoturaDia', $data['PorcentajeRoturaDia']);
        $this->db->bind(':fecha', $datetime);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function insertarDespachos1($data)
    {   //die("hola uno");
        //$datetime = date('Y-m-d');
        $datetime = date('Y-m-d');
        $this->db->query("INSERT INTO controldiariodespachos(responsableCargue, fechaDiario) 
        VALUES (:responsableHornos,:fecha)");

        $this->db->bind(':responsableHornos', $data['responsableHornos']);
        $this->db->bind(':fecha', $datetime);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    ## BUSCAMOS SI EXISTEN UNIDADES DE CADA REFERENCIA DEL DÍA ANTERIOR ****************************************************************************
/*     public function existenciaDiaAnterior($data)
    {
        $datetime = date('Y-m-d');

        $this->db->query("SELECT controldiariodespachosfooter.primera,controldiariodespachosfooter.segunda,controldiariodespachosfooter.rotura FROM controldiariodespachos
        INNER JOIN controldiariodespachosfooter
        ON controldiariodespachos.idCtrDesp = controldiariodespachosfooter.idcontroldiariodespachos WHERE controldiariodespachos.fechaDiario < :fecha
        AND controldiariodespachosfooter.referencia = :referencia;");

        $this->db->bind(':fecha', $datetime);
        $this->db->bind(':referencia', $data['referencia']);

        $resulset = $this->db->getOne();
        //die(json_encode($resulset));
        //$res = json_encode($resulset);
        //die(var_dump(trim($res,'"')));
        //$res1 = trim($res,'"');
        //die(trim($res1,'"'));
        die(var_dump($resulset));
        return $resulset;
    } */
    ## BUSCAMOS SI EXISTEN UNIDADES DE CADA REFERENCIA DEL DÍA ANTERIOR ****************************************************************************
    public function existenciaDiaAnterior1($data)
    {
        $datetime = date('Y-m-d');

        $this->db->query("SELECT SUM(controldiariodespachosfooter.primera) FROM controldiariodespachos
            INNER JOIN controldiariodespachosfooter
            ON controldiariodespachos.idCtrDesp = controldiariodespachosfooter.idcontroldiariodespachos WHERE controldiariodespachos.fechaDiario < :fecha
            AND controldiariodespachosfooter.referencia = :referencia;");

        $this->db->bind(':fecha', $datetime);
        $this->db->bind(':referencia', $data['referencia']);

        $resulset = $this->db->getOne();
        //die(json_encode($resulset));
        //$res = json_encode($resulset);
        //die(var_dump(trim($res,'"')));
        //$res1 = trim($res,'"');
        //die(trim($res1,'"'));
        //die(var_dump($resulset));
        return $resulset;
    }
    ## BUSCAMOS SI EXISTEN UNIDADES DE CADA REFERENCIA DEL DÍA ANTERIOR ****************************************************************************
    public function existenciaDiaAnterior2($data)
    {
        $datetime = date('Y-m-d');

        $this->db->query("SELECT SUM(controldiariodespachosfooter.segunda) FROM controldiariodespachos
                    INNER JOIN controldiariodespachosfooter
                    ON controldiariodespachos.idCtrDesp = controldiariodespachosfooter.idcontroldiariodespachos WHERE controldiariodespachos.fechaDiario < :fecha
                    AND controldiariodespachosfooter.referencia = :referencia;");

        $this->db->bind(':fecha', $datetime);
        $this->db->bind(':referencia', $data['referencia']);

        $resulset = $this->db->getOne();
        //die(json_encode($resulset));
        //$res = json_encode($resulset);
        //die(var_dump(trim($res,'"')));
        //$res1 = trim($res,'"');
        //die(trim($res1,'"'));
        //die(var_dump($resulset));
        return $resulset;
    }
    ## BUSCAMOS SI EXISTEN UNIDADES DE CADA REFERENCIA DEL DÍA ANTERIOR ****************************************************************************
    public function existenciaDiaAnterior3($data)
    {
        $datetime = date('Y-m-d');

        $this->db->query("SELECT SUM(controldiariodespachosfooter.rotura) FROM controldiariodespachos
            INNER JOIN controldiariodespachosfooter
            ON controldiariodespachos.idCtrDesp = controldiariodespachosfooter.idcontroldiariodespachos WHERE controldiariodespachos.fechaDiario < :fecha
            AND controldiariodespachosfooter.referencia = :referencia;");

        $this->db->bind(':fecha', $datetime);
        $this->db->bind(':referencia', $data['referencia']);

        $resulset = $this->db->getOne();
        //die(json_encode($resulset));
        //$res = json_encode($resulset);
        //die(var_dump(trim($res,'"')));
        //$res1 = trim($res,'"');
        //die(trim($res1,'"'));
        //die(var_dump($resulset));
        return $resulset;
    }
    ## BUSCAMOS SI EXISTEN UNIDADES DE CADA REFERENCIA DEL DÍA PRESENTE ****************************************************************************
    public function existenciaDiaPresente($data)
    {
        $datetime = date('Y-m-d');
        $this->db->query("SELECT controldiariodespachosfooter.primera, controldiariodespachosfooter.segunda, controldiariodespachosfooter.rotura
        FROM controldiariodespachos
        INNER JOIN controldiariodespachosfooter
        ON controldiariodespachos.idCtrDesp = controldiariodespachosfooter.idcontroldiariodespachos WHERE controldiariodespachos.fechaDiario = :fecha
        AND controldiariodespachosfooter.referencia = :referencia;");

        $this->db->bind(':fecha', $datetime);
        $this->db->bind(':referencia', $data['referencia']);
        $resulset = $this->db->getOne();
        //die(var_dump($resulset));
        return $resulset;
    }
    ## BUSCAMOS SI LA FECHA PARA AGREGAR YA EXISTE ****************************************************************************
    public function fecha()
    {
        $datetime = date('Y-m-d');

        $this->db->query("SELECT * FROM controldiariodespachos WHERE fechaDiario = :fecha; ");
        $this->db->bind(':fecha', $datetime);
        $resulset = $this->db->getAll();
        //die(var_dump($resulset));
        if ($resulset) {
            return true;
        } else {
            return false;
        }
    }
    ## INSERTA EN DESPACHOS LO QUE SALE DEL DESCARGUE DEL HORNO ************************************************************************************************
    public function insertarDespachos2($data, $ultimoInsertForaneo,  $existenciaDiaAnterior1, $existenciaDiaAnterior2, $existenciaDiaAnterior3,)
    {   //die(json_encode($existenciaDiaAnterior));
        $unidadesInvPrimera = $existenciaDiaAnterior1->{'SUM(controldiariodespachosfooter.primera)'};
        $unidadesInvSegunda = $existenciaDiaAnterior2->{'SUM(controldiariodespachosfooter.segunda)'};
        $unidadesInvRotura = $existenciaDiaAnterior3->{'SUM(controldiariodespachosfooter.rotura)'};
        ## INICIO CONDICIONES DE INSERCIÓN *************************************************************************
/*         if ($existenciaDiaAnterior->{'primera'} == NULL) {
            $unidadesInvPrimera = 0;
        }
        if ($existenciaDiaAnterior->{'segunda'} == NULL) {
            $unidadesInvSegunda = 0;
        }
        if ($existenciaDiaAnterior->{'rotura'} == NULL) {
            $unidadesInvRotura = 0;
        }
        if ($unidadesInvPrimera == NULL or $unidadesInvSegunda == NULL or $unidadesInvRotura == NULL) {
            $unidadesInvPrimera = intval(0);
            $unidadesInvRotura = intval(0);
            $unidadesInvSegunda = intval(0);
        } */
        //die(var_dump($unidadesInvPrimera."/".$unidadesInvRotura));
        ## SI HAY PRIMERA, SEGUNDA Y ROTURA *********************************************************************************************************
        if ($data['roturaHorno'] != "" && $data['cantPrimera'] != "" && $data['cantSegunda'] != "") {
            //die(var_dump($unidadesInvPrimera."/".$unidadesInvSegunda."/".$unidadesInvRotura));
            $UnidadesActuales = intval($unidadesInvPrimera) + intval($data['cantPrimera']);
            $UnidadesActualesSeg = intval($unidadesInvSegunda) + intval($data['cantSegunda']);
            $UnidadesActualesRot = intval($unidadesInvRotura) + intval($data['roturaHorno']);
            //die(var_dump($data['referencia']."/".$UnidadesActuales."/".$UnidadesActualesSeg."/".$UnidadesActualesRot));
            if ($existenciaDiaAnterior1 != NULL && $existenciaDiaAnterior2 != NULL && $existenciaDiaAnterior3 != NULL) {
                $this->db->query("INSERT INTO controldiariodespachosfooter(referencia, primera, segunda, rotura, idcontroldiariodespachos) 
                VALUES (:referencia,:cantPrimera,:cantSegunda,:roturaHorno,:idCtrDesp); UPDATE controldiariodespachosfooter SET primera=0,segunda=0,rotura=0 WHERE referencia=:referencia AND idcontroldiariodespachos < :idCtrDesp;");

                $this->db->bind(':referencia', $data['referencia']);
                $this->db->bind(':cantPrimera', $UnidadesActuales);
                $this->db->bind(':cantSegunda', $UnidadesActualesSeg);
                $this->db->bind(':roturaHorno', $UnidadesActualesRot);
                $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
                $resulset = $this->db->execute();
                ## RETORNO **********************************************
                if ($resulset) {
                    return true;
                } else {
                    return false;
                }
            }
            if ($existenciaDiaAnterior1 == NULL && $existenciaDiaAnterior2 == NULL && $existenciaDiaAnterior3 == NULL) {
                $this->db->query("INSERT INTO controldiariodespachosfooter(referencia, primera, segunda, rotura, idcontroldiariodespachos) 
                VALUES (:referencia,:cantPrimera,:cantSegunda,:roturaHorno,:idCtrDesp);");

                $this->db->bind(':referencia', $data['referencia']);
                $this->db->bind(':cantPrimera', $UnidadesActuales);
                $this->db->bind(':cantSegunda', $UnidadesActualesSeg);
                $this->db->bind(':roturaHorno', $UnidadesActualesRot);
                $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
                $resulset = $this->db->execute();
                ## RETORNO **********************************************
                if ($resulset) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        ## SI SÓLO HAY PRIMERA *********************************************************************************************************************
        if ($data['cantPrimera'] != "" && $data['cantSegunda'] == "" && $data['roturaHorno'] == "") {
            $UnidadesActuales = $unidadesInvPrimera + intval($data['cantPrimera']);
            //die($unidadesInvPrimera.$data['cantPrimera'].$UnidadesActuales);
            $this->db->query("INSERT INTO controldiariodespachosfooter(referencia,primera,idcontroldiariodespachos) 
            VALUES (:referencia,:unidades,:idCtrDesp);
            UPDATE controldiariodespachosfooter SET primera=0 WHERE referencia=:referencia AND idcontroldiariodespachos < :idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActuales);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY SEGUNDA *********************************************************************************************************************
        if ($data['cantSegunda'] != "" && $data['cantPrimera'] == "" && $data['roturaHorno'] == "") {
            $UnidadesActualesSeg = $unidadesInvSegunda + intval($data['cantSegunda']);

            $this->db->query("INSERT INTO controldiariodespachosfooter(referencia, segunda, idcontroldiariodespachos) 
            VALUES (:referencia,:unidades,:idCtrDesp);
            UPDATE controldiariodespachosfooter SET segunda=0 WHERE referencia=:referencia AND idcontroldiariodespachos < :idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActualesSeg);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY ROTURA *********************************************************************************************************************
        if ($data['roturaHorno'] != "" && $data['cantPrimera'] == "" && $data['cantSegunda'] == "") {
            $UnidadesActualesRot = $unidadesInvRotura + intval($data['roturaHorno']);

            $this->db->query("INSERT INTO controldiariodespachosfooter(referencia, rotura, idcontroldiariodespachos) 
            VALUES (:referencia,:unidades,:idCtrDesp);
            UPDATE controldiariodespachosfooter SET rotura=0 WHERE referencia=:referencia AND idcontroldiariodespachos < :idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActualesRot);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
         ## SI SÓLO HAY PRIMERA Y SEGUNDA *********************************************************************************************************************
         if ($data['roturaHorno'] == "" && $data['cantPrimera'] != "" && $data['cantSegunda'] != "") {
            $UnidadesActuales = $unidadesInvPrimera + intval($data['cantPrimera']);
            $UnidadesActualesSeg = $unidadesInvSegunda + intval($data['cantSegunda']);

            $this->db->query("INSERT INTO controldiariodespachosfooter(referencia, primera, segunda, idcontroldiariodespachos) 
            VALUES (:referencia,:cantPrimera,:cantSegunda,:idCtrDesp)
            UPDATE controldiariodespachosfooter SET rotura=0 WHERE referencia=:referencia AND idcontroldiariodespachos < :idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':cantPrimera', $UnidadesActuales);
            $this->db->bind(':cantSegunda', $UnidadesActualesSeg);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
         ## SI SÓLO HAY PRIMERA Y ROTURA *********************************************************************************************************************
         if ($data['roturaHorno'] != "" && $data['cantPrimera'] != "" && $data['cantSegunda'] == "") {
            $UnidadesActuales = $unidadesInvPrimera + intval($data['cantPrimera']);
            $UnidadesActualesRot = $unidadesInvRotura + intval($data['roturaHorno']);

            $this->db->query("INSERT INTO controldiariodespachosfooter(referencia, primera, rotura, idcontroldiariodespachos) 
            VALUES (:referencia,:cantPrimera,:unidades,:idCtrDesp);
            UPDATE controldiariodespachosfooter SET rotura=0 WHERE referencia=:referencia AND idcontroldiariodespachos < :idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':cantPrimera', $UnidadesActuales);
            $this->db->bind(':unidades', $UnidadesActualesRot);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
    }

    ## INSERTA EN DESPACHOS LO QUE SALE DEL DESCARGUE DEL HORNO SI HAY UNIDADES DE LA REFERENCIA SELECCIONADA DEL PRESENTE DÍA ************************************************************************************************
    public function insertarDespachos4($data, $ultimoInsert, $existenciaDiaAnterior1, $existenciaDiaAnterior2, $existenciaDiaAnterior3)
    {   //die(json_encode($existenciaDiaAnterior));
        $unidadesInvPrimera = $existenciaDiaAnterior1->{'SUM(controldiariodespachosfooter.primera)'};
        $unidadesInvSegunda = $existenciaDiaAnterior2->{'SUM(controldiariodespachosfooter.segunda)'};
        $unidadesInvRotura = $existenciaDiaAnterior3->{'SUM(controldiariodespachosfooter.rotura)'};
        ## INICIO CONDICIONES DE INSERCIÓN *************************************************************************
        //die($existenciaDiaAnterior1->{'SUM(controldiariodespachosfooter.primera)'}."/".$unidadesInvSegunda."/".$unidadesInvRotura);
        ## FIN CONDICIONES DE INSERCIÓN *************************************************************************
        //die($unidadesInvPrimera."/".$unidadesInvSegunda."/".$unidadesInvRotura);
        $UnidadesActuales = intval($unidadesInvPrimera) + intval($data['cantPrimera']);
        $UnidadesActualesSeg = intval($unidadesInvSegunda) + intval($data['cantSegunda']);
        $UnidadesActualesRot = intval($unidadesInvRotura) + intval($data['roturaHorno']);
        //die(var_dump($UnidadesActuales."/".$UnidadesActualesSeg."/".$UnidadesActualesRot));
        ## SI HAY PRIMERA, SEGUNDA Y ROTURA *********************************************************************************************************
        if ($data['roturaHorno'] != "" && $data['cantPrimera'] != "" && $data['cantSegunda'] != "") {

            //die(var_dump($UnidadesActuales."/".$UnidadesActualesSeg."/".$UnidadesActualesRot));
            $this->db->query("INSERT INTO controldiariodespachosfooter(referencia, primera, segunda, rotura, idcontroldiariodespachos) 
            VALUES (:referencia,:cantPrimera,:cantSegunda,:roturaHorno,:idCtrDesp);
            UPDATE controldiariodespachosfooter SET primera=0,segunda=0,rotura=0 WHERE referencia=:referencia AND idcontroldiariodespachos < :idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':cantPrimera', $UnidadesActuales);
            $this->db->bind(':cantSegunda', $UnidadesActualesSeg);
            $this->db->bind(':roturaHorno', $UnidadesActualesRot);
            $this->db->bind(':idCtrDesp', $ultimoInsert);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY PRIMERA *********************************************************************************************************************
        if ($data['cantPrimera'] != "" && $data['cantSegunda'] == "" && $data['roturaHorno'] == "") {
            //die($unidadesInvPrimera.$data['cantPrimera'].$UnidadesActuales);
            $UnidadesActuales = intval($unidadesInvPrimera) + intval($data['cantPrimera']);
            $this->db->query("INSERT INTO controldiariodespachosfooter(referencia,primera,idcontroldiariodespachos) 
            VALUES (:referencia,:unidades,:idCtrDesp);
            UPDATE controldiariodespachosfooter SET primera=0 WHERE referencia=:referencia AND idcontroldiariodespachos < :idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActuales);
            $this->db->bind(':idCtrDesp', $ultimoInsert);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY SEGUNDA *********************************************************************************************************************
        if ($data['cantSegunda'] != "" && $data['cantPrimera'] == "" && $data['roturaHorno'] == "") {
            $UnidadesActualesSeg = intval($unidadesInvSegunda) + intval($data['cantSegunda']);

            $this->db->query("INSERT INTO controldiariodespachosfooter(referencia, segunda, idcontroldiariodespachos) 
            VALUES (:referencia,:unidades,:idCtrDesp); UPDATE controldiariodespachosfooter SET segunda=0 WHERE referencia=:referencia AND idcontroldiariodespachos < :idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActualesSeg);
            $this->db->bind(':idCtrDesp', $ultimoInsert);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY ROTURA *********************************************************************************************************************
        if ($data['roturaHorno'] != "" && $data['cantPrimera'] == "" && $data['cantSegunda'] == "") {
            $UnidadesActualesRot = intval($unidadesInvRotura) + intval($data['roturaHorno']);

            $this->db->query("INSERT INTO controldiariodespachosfooter(referencia, rotura, idcontroldiariodespachos) 
            VALUES (:referencia,:unidades,:idCtrDesp);
            UPDATE controldiariodespachosfooter SET rotura=0 WHERE referencia=:referencia AND idcontroldiariodespachos < :idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActualesRot);
            $this->db->bind(':idCtrDesp', $ultimoInsert);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
    }

    ## ACTUALIZA EN DESPACHOS LO QUE SALE DEL DESCARGUE DEL HORNO ************************************************************************************************
    public function insertarDespachos3($data, $ultimoInsertForaneo)
    {   //die(json_encode($ultimoInsert.$unidadesInvPrimera));
        //die($unidadesInvPrimera."/".$unidadesInvSegunda."/".$unidadesInvRotura);
        $UnidadesActuales = intval($data['cantPrimera']);
        $UnidadesActualesSeg = intval($data['cantSegunda']);
        $UnidadesActualesRot = intval($data['roturaHorno']);
        ## SI HAY PRIMERA, SEGUNDA Y ROTURA *********************************************************************************************************
        if ($data['roturaHorno'] != "" && $data['cantPrimera'] != "" && $data['cantSegunda'] != "") {
            $this->db->query("INSERT INTO controldiariodespachosfooter (referencia,primera,segunda,rotura,idcontroldiariodespachos) 
                VALUES (:referencia,:cantPrimera,:cantSegunda,:roturaHorno,:idCtrDesp);");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':cantPrimera', $UnidadesActuales);
            $this->db->bind(':cantSegunda', $UnidadesActualesSeg);
            $this->db->bind(':roturaHorno', $UnidadesActualesRot);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY PRIMERA *********************************************************************************************************************
        if ($data['cantPrimera'] != "" && $data['cantSegunda'] == "" && $data['roturaHorno'] == "") {
            $UnidadesActuales = intval($data['cantPrimera']);
            //die($unidadesInvPrimera.$data['cantPrimera'].$UnidadesActuales);
            $this->db->query("INSERT INTO controldiariodespachosfooter (referencia,primera,idcontroldiariodespachos) 
                VALUES (:referencia,:unidades,:idCtrDesp);");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActuales);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY SEGUNDA *********************************************************************************************************************
        if ($data['cantSegunda'] != "" && $data['cantPrimera'] == "" && $data['roturaHorno'] == "") {
            //die(var_dump($data['referencia'].$UnidadesActualesSeg.$ultimoInsertForaneo));
            $this->db->query("INSERT INTO controldiariodespachosfooter(referencia, segunda, idcontroldiariodespachos) 
                VALUES (:referencia,:unidades,:idCtrDesp);");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActualesSeg);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY ROTURA *********************************************************************************************************************
        if ($data['roturaHorno'] != "" && $data['cantPrimera'] == "" && $data['cantSegunda'] == "") {
            $this->db->query("INSERT INTO controldiariodespachosfooter (referencia,rotura,idcontroldiariodespachos) 
                VALUES (:referencia,:unidades,:idCtrDesp);");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActualesRot);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
    }

    ## ACTUALIZA EN DESPACHOS LO QUE SALE DEL DESCARGUE DEL HORNO ************************************************************************************************
    public function actualizarDespachos3($data, $ultimoInsert, $existenciaDiaPresente)
    {   //die(json_encode($ultimoInsert.$unidadesInvPrimera));
        $unidadesInvPrimera = json_encode($existenciaDiaPresente->{'primera'});
        $unidadesInvSegunda = json_encode($existenciaDiaPresente->{'segunda'});
        $unidadesInvRotura = json_encode($existenciaDiaPresente->{'rotura'});
        ## INICIO CONDICIONES DE INSERCIÓN *************************************************************************
        if ($existenciaDiaPresente->{'primera'} == NULL) {
            $unidadesInvPrimera = 0;
        }
        if ($existenciaDiaPresente->{'segunda'} == NULL) {
            $unidadesInvSegunda = 0;
        }
        if ($existenciaDiaPresente->{'rotura'} == NULL) {
            $unidadesInvRotura = 0;
        }
        if ($unidadesInvPrimera == NULL or $unidadesInvSegunda == NULL or $unidadesInvRotura == NULL) {
            $unidadesInvPrimera = intval(0);
            $unidadesInvRotura = intval(0);
            $unidadesInvSegunda = intval(0);
        }

        $UnidadesActuales = $unidadesInvPrimera + intval($data['cantPrimera']);
        $UnidadesActualesSeg = $unidadesInvSegunda + intval($data['cantSegunda']);
        $UnidadesActualesRot = $unidadesInvRotura + intval($data['roturaHorno']);
        ## SI HAY PRIMERA, SEGUNDA Y ROTURA *********************************************************************************************************
        if ($data['roturaHorno'] != "" && $data['cantPrimera'] != "" && $data['cantSegunda'] != "") {
            $this->db->query("UPDATE controldiariodespachosfooter SET primera=:cantPrimera,segunda=:cantSegunda,rotura=:roturaHorno 
                WHERE referencia=:referencia AND idcontroldiariodespachos=:idCtrDesp");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':cantPrimera', $UnidadesActuales);
            $this->db->bind(':cantSegunda', $UnidadesActualesSeg);
            $this->db->bind(':roturaHorno', $UnidadesActualesRot);
            $this->db->bind(':idCtrDesp', $ultimoInsert);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY PRIMERA *********************************************************************************************************************
        if ($data['cantPrimera'] != "" && $data['cantSegunda'] == "" && $data['roturaHorno'] == "") {
            //die($unidadesInvPrimera.$data['cantPrimera'].$UnidadesActuales);
            $this->db->query("UPDATE controldiariodespachosfooter SET primera=:unidades 
                WHERE referencia=:referencia AND idCrtlDespFoot=:idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActuales);
            $this->db->bind(':idCtrDesp', $ultimoInsert);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY SEGUNDA *********************************************************************************************************************
        if ($data['cantSegunda'] != "" && $data['cantPrimera'] == "" && $data['roturaHorno'] == "") {
            $this->db->query("UPDATE controldiariodespachosfooter SET segunda=:unidades
                WHERE referencia=:referencia AND idcontroldiariodespachos=:idCtrDesp");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActualesSeg);
            $this->db->bind(':idCtrDesp', $ultimoInsert);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY ROTURA *********************************************************************************************************************
        if ($data['roturaHorno'] != "" && $data['cantPrimera'] == "" && $data['cantSegunda'] == "") {
            $this->db->query("UPDATE controldiariodespachosfooter SET rotura=:unidades 
                WHERE referencia=:referencia AND idcontroldiariodespachos=:idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActualesRot);
            $this->db->bind(':idCtrDesp', $ultimoInsert);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
    }

    ## ACTUALIZA EN DESPACHOS LO QUE SALE DEL DESCARGUE DEL HORNO ************************************************************************************************
    public function actualizarDespachos4($data, $ultimoInsertForaneo, $existenciaDiaAnterior1, $existenciaDiaAnterior2, $existenciaDiaAnterior3, $existenciaDiaPresente)
    {   //die(var_dump($ultimoInsert."/".$existenciaDiaPresente."/".$existenciaDiaAnterior));
        //die(json_encode($existenciaDiaAnterior));
        if($existenciaDiaAnterior1->{'SUM(controldiariodespachosfooter.primera)'} != NULL){
            $unidadesInvPrimera = $existenciaDiaAnterior1->{'SUM(controldiariodespachosfooter.primera)'};
            $unidadesInvSegunda = $existenciaDiaAnterior2->{'SUM(controldiariodespachosfooter.segunda)'};
            $unidadesInvRotura = $existenciaDiaAnterior3->{'SUM(controldiariodespachosfooter.rotura)'};
        }else{
        ## INICIO CONDICIONES DE INSERCIÓN *************************************************************************
        if ($existenciaDiaAnterior1->{'SUM(controldiariodespachosfooter.primera)'} == NULL) {
            $unidadesInvPrimera = 0;
        }if($existenciaDiaAnterior1->{'SUM(controldiariodespachosfooter.primera)'} != NULL){$unidadesInvPrimera = $existenciaDiaAnterior1->{'SUM(controldiariodespachosfooter.primera)'};}
        if ($existenciaDiaAnterior2->{'SUM(controldiariodespachosfooter.segunda)'} == NULL) {
            $unidadesInvSegunda = 0;
        }if($existenciaDiaAnterior2->{'SUM(controldiariodespachosfooter.segunda)'} != NULL){$unidadesInvSegunda = $existenciaDiaAnterior2->{'SUM(controldiariodespachosfooter.segunda)'};}
        if ($existenciaDiaAnterior3->{'SUM(controldiariodespachosfooter.rotura)'} == NULL) {
            $unidadesInvRotura = 0;
        }if($existenciaDiaAnterior3->{'SUM(controldiariodespachosfooter.rotura)'} != NULL){$unidadesInvRotura = $existenciaDiaAnterior3->{'SUM(controldiariodespachosfooter.rotura)'};}
        if ($unidadesInvPrimera == NULL or $unidadesInvSegunda == NULL or $unidadesInvRotura == NULL) {
            $unidadesInvPrimera = intval(0);
            $unidadesInvRotura = intval(0);
            $unidadesInvSegunda = intval(0);
        } }
        ## FIN CONDICIONES DE INSERCIÓN DÍA ANTERIOR *************************************************************************
        if($existenciaDiaPresente != NULL){
        $unidadesInvPrimera1 = json_encode($existenciaDiaPresente->{'primera'});
        $unidadesInvSegunda1 = json_encode($existenciaDiaPresente->{'segunda'});
        $unidadesInvRotura1 = json_encode($existenciaDiaPresente->{'rotura'});
        }else{
        ## INICIO CONDICIONES DE INSERCIÓN DÍA PRESENTE *************************************************************************
        if ($existenciaDiaPresente->{'primera'} == NULL) {
            $unidadesInvPrimera1 = 0;
        }if($existenciaDiaPresente->{'primera'} != NULL){$unidadesInvPrimera1 = json_encode($existenciaDiaPresente->{'primera'});}
        if ($existenciaDiaPresente->{'segunda'} == NULL) {
            $unidadesInvSegunda1 = 0;
        }if($existenciaDiaPresente->{'segunda'} != NULL){$unidadesInvSegunda1 = json_encode($existenciaDiaPresente->{'segunda'});}
        if ($existenciaDiaPresente->{'rotura'} == NULL) {
            $unidadesInvRotura1 = 0;
        }if($existenciaDiaPresente->{'rotura'} != NULL){$unidadesInvRotura1 = json_encode($existenciaDiaPresente->{'rotura'});}
        if ($unidadesInvPrimera1 == NULL or $unidadesInvSegunda1 == NULL or $unidadesInvRotura1 == NULL) {
            $unidadesInvPrimera1 = intval(0);
            $unidadesInvRotura1 = intval(0);
            $unidadesInvSegunda1 = intval(0);
        }}
        //die(var_dump($ultimoInsertForaneo."/".$unidadesInvPrimera."/".$unidadesInvRotura));
        //die(var_dump($unidadesInvPrimera."/".$unidadesInvRotura));
        ## SI HAY PRIMERA, SEGUNDA Y ROTURA *********************************************************************************************************
        if ($data['roturaHorno'] != "" && $data['cantPrimera'] != "" && $data['cantSegunda'] != "") {
            $UnidadesActuales = $unidadesInvPrimera + $unidadesInvPrimera1 + intval($data['cantPrimera']);
            $UnidadesActualesSeg = $unidadesInvSegunda + $unidadesInvSegunda1 + intval($data['cantSegunda']);
            $UnidadesActualesRot = $unidadesInvRotura + $unidadesInvRotura1 + intval($data['roturaHorno']);
            $this->db->query("UPDATE controldiariodespachosfooter SET primera=:cantPrimera,segunda=:cantSegunda,rotura=:roturaHorno 
            WHERE referencia=:referencia AND idcontroldiariodespachos=:idCtrDesp;UPDATE controldiariodespachosfooter SET primera=0,segunda=0,rotura=0 
            WHERE referencia=:referencia AND idcontroldiariodespachos<:idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':cantPrimera', $UnidadesActuales);
            $this->db->bind(':cantSegunda', $UnidadesActualesSeg);
            $this->db->bind(':roturaHorno', $UnidadesActualesRot);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY PRIMERA *********************************************************************************************************************
        if ($data['cantPrimera'] != "" && $data['cantSegunda'] == "" && $data['roturaHorno'] == "") {
            $UnidadesActuales = intval($unidadesInvPrimera) + intval($unidadesInvPrimera1) + intval($data['cantPrimera']);
            //die($unidadesInvPrimera.$data['cantPrimera'].$UnidadesActuales);
            $this->db->query("UPDATE controldiariodespachosfooter SET primera=:unidades 
            WHERE referencia=:referencia AND idCrtlDespFoot=:idCtrDesp;UPDATE controldiariodespachosfooter SET primera=0 
            WHERE referencia=:referencia AND idCrtlDespFoot<:idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActuales);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY SEGUNDA *********************************************************************************************************************
        if ($data['cantSegunda'] != "" && $data['cantPrimera'] == "" && $data['roturaHorno'] == "") {
            //die(var_dump($unidadesInvSegunda."/".$unidadesInvSegunda1));
            $UnidadesActualesSeg = intval($unidadesInvSegunda) + intval($unidadesInvSegunda1) + intval($data['cantSegunda']);
            $this->db->query("UPDATE controldiariodespachosfooter SET segunda=:unidades
            WHERE referencia=:referencia AND idcontroldiariodespachos=:idCtrDesp;UPDATE controldiariodespachosfooter SET segunda=0
            WHERE referencia=:referencia AND idcontroldiariodespachos<:idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActualesSeg);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI SÓLO HAY ROTURA *********************************************************************************************************************
        if ($data['roturaHorno'] != "" && $data['cantPrimera'] == "" && $data['cantSegunda'] == "") {
            $UnidadesActualesRot = intval($unidadesInvRotura) + intval($unidadesInvRotura1) + intval($data['roturaHorno']);
            $this->db->query("UPDATE controldiariodespachosfooter SET rotura=:unidades 
            WHERE referencia=:referencia AND idcontroldiariodespachos=:idCtrDesp;UPDATE controldiariodespachosfooter SET rotura=0 
            WHERE referencia=:referencia AND idcontroldiariodespachos<:idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':unidades', $UnidadesActualesRot);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI HAY PRIMERA Y ROTURA *********************************************************************************************************
        if ($data['roturaHorno'] != "" && $data['cantPrimera'] != "" && $data['cantSegunda'] == "") {
            $UnidadesActuales = intval($unidadesInvPrimera) + intval($unidadesInvPrimera1) + intval($data['cantPrimera']);
            $UnidadesActualesRot = intval($unidadesInvRotura) + intval($unidadesInvRotura1) + intval($data['roturaHorno']);
            //die(var_dump($UnidadesActuales."/".$UnidadesActualesRot."/".$ultimoInsertForaneo));
            $this->db->query("UPDATE controldiariodespachosfooter SET primera=:cantPrimera,rotura=:roturaHorno 
            WHERE referencia=:referencia AND idcontroldiariodespachos=:idCtrDesp;
            UPDATE controldiariodespachosfooter SET primera=0,rotura=0 WHERE referencia=:referencia AND idcontroldiariodespachos < :idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':cantPrimera', $UnidadesActuales);
            $this->db->bind(':roturaHorno', $UnidadesActualesRot);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI HAY PRIMERA Y SEGUNDA *********************************************************************************************************
        if ($data['roturaHorno'] == "" && $data['cantPrimera'] != "" && $data['cantSegunda'] != "") {
            $UnidadesActuales = intval($unidadesInvPrimera) + intval($unidadesInvPrimera1) + intval($data['cantPrimera']);
            $UnidadesActualesSeg = intval($unidadesInvSegunda) + intval($unidadesInvSegunda1) + intval($data['cantSegunda']);
            $this->db->query("UPDATE controldiariodespachosfooter SET primera=:cantPrimera,segunda=:cantSegunda 
            WHERE referencia=:referencia AND idcontroldiariodespachos=:idCtrDesp;UPDATE controldiariodespachosfooter SET primera=0,segunda=0 
            WHERE referencia=:referencia AND idcontroldiariodespachos<:idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':cantPrimera', $UnidadesActuales);
            $this->db->bind(':cantSegunda', $UnidadesActualesSeg);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
        ## SI HAY SEGUNDA Y ROTURA *********************************************************************************************************
        if ($data['roturaHorno'] != "" && $data['cantPrimera'] == "" && $data['cantSegunda'] != "") {
            $UnidadesActualesSeg = intval($unidadesInvSegunda) + intval($unidadesInvSegunda1) + intval($data['cantSegunda']);
            $UnidadesActualesRot = intval($unidadesInvRotura) + intval($unidadesInvRotura1) + intval($data['roturaHorno']);
            $this->db->query("UPDATE controldiariodespachosfooter SET rotura=:cantRotura,segunda=:cantSegunda 
            WHERE referencia=:referencia AND idcontroldiariodespachos=:idCtrDesp;UPDATE controldiariodespachosfooter SET rotura=0,segunda=0 
            WHERE referencia=:referencia AND idcontroldiariodespachos<:idCtrDesp;");

            $this->db->bind(':referencia', $data['referencia']);
            $this->db->bind(':cantRotura', $UnidadesActualesRot);
            $this->db->bind(':cantSegunda', $UnidadesActualesSeg);
            $this->db->bind(':idCtrDesp', $ultimoInsertForaneo);
            $resulset = $this->db->execute();
            ## RETORNO **********************************************
            if ($resulset) {
                return true;
            } else {
                return false;
            }
        }
    }

    # Obtener el id del último registrado *********************************************************************
    public function getLast()
    {
        $ultimo = $this->db->lastInsertId();
        return $ultimo;
        //die(var_dump($ultimo));
    }
    # Obtener el id del último registrado de control despachos footer*********************************************************************
    public function getLastFoot()
    {
        $this->db->query("SELECT MAX(idCrtlDespFoot) FROM controldiariodespachosfooter;");
        $resulset = $this->db->getOne();
        $res = json_encode($resulset->{'MAX(idCrtlDespFoot)'});
        $res1 = trim($res, '"');
        ## RETORNO **********************************************
        return $res1;
    }
    # Obtener el id del último registrado de control despachos footer*********************************************************************
    public function getLastFootHeader()
    {
        $this->db->query("SELECT MAX(idcontroldiariodespachos) FROM controldiariodespachosfooter;");
        $resulset = $this->db->getOne();
        $res = json_encode($resulset->{'MAX(idcontroldiariodespachos)'});
        $res1 = trim($res, '"');
        ## RETORNO **********************************************
        return $res1;
    }

    public function getCantRef($numCargue)
    {
        $cantidadReferencias = $this->db->query("SELECT COUNT(idCargueHeader) FROM carguedescarguehornofooter WHERE idCargueHeader = $numCargue");
        return $cantidadReferencias;
    }
}
