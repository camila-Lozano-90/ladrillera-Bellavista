<?php

#[AllowDynamicProperties]
class Referencias extends Controller
{
    public function __construct()
    {
        ## Configuramos el modelo correspondiente a éste controlador
        $this -> ReferenciasModel = $this ->loadModel('ReferenciasModel');
    }

    public function Index()
    {
        $data = [];
        $this->renderView('Referencias/Index',$data);
    }

    public function Add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'nombre' => $_POST['nombre'],
                'medidas' => $_POST['medidas'],
                'rendimiento' => $_POST['rendimiento'],
                'peso' => $_POST['peso'],
                'referencia' => $_POST['referencia'],
            ];
            $result = $this->ReferenciasModel->agregar($data);
            if($result){
                echo json_encode('Se ha guardado la nueva referencia satisfactoriamente');
            }if($result == false){
                echo json_encode('¡Ha ocurrido un error en el camino!');
            }

        }else{
            $this->renderView('Referencias/Index');
        }
    }

    public function Update()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'id' => $_POST['idEdit'],
                'nombre' => $_POST['nombreEdit'],
                'medidas' => $_POST['medidasEdit'],
                'rendimiento' => $_POST['rendimientoEdit'],
                'peso' => $_POST['pesoEdit'],
                'referencia' => $_POST['referenciaEdit'],
            ];
            $result = $this->ReferenciasModel->editar($data);
            if($result){
                echo json_encode('Se han guardado los ajustes satisfactoriamente');
            }if($result == false){
                echo json_encode('¡Ha ocurrido un error en el camino!');
            }
        }else{
            $this->renderView('Referencias/Index');
        }
    }

    public function Delete()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'id' => $_POST['idDel'],
            ];
            $result = $this->ReferenciasModel->eliminar($data);
            if($result){
                echo json_encode('Se ha eliminado satisfactoriamente');
            }if($result == false){
                echo json_encode('¡Ha ocurrido un error en el camino!');
            }
        }else{
            $this->renderView('Referencias/Index');
        }
    }

    public function ImprimirListado()
    {
        $data = $this -> LibrosModel -> listarLibros();
        //$data = [];
        $this->renderView('Libros/rptListadoLibros', $data);
    }
    //buscar resgistros por apellido
    public function expoExcel()
    {
        $data = $this -> LibrosModel -> listarLibros();
        $this->renderView('Libros/LibrosExpoExcel', $data);
    }
    public function todos()
    {
        $referencias = $this -> ReferenciasModel -> listarReferencias();
        echo json_encode($referencias);
    }
}

