<?php

#[AllowDynamicProperties]
class DescargueHornos extends Controller
{
    public function __construct()
    {
        ## Configuramos el modelo correspondiente a éste controlador
        $this ->DescargueHornosModel = $this ->loadModel('DescargueHornosModel');
        $this ->ReferenciasModel = $this ->loadModel('ReferenciasModel');
        $this ->PrimeraDespachoModel = $this ->loadModel('PrimeraDespachoModel');
    }
    ## RENDERIZA AL INICIO ************************************************************************
    public function Index()
    {
        $data = [];
        $this->renderView('CargueDescargue/CargueDescargueInicio',$data);
    }
    ## RENDERIZA A PRODUCTOS ************************************************************************
    public function Add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data =[
            'id' => $_POST['idr'],
            'responsableHornos' => $_POST['responsableHornos'],
            'responsablePatios' => $_POST['responsablePatios'],
            'referencia' => $_POST['referencial'],
            'descargueEstimado' => $_POST['descargueEstimado'],
            'diferencia' => $_POST['diferencia'],
            'cantPrimera' => $_POST['cantPrimera'],
            'cantSegunda' => $_POST['cantSegunda'],
            'roturaHorno' => $_POST['roturaHorno'],
            'porcentaje' => $_POST['porcentaje'],
            'crudos' => $_POST['crudos'],
            'totalDescargue' => $_POST['totalDescargue'],
            'totalRoturaDia' => $_POST['totalRoturaDia'],
            'PorcentajeRoturaDia' => $_POST['PorcentajeRoturaDia'],
            ];
            //die(var_dump($data));
            ##  PRIMERO HAY QUE VERIFICAR SI YA EXISTE UNA INSERCIÓN DEL DÍA ACTUAL ******************************************
            if($this->DescargueHornosModel->fecha())
            {
                // SE OBTIENE LA CANTIDAD DE UNIDADES DE PRIMERA ACTUALES **************************************************************
                $existenciaDiaAnterior1 = $this->DescargueHornosModel->existenciaDiaAnterior1($data);
                $existenciaDiaAnterior2 = $this->DescargueHornosModel->existenciaDiaAnterior2($data);
                $existenciaDiaAnterior3 = $this->DescargueHornosModel->existenciaDiaAnterior3($data);
                $existenciaDiaPresente = $this->DescargueHornosModel->existenciaDiaPresente($data);
                // SE GUARDA EL REGISTRO EN LA TABLA DE DESCARGUE **************************************************************
                $this->DescargueHornosModel->agregar($data);
                // SE OBTIENE EL NÚMERO DE LA CABECERA DE DESPACHOS AGREGADA **************************************************************
                $ultimoInsert = $this->DescargueHornosModel->getLastFoot();
                $ultimoInsertForaneo = $this->DescargueHornosModel->getLastFootHeader();
                // SE ACTUALIZA EL DIARIO DE DESPACHOS CON LOS DATOS OBTENIDOS **************************************************************
                if($existenciaDiaPresente){
                    if($existenciaDiaAnterior1 && $existenciaDiaAnterior2 && $existenciaDiaAnterior3){$actualizarDespachos2 = $this->DescargueHornosModel->actualizarDespachos4($data,$ultimoInsertForaneo,$existenciaDiaAnterior1, $existenciaDiaAnterior2, $existenciaDiaAnterior3,$existenciaDiaPresente);}
                    else{$actualizarDespachos2 = $this->DescargueHornosModel->actualizarDespachos3($data,$ultimoInsert,$existenciaDiaPresente);}
                }if($existenciaDiaPresente == false){
                    if($existenciaDiaAnterior1 && $existenciaDiaAnterior2 && $existenciaDiaAnterior3){
                        $actualizarDespachos2 = $this->DescargueHornosModel->insertarDespachos2($data,$ultimoInsertForaneo,$existenciaDiaAnterior1, $existenciaDiaAnterior2, $existenciaDiaAnterior3);
                    }else{$actualizarDespachos2 = $this->DescargueHornosModel->insertarDespachos3($data,$ultimoInsertForaneo);}
                }

                if($actualizarDespachos2){
                    echo json_encode('Se ha actualizado el diario satisfactoriamente');
                } else {
                    echo json_encode('Error: No es posible actualizar el diario.');
                }
            }if($this->DescargueHornosModel->fecha() == false)
            {
                // SE OBTIENE LA CANTIDAD DE UNIDADES DE PRIMERA ACTUALES **************************************************************
                $existenciaDiaAnterior1 = $this->DescargueHornosModel->existenciaDiaAnterior1($data);
                $existenciaDiaAnterior2 = $this->DescargueHornosModel->existenciaDiaAnterior2($data);
                $existenciaDiaAnterior3 = $this->DescargueHornosModel->existenciaDiaAnterior3($data);

                $existenciaDiaPresente = $this->DescargueHornosModel->existenciaDiaPresente($data);
                // SE GUARDA EL REGISTRO EN LA TABLA DE DESCARGUE **************************************************************
                $this->DescargueHornosModel->agregar($data);
                // SE AGREGA UN NUEVO DESPACHO DE LA FECHA ACTUAL **************************************************************
                $this->DescargueHornosModel->insertarDespachos1($data);
                // SE OBTIENE EL NÚMERO DE LA CABECERA DE DESPACHOS AGREGADA **************************************************************
                $ultimoInsert = $this->DescargueHornosModel->getLast();
                // SE AGREGA UN NUEVO DESPACHO CON LOS DATOS OBTENIDOS **************************************************************
                if($existenciaDiaPresente){
                    if($existenciaDiaAnterior1 && $existenciaDiaAnterior2 && $existenciaDiaAnterior3){$INSERTARDespachos2 = $this->DescargueHornosModel->insertarDespachos2($data,$ultimoInsert,$existenciaDiaAnterior1, $existenciaDiaAnterior2, $existenciaDiaAnterior3,$existenciaDiaPresente);}
                    else{$INSERTARDespachos2 = $this->DescargueHornosModel->insertarDespachos2($data,$ultimoInsert,$existenciaDiaPresente);}
                }if($existenciaDiaPresente == false){
                    if($existenciaDiaAnterior1 && $existenciaDiaAnterior2 && $existenciaDiaAnterior3){$INSERTARDespachos2 = $this->DescargueHornosModel->insertarDespachos4($data,$ultimoInsert,$existenciaDiaAnterior1,$existenciaDiaAnterior2,$existenciaDiaAnterior3);}
                    else{$INSERTARDespachos2 = $this->DescargueHornosModel->insertarDespachos2($data,$ultimoInsert);}
                }
                
                if($INSERTARDespachos2){
                    echo json_encode('Se ha guardado el diario satisfactoriamente');
                } else {
                    echo json_encode('Error: No es posible guardar el diario.');
                }
            }
 
        }else{
            $this->renderView('DescargueHorno/DescargueHornoAdd');
        }  
    }
    
    ## TRAE TODOS LOS CARGUES Y DESCARGUES ************************************************************************
    public function getAll()
    {
        $DescargueHornos = $this -> DescargueHornosModel -> todos();
        echo json_encode($DescargueHornos);
    }
    ## TRAE TODOS LOS NOMBRES DE LOS OPERARIOS ************************************************************************
    public function operarios()
    {
        $operarios = $this -> cargueDescargueModel -> operarios();
        echo json_encode($operarios);
    }
    ##endregion
    public function operariosNuevos()
    {
        $this->renderView('PersonalCargueHorno/registro');
    }
    public function expoExcel()
    {
        $data = $this -> DescargueHornosModel -> todos();
        $this->renderView('DescargueHorno/descargueExpoExcel', $data);
    }
}