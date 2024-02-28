<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioSec extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
        if (!isset($_SESSION['usuario'])) {
            redirect(base_url() . 'iniciar-sesion-usuario');
        }

        $this->load->model('UsuarioModel');
	}

    public function sesion()
	{
        $this->load->view('sitio/index');
	}

}