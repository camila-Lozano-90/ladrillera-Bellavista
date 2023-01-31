<?php

#[AllowDynamicProperties]
class DiarioInventario extends Controller
{
    public function __construct()
    {
        ## Configuramos el modelo correspondiente a éste controlador
       $this -> DiarioInventarioModel = $this ->loadModel('DiarioInventarioModel');
       $this -> ReferenciasModel = $this ->loadModel('ReferenciasModel');
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
                'responsableDiario' => $_POST['responsableDiario']
            ];
            //echo die(var_dump($data));
            if($this->DiarioInventarioModel->agregarResp($data))
            {
                $this->renderView('primeraDespacho/primeraDespachoAdd',$data); 
                $this->renderView('segundaDespacho/segundaDespachoAdd',$data); 
                $this->renderView('RoturaDespacho/roturaDespachoAdd',$data); 
            }
        }else{
            $this->renderView('DiarioInventario/DiarioInventarioAdd');
        }  
    }
    public function Addw()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data =[
            'responsableDiario' => $_POST['responsableDiario'],
            'cd' => $_POST['cd'],
            'referencia' => $_POST['referencial'],
            'fechaDia' => $_POST['fechaDia'],
            'primera' => $_POST['primera'],
            'segunda' => $_POST['segunda'],
            ];
            //echo die(var_dump($data));
            $resultado = $this->DiarioInventarioModel->agregar($data);
            if($resultado){
                echo json_encode('Se ha actualizado el diario satisfactoriamente');
            } else {
                //die('no funciona !');
                echo json_encode('Error: No es posible actualizar el diario.');
            } 
        }else{
            $this->renderView('DiarioInventario/DiarioInventarioAdd');
        }  
    }
    
    ## TRAE TODOS LOS CARGUES Y DESCARGUES ************************************************************************
    public function getAll()
    {
        $DiarioInventario = $this -> DiarioInventarioModel -> todos();
        echo json_encode($DiarioInventario);
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
        $data = $this -> cargueDescargueModel -> todos();
        $this->renderView('CargueDescargue/CargueDescargueExpoExcel', $data);
    }
}