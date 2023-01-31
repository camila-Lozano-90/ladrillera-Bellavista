<?php
require_once APPROOT . '/helpers/url_helper.php';
#[AllowDynamicProperties]
class Login extends Controller
{

    public function __construct()
    {
        //configuramos el modelo correspondiente a este controlador
        $this -> LoginModel = $this-> loadModel ('LoginModel');
    }


    public function index()
    {
        $data = [];
        $this->renderView('Login/login', $data);
    }


    public function login()
    {
        // chequeamos si fue enviado por un formulario
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // sanitizamos los datos
            $_POST = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            $data = [
                'documentoID' => trim($_POST['documentoID']),
                'passUsuario' => trim($_POST['passUsuario'])
            ];

            if ($this-> LoginModel -> findUserByEmail($data['documentoID'])) {
                $usuario = $this -> LoginModel -> login($data['documentoID'], $data['passUsuario']);
                if ($usuario) {
                    $this -> crearSesionUsuario($usuario);
                    //echo var_dump($usuario);
                } else {
                    $data['error'] = "Usuario o contraseña incorrectos";
                    $data = "Usuario o contraseña incorrectos";
                    $this->renderView('Login/login', $data);
                };
            } else {
                $data['error'] = "No existe el usuario";
                $this->renderView('Inicio', $data);
                echo var_dump($data);
            }
        } else {
            $data = [
                'nombres' => '',
                'passUsuario' => '',
                'error' => '¡Atención! la información no se envió desde un formulario.'
            ];
            $this->renderView('Inicio', $data);
        }
    }

    public function crearSesionUsuario($usuario)
    { 
        if($usuario != ""){
            session_start();
            $_SESSION['id'] = $usuario->id;
            $_SESSION['documentoID'] = $usuario->documentoID;
            $_SESSION['nombres'] = $usuario->nombres;
            //redirect('user/Inicio');
            $this->renderView('user/Inicio');
        }else{
            $this->renderView('Inicio');
        }
    }


    public function logout()
    {
        session_start();
        unset($_SESSION['documentoID']);
        unset($_SESSION['documentoID']);
        unset($_SESSION['nombres']);
        session_destroy();
        //redirect('Login/login');
        $this->renderView('Login/login');
    }
}
