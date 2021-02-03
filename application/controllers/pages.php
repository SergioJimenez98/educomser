<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function error()
	{
		$this->load->view('nopagefound');
	}
	
	public function index()
	{
		$this->load->view('home');
	}

	public function login()
	{
		$this->load->view('login');
    }
    
    public function register()
	{
		$this->load->view('register');
	}


}

?>