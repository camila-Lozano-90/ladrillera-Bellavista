<?php

#[AllowDynamicProperties]
class SegundaDespacho extends Controller
{
    public function __construct()
    {
        ## Configuramos el modelo correspondiente a éste controlador
        $this->SegundaDespachoModel = $this->loadModel('SegundaDespachoModel');
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
                'responsableDiario' => $_POST['responsableDiario2'],
                'referencia' => $_POST['referencial2'],
                'unidades' => $_POST['unidades'],
                'fecha' => $_POST['fecha2'],
            ];
            //echo var_dump($data);
            $dateNow = date('Y-m-d');
            if ($data['fecha'] > $dateNow) {
                echo json_encode('No es posible agregar despachos de fechas inexistentes');
            } else {
                $unidadesInv = $this->SegundaDespachoModel->unidadesDiaInv($data);
                if($unidadesInv < $data['unidades']){
                    echo json_encode('No hay unidades suficientes en inventario');
                }if($unidadesInv > $data['unidades']){    
                    $unidadesInv = $this->SegundaDespachoModel->unidadesDiaInv($data);
                    $resultado = $this->SegundaDespachoModel->agregar($data);
                    $ultimoInsert = $this->SegundaDespachoModel->getLast($data);
                    $this->SegundaDespachoModel->actualizarDiario($data, $ultimoInsert, $unidadesInv);
                    if ($resultado) {
                        echo json_encode('Se ha agregado segunda en despacho satisfactoriamente');
                    } else {
                        echo json_encode('Error: No es posible actualizar el despacho');
                    }                
                }

            }

        } else {
            $this->renderView('segundaDespacho/segundaDespachoAdd');
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
    public function todasRef()
    {
        $referencias = $this -> SegundaDespachoModel -> listarReferencias();
        echo json_encode($referencias);
    }
}
