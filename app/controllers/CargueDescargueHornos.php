<?php

#[AllowDynamicProperties]
class CargueDescargueHornos extends Controller
{
    public function __construct()
    {
        ## Configuramos el modelo correspondiente a éste controlador
       $this -> cargueDescargueModel = $this ->loadModel('cargueDescargueModel');
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
            'responsableCargue' => $_POST['responsableCargue'],
            'nave' => $_POST['nave'],
            'quema' => $_POST['quema'],
            'paquete' => $_POST['paquete'],
            'linea' => $_POST['linea'],
            'fechaCargue' => $_POST['fechaCargue'],

            'id' => $_POST['id'],
            'nombre' => $_POST['nombre'],
            'medidas' => $_POST['medidas'],
            'rendimiento' => $_POST['rendimiento'],
            'peso' => $_POST['peso'],
            'referencia' => $_POST['referencia'],
            'cantidad' => $_POST['cantidad'],
            ];
            //echo die(var_dump($data));
            $resultado = $this->cargueDescargueModel->addHeader($data);
            if ($resultado) {
                $numCargue = $this->cargueDescargueModel->getLast();
                $respuesta = $this->cargueDescargueModel->addFooter($data, $numCargue);
            }
            if($respuesta){
                echo json_encode('Se ha registrado el cargue satisfactoriamente');
            } else {
                //die('no funciona !');
                echo json_encode('Error: No es posible crear el cargue.');
            } 
        }else{
            $this->renderView('CargueDescargue/CargueDescargueAdd');
        }  
    }
    
    ## TRAE TODOS LOS CARGUES Y DESCARGUES ************************************************************************
    public function getAll()
    {
        $cargueDescargue = $this -> cargueDescargueModel -> todos();
        echo json_encode($cargueDescargue);
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