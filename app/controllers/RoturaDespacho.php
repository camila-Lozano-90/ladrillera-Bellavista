<?php

#[AllowDynamicProperties]
class RoturaDespacho extends Controller
{
    public function __construct()
    {
        ## Configuramos el modelo correspondiente a éste controlador
        $this->RoturaDespachoModel = $this->loadModel('RoturaDespachoModel');
        $this->ReferenciasModel = $this->loadModel('ReferenciasModel');
    }
    ## RENDERIZA AL INICIO ************************************************************************
    public function Index()
    {
        $data = [];
        $this->renderView('CargueDescargue/CargueDescargueInicio', $data);
    }
    ## RENDERIZA A PRODUCTOS ************************************************************************
    public function Add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'responsableDiario' => $_POST['responsableDiario3'],
                'referencia' => $_POST['referencial3'],
                'unidades' => $_POST['unidades'],
                'fecha' => $_POST['fecha3'],
            ];
            //echo var_dump($data);
            $dateNow = date('Y-m-d');
            if ($data['fecha'] > $dateNow) {
                echo json_encode('No es posible agregar despachos de fechas inexistentes');
            } else {
                $unidadesInv = $this->RoturaDespachoModel->unidadesDiaInv($data);
                if($unidadesInv < $data['unidades']){
                    echo json_encode('No hay unidades suficientes en inventario');
                }if($unidadesInv > $data['unidades']){    
                    $unidadesInv = $this->RoturaDespachoModel->unidadesDiaInv($data);
                    $resultado = $this->RoturaDespachoModel->agregar($data);
                    $ultimoInsert = $this->RoturaDespachoModel->getLast($data);
                    $this->RoturaDespachoModel->actualizarDiario($data, $ultimoInsert, $unidadesInv);
                    if ($resultado) {
                        echo json_encode('Se ha agregado segunda en despacho satisfactoriamente');
                    } else {
                        echo json_encode('Error: No es posible actualizar el despacho');
                    }                
                }

            }
        } else {
            $this->renderView('RoturaDespacho/roturaDespachoAdd');
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
