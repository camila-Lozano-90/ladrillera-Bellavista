<?php
#[AllowDynamicProperties]
class Inicio extends Controller
{
    public function __construct()
    {
        
    }    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $data =[];
        $this->renderView('Inicio',$data);
    }
    public function renderLogin()
    {
        $data = [];
        $this->renderView('user/Login', $data);
    }
    public function error404()
    {
        $data = [];
        $this->renderView('user/404', $data);
    }
}