<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
        $this->load->model('UsuarioModel');
	}

	// ----------- Funciones del Registro -------------- \\

    public function registrar_usuario()
	{
        $this->load->view('usuario/registro');
	}

	public function reg_guardar()
    {
        $data = array(
            'nombre' => $this->input->post("fullname"),
            'correo' => $this->input->post("email"),
            'usuario_id' => $this->input->post("user_id"),
            'nombre_usuario' => $this->input->post("username"),
            'clave' => password_hash($this->input->post("password"), PASSWORD_BCRYPT),
            'fecha_reg' => date('Y-m-d')
        );
        $result = $this->UsuarioModel->reg_guardar($data);
        if ($result['saved'] == true) {
            redirect(base_url() . 'iniciar-sesion-usuario');
        } else {
            redirect(base_url() . 'registrar-usuario');
        }
    }

	/* --------- Funciones del Inicio de Sesion ---------- */

    public function iniciar_sesion_usuario()
	{
        $this->load->view('usuario/inicio_sesion');
	}

    public function verificacion()
    {
        $result = $this->UsuarioModel->verificacion(
            $this->input->post("nombre"),
            $this->input->post("clave")
        );
        if ($result) {
            $usuario = array(
                'nombre' => $result->nombre
            );
            $this->session->set_userdata('usuario', $usuario);
            redirect(base_url() . 'iniciar-sesion-usuario/sesion');
        } else {
            $this->session->set_userdata('error', true);
            redirect(base_url() . 'usuario/inicio_sesion');
        }
    }

	public function cerrar_sesion()
    {
        $this->session->unset_userdata('usuario');
        redirect(base_url() . 'inicio');
    }

}
