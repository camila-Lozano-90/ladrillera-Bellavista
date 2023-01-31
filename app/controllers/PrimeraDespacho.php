<?php

#[AllowDynamicProperties]
class PrimeraDespacho extends Controller
{
    public function __construct()
    {
        ## Configuramos el modelo correspondiente a éste controlador
        $this->PrimeraDespachoModel = $this->loadModel('PrimeraDespachoModel');
        $this->ReferenciasModel = $this->loadModel('ReferenciasModel');
        $this -> DiarioInventarioModel = $this ->loadModel('DiarioInventarioModel');
    }
    ## RENDERIZA AL INICIO ************************************************************************
    public function Index()
    {
        $data = [];
        $this->renderView('CargueDescargue/CargueDescargueInicio', $data);
    }
    ## ACTUALIZA DESPACHOS ************************************************************************
    public function Add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'responsableDiario' => $_POST['responsableDiario'],
                'referencia' => $_POST['referencial'],
                'unidades' => $_POST['unidades'],
                'fecha' => $_POST['fecha1'],
            ];
            //echo var_dump($data);
            $dateNow = date('Y-m-d');
            if ($data['fecha'] > $dateNow) {
                echo json_encode('No es posible agregar despachos de fechas inexistentes');
            } else {
                $unidadesInv = $this->PrimeraDespachoModel->unidadesDiaInv($data);
                
                if($unidadesInv < $data['unidades'] or $unidadesInv == 'null'){
                    echo json_encode('No hay unidades suficientes en inventario');
                }elseif($unidadesInv > $data['unidades']){    
                    $unidadesInv = $this->PrimeraDespachoModel->unidadesDiaInv($data);
                    $resultado = $this->PrimeraDespachoModel->agregar($data);
                    $ultimoInsert = $this->PrimeraDespachoModel->getLast($data);
                    $this->PrimeraDespachoModel->actualizarDiario($data, $ultimoInsert, $unidadesInv);
                    if ($resultado) {
                        echo json_encode('Se ha agregado primera en despacho satisfactoriamente');
                    } else {
                        echo json_encode('Error: No es posible actualizar el despacho');
                    }                
                }

            }

        } else {
            $this->renderView('primeraDespacho/primeraDespachoAdd');
        }
    }

    ## TRAE TODOS LOS CARGUES Y DESCARGUES ************************************************************************
    public function getAll()
    {
        $DiarioInventario = $this->DiarioInventarioModel->todos();
        echo json_encode($DiarioInventario);
    }
    ## TRAE TODOS LOS NOMBRES DE LOS OPERARIOS ************************************************************************
    public function operarios()
    {
        $operarios = $this->cargueDescargueModel->operarios();
        echo json_encode($operarios);
    }
    ##endregion
    public function operariosNuevos()
    {
        $this->renderView('PersonalCargueHorno/registro');
    }
    public function expoExcel()
    {
        $data = $this->cargueDescargueModel->todos();
        $this->renderView('CargueDescargue/CargueDescargueExpoExcel', $data);
    }
}
