<?php
#[AllowDynamicProperties]
class Configuracion extends Controller
{
    public function __construct()
    {
        ## Configuramos el modelo correspondiente a éste controlador
        $this->ConfiguracionModel = $this->loadModel('ConfiguracionModel');
    }    
    public function Index()
    {
        $data = [];
        $this->renderView('Configuracion/configuracionInicio',$data);
    }

    public function cambiarHorarios()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'dia' => $_POST['dia'],
                'horarioAper' => $_POST['horarioAper'],
                'horarioCierre' => $_POST['horarioCierre'],
            ];
            // Consultamos si hay registros con ese día en la bd
            $consultarDia = $this->ConfiguracionModel->getOne($data);
            // si hay un registro con ese día insertamos
            if($consultarDia != ""){
                $resultado = $this->ConfiguracionModel->cambiarHorarios2($data);
                if ($resultado) {
                    echo json_encode('Se ha actualizado el horario satisfactoriamente');
                } else {
                    echo json_encode('Error: No es posible actualizar el horario');
                } 
            }
            // si no hay un registro con ese día modificamos
            elseif ($consultarDia == ""){
                $resultado = $this->ConfiguracionModel->cambiarHorarios($data);
                if ($resultado) {
                    echo json_encode('Se ha actualizado el horario satisfactoriamente');
                } else {
                    echo json_encode('Error: No es posible actualizar el horario');
                }
            }

        } else {
            $this->renderView('Configuracion/cambiarHorarios');
        }
    }

    public function UpdateHorario()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'dia' => $_POST['diaEdit'],
                'horarioAper' => $_POST['horarioAperEdit'],
                'horarioCierre' => $_POST['horarioCierreEdit'],
            ];
            // Consultamos si hay registros con ese día en la bd
            $consultarDia = $this->ConfiguracionModel->getOne($data);
            // si hay un registro con ese día insertamos
            if($consultarDia != ""){
                $resultado = $this->ConfiguracionModel->cambiarHorarios2($data);
                if ($resultado) {
                    echo json_encode('Se ha actualizado el horario satisfactoriamente');
                } else {
                    echo json_encode('Error: No es posible actualizar el horario');
                } 
            }

        } else {
            $this->renderView('Configuracion/cambiarHorarios');
        }
    }

    public function DeleteHorario()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'dia' => $_POST['diaDel']
            ];

            // eliminar registro
            $resultado = $this->ConfiguracionModel->DeleteHorario($data);
            if ($resultado) {
                echo json_encode('Se ha eliminado el día seleccionado');
            } else {
                echo json_encode('Error: No es posible  eliminar el día seleccionado');
            } 

        } else {
            $this->renderView('Configuracion/cambiarHorarios');
        }
    }

    public function subirArchivo()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //Recogemos el archivo enviado por el formulario
            $archivo = $_FILES['archivo']['name'];
            //Si el archivo contiene algo y es diferente de vacio
/*             $resultado = move_uploaded_file($archivo["tmp_name"], $archivo["name"]);
            if ($resultado) {
                echo json_encode("Subido con éxito");
            } else {
                echo json_encode("Error al subir archivo");
            }  */
                //Obtenemos algunos datos necesarios sobre el archivo
                $tipo = $_FILES['archivo']['type'];
                $tamano = $_FILES['archivo']['size'];
                $temp = $_FILES['archivo']['tmp_name'];
                //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
                if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                    echo json_encode('¡Error! La extensión o el tamaño de los archivos no es correcta. Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo');
                } else {
                    //Si la imagen es correcta en tamaño y tipo
                    //Se intenta subir al servidor
                    if (move_uploaded_file($temp, 'images/' . $archivo)) {
                        //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                        chmod('images/' . $archivo, 0777);
                        //Mostramos el mensaje de que se ha subido co éxito
                        echo json_encode('Se ha subido correctamente la imagen');
                    } else {
                        //Si no se ha podido subir la imagen, mostramos un mensaje de error
                        echo json_encode('Ocurrió algún error al subir el fichero. No pudo guardarse');
                    }
                }

        } else {
            $this->renderView('Configuracion/cambiarHorarios');
        }

    }

    public function carpetaFotos()
    {
        $this->renderView('img/iconoConfig/');
    }

    public function horarios()
    {
        $horario = $this -> ConfiguracionModel -> horario();
        echo json_encode($horario);
    }
    public function semana()
    {
        $data = $this -> ConfiguracionModel -> semana();
        echo json_encode($data);
    }
    public function finde()
    {
        $data = $this -> ConfiguracionModel -> finde();
        //$data = trim(json_encode($result->{'horarioApertura'}),'"');
        echo json_encode($data);
    }
    public function cambiarTelefonos()
    {
        $this->renderView('Configuracion/cambiarTelefonos');
    }
    public function telefonos()
    {
        $telefono = $this -> ConfiguracionModel -> telefonos();
        echo json_encode($telefono);
    }
    public function AddTel()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'num' => $_POST['num'],
                'descripcion' => $_POST['descripcion'],
            ];
            // Consultamos si hay registros con ese número en la bd
            $consultarTel = $this->ConfiguracionModel->getOneTel($data);
            // si hay un registro con ese número insertamos
            if($consultarTel != ""){
                $resultado = $this->ConfiguracionModel->cambiarTel2($data);
                if ($resultado) {
                    echo json_encode('Se ha actualizado el número satisfactoriamente');
                } else {
                    echo json_encode('Error: No es posible actualizar el número');
                } 
            }
            // si no hay un registro con ese día modificamos
            elseif ($consultarTel == ""){
                $resultado = $this->ConfiguracionModel->cambiarTel($data);
                if ($resultado) {
                    echo json_encode('Se ha guardado el número satisfactoriamente');
                } else {
                    echo json_encode('Error: No es posible actualizar el número');
                } 
            }

        } else {
            $this->renderView('Configuracion/cambiarHorarios');
        }
    }

    public function UpdateTel()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'num' => $_POST['numEdit'],
                'descripcion' => $_POST['descripcionEdit'],
            ];
            // Consultamos si hay registros con ese día en la bd
            $consultarTel = $this->ConfiguracionModel->getOneTel($data);
            // si hay un registro con ese día insertamos
            if($consultarTel != ""){
                $resultado = $this->ConfiguracionModel->cambiarTel2($data);
                if ($resultado) {
                    echo json_encode('Se ha actualizado el número satisfactoriamente');
                } else {
                    echo json_encode('Error: No es posible actualizar el número');
                } 
            }

        } else {
            $this->renderView('Configuracion/cambiarHorarios');
        }
    }

    public function DeleteTel()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $data = [
                'num' => $_POST['numDel']
            ];

            // eliminar registro
            $resultado = $this->ConfiguracionModel->DeleteTel($data);
            if ($resultado) {
                echo json_encode('Se ha eliminado el número seleccionado');
            } else {
                echo json_encode('Error: No es posible  eliminar el número seleccionado');
            } 

        } else {
            $this->renderView('Configuracion/cambiarHorarios');
        }
    }
    public function tel()
    {
        $data = $this -> ConfiguracionModel -> tel1();
        echo json_encode($data);
    }
}