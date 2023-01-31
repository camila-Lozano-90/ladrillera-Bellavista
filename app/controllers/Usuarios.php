<?php
#[AllowDynamicProperties]
Class Usuarios extends Controller
{
    public function __construct()
    {
        ## Configuramos el modelo correspondiente a éste controlador
        $this -> UsuariosModel = $this ->loadModel('UsuariosModel');
    }    
    /**
     * Index
     * Trae del modelo todos los usuarios
     * @return void
     */  
    public function Index(){
        $data = [];
        $this->renderView('user/Inicio', $data);
    }

    public function registroUsuario()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $data = [
                'nombresU' => $_POST['nombresU'],
                'apellidosU' => $_POST['apellidosU'],
                'numeroIdU' => $_POST['numeroIdU'],
                'passU' => $_POST['passU']
            ];

            $verificar = $this->UsuariosModel->getOne($data);
            if($verificar){
                echo json_encode('El usuario ingresado ya existe');
            }else{
                $respuesta = $this->UsuariosModel->registroUsuario($data);
                if($respuesta){
                    echo json_encode('Se ha registrado satisfactoriamente');
                }
            }
        }else{
            $this->renderView('user/registroU');
        }
    }

    public function UsuariosEditar()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idUsuario' => $_POST['idUsuario'],
                'nomUsuario' => $_POST['nomUsuario'],
                'apeUsuario' => $_POST['apeUsuario'],
                'direccionUsuario' => $_POST['direccionUsuario'],
                'fechaNacUsuario' => $_POST['fechaNacUsuario'],
                'ciudadUsuario' => $_POST['ciudadUsuario'],
                'passUsuario' => $_POST['passUsuario'],
            ];
            $respuesta = $this->UsuariosModel->update($data);
            if($respuesta){
                $res = $this -> UsuariosModel -> getAllUsers();
                $this->renderView('user/UsuariosInicio',$res);

            }if($res){
                #echo json_encode('¡Se ha editado el usuario satisfactoriamente!');
            }
            else{
                #echo json_encode('Ha ocurrido un error en el proceso');
            }

        } else {
            $this->renderView('user/UsuariosInicio');
        }
    }
     /**
     * getAllUsers
     *
     * @return void
     */
    public function getAllUsers()
    {
        $data = $this -> UsuariosModel -> getAllUsers();
        $this->renderView('user/UsuariosInicio', $data);
    }

    public function UsuariosEliminar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'idUsuario' => $_POST['idUsuarioE']
            ];

            $respuesta = $this->UsuariosModel->delete($data);
           if ($respuesta) {
               $res = $this -> UsuariosModel -> getAllUsers();
               $this->renderView('user/UsuariosInicio',$res);

           } else {
               #die('¡Ocurrió un error!');
               $this->renderView('user/UsuariosInicio');
           }

       } else {
        $this->renderView('user/UsuariosInicio');
       }
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
        }

        $data = $this->UsuariosModel->search($nombre);
        $this->renderView('user/UsuariosInicio', $data);
    }

    public function ImprimirListado()
    {
        $data = $this -> UsuariosModel -> getAllUsers();
        //$data = [];
        $this->renderView('user/rptListadoUsuarios', $data);
    }

    public function expoExcel()
    {
        $data = $this -> UsuariosModel -> getAllUsers();
        $this->renderView('user/UsuariosExpoExcel', $data);
    }

    public function todos()
    {
        $usuarios = $this -> UsuariosModel -> getAllUsers();
        echo json_encode($usuarios);
    }

}