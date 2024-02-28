<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Administrador extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('AdminModel');
    }

    // ----------- Funciones del Registro -------------- \\

    public function registrar_admin()
    {
        $this->load->view('administrador/registro');
    }

    public function reg_guardar()
    {
        $data = array(
            'nombre' => $this->input->post("fullname"),
            'correo' => $this->input->post("email"),
            'usuario_id' => $this->input->post("user_id"),
            'admin_usuario' => $this->input->post("username"),
            'clave' => password_hash($this->input->post("password"), PASSWORD_BCRYPT),
            'fecha_reg' => date('Y-m-d')
        );
        $result = $this->AdminModel->reg_guardar($data);
        if ($result['saved'] == true) {
            redirect(base_url() . 'iniciar-sesion-admin');
        } else {
            redirect(base_url() . 'registrar-admin');
        }
    }

    // --------- Funciones del Inicio de Sesion ---------- \\

    public function iniciar_sesion_admin()
    {
        $this->load->view('administrador/inicio_sesion');
    }

    public function verificacion()
    {
        $result = $this->AdminModel->verificacion(
            $this->input->post("nombre"),
            $this->input->post("clave")
        );
        if ($result) {
            $admin = array(
                'nombre' => $result->nombre
            );
            $this->session->set_userdata('admin', $admin);
            redirect(base_url() . 'iniciar-sesion-admin/sesion');
        } else {
            $this->session->set_userdata('error', true);
            redirect(base_url() . 'iniciar-sesion-admin');
        }
    }

    public function cerrar_sesion()
    {
        $this->session->unset_userdata('admin');
        redirect(base_url() . 'iniciar-sesion-admin');
    }

}
