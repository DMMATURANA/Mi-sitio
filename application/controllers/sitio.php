<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sitio extends CI_Controller {


	public function __construct()
    {
        parent:: __construct();
        $this->load->model("AdminModel");}


	public function index()
	{
		$productos = $this->AdminModel->listar_productos();
        $this->load->view('sitio/index', compact("productos"));
	}

}



?>