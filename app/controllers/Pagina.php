<?php
#[AllowDynamicProperties]

class Pagina extends Controller
{
    public function __construct()
    {
        ## Configuramos el modelo correspondiente a éste controlador
       $this -> PaginaModel = $this ->loadModel('PaginaModel');
    }
    ## RENDERIZA AL INICIO ************************************************************************
    public function Index()
    {
        $data = [];
        $this->renderView('Inicio',$data);
    }
    ## RENDERIZA A PRODUCTOS ************************************************************************
    public function productos()
    {
        $data = [];
        $this->renderView('paginaCliente/productos');
    }
    ## RENDERIZA A NOSOTROS ************************************************************************
    public function quienesSomos()
    {
        $data = [];
        $this->renderView('paginaCliente/quienesSomos');
    }
    ## RENDERIZA A NUESTRAS ACTIVIDADES ************************************************************************
    public function nuestrasActividades()
    {
        $data = [];
        $this->renderView('paginaCliente/nuestrasActividades');
    }

    public function contacto()
    {
        $data = [];
        $this->renderView('paginaCliente/contacto');
    }

    public function envioEmail()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $nombre = $_POST['nombreU'];
            $mensaje = $_POST['cuerpo'];
            $telefono = $_POST['telefonoU'];

            $destino = 'camila Lozano <lindalozano315@gmail.com>';
            $asunto = $_POST['asunto'];
            $cuerpo = $mensaje ."<br>". "Mi número de contacto es: " . $telefono ."<br>". "Nombre:" . $nombre;
/* 
            $cabeceras = 'From: mclozano90@misena.edu.co' . "\r\n" .
            #'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion(); */ 

            if(mail($destino, $asunto, $cuerpo) == true){
                echo json_encode("Se ha enviado el mensaje satisfactoriamente");
                $this->renderView('paginaCliente/contacto');
            }else{
                echo json_encode("No se ha enviado el mensaje, por favor recarga la página e inténtalo nuevamente");
                $this->renderView('paginaCliente/contacto');
            }
        }
    }
}

