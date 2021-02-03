<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Usuario','Usuario');
        $this->load->helper('validation');
    }

    public function agregar()
	{
        //POST
        /*foreach($_POST as $key => $value){
            $data[$key] = $value;
        }*/
        $data['nombre'] = $_POST['nombre'];
        $data['correo'] = $_POST['correo'];
        //$data['password'] = md5($_POST['password']);
        if(check_complex($_POST['password'],8,5))
        {
            $data['password'] = md5($_POST['password']);
            $this->Usuario->insert('usuarios', $data);
            //$this->load->view('login');
            header('Location:'.base_url().'login');
        }
        else
        {
            echo 'No cumple las condiciones de contrasena segura';
        }

        
    }

    public function login()
    {
        $data['correo'] = $_POST['correo'];
        $data['password'] = md5($_POST['password']);

        $usuario = $this->Usuario->verificar($data);

        //todo
        if(empty($usuario)) 
        {
            echo "usuario no existe";
        }
        else
        {
            $this->load->view('home');
        }
    }
    

}

?>