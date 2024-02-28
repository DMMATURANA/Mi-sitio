<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminSec extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (!isset($_SESSION['admin'])) {
            redirect(base_url() . 'iniciar-sesion-admin');
        }

        $this->load->model('AdminModel');
        $this->load->model('UsuarioModel');
    }

    public function sesion()
    {
        $this->load->view('administrador/dashboard/header');
        $this->load->view('administrador/dashboard/index');
        $this->load->view('administrador/dashboard/footer');
    }

    //------------------------- Tabla de Usuarios ----------------------\\

    public function tabla_usuarios()
    {
        $data = array(
            'usuarios' => $this->AdminModel->tabla_usuarios(),
        );

        $this->load->view('administrador/dashboard/header');
        $this->load->view('administrador/dashboard/tablas/usuarios', $data);
        $this->load->view('administrador/dashboard/footer');
    }

    public function registrar_usuario()
    {
        $this->load->view('administrador/dashboard/header');
        $this->load->view('administrador/dashboard/tablas/registrar_usuario');
        $this->load->view('administrador/dashboard/footer');
    }

    public function tabla_usuarios_registrar()
    {
        $data = array(
            'nombre' => $this->input->post("fullname"),
            'correo' => $this->input->post("email"),
            'usuario_id' => $this->input->post("user_id"),
            'nombre_usuario' => $this->input->post("username"),
            'clave' => password_hash($this->input->post("password"), PASSWORD_BCRYPT),
            'fecha_reg' => date('Y-m-d')
        );
        $result = $this->AdminModel->tabla_usuarios_registrar($data);
        if ($result['saved'] == true) {
            $this->session->set_flashdata('status', 'Registro exitoso');
            redirect(base_url() . 'dashboard/tabla-usuarios');
        } else {
            $this->session->set_flashdata('status', 'No se pudo efectuar el registro');
            redirect(base_url() . 'dashboard/tabla-usuarios');
        }
    }

    public function editar_usuario($id_usuario)
    {
        $result = $this->AdminModel->buscar_usuario($id_usuario);

        $this->load->view('administrador/dashboard/header');
        $this->load->view('administrador/dashboard/tablas/editar_usuario', array(
            'usuario' => $result
        ));
        $this->load->view('administrador/dashboard/footer');
    }

    public function tabla_usuarios_editar()
    {
        $data = array(
            'nombre' => $this->input->post("fullname"),
            'usuario_id' => $this->input->post("user_id"),
            'correo' => $this->input->post("email"),
            'nombre_usuario' => $this->input->post("username"),
            'fecha_modif' => date('Y-m-d')
        );
        $result = $this->AdminModel->tabla_usuarios_editar($this->input->post("id_user"), $data);
        if ($result > 0) {
            $this->session->set_flashdata('status', 'Modificacion exitosa');
            redirect(base_url() . 'dashboard/tabla-usuarios');
        } else {
            $this->session->set_flashdata('status', 'No se pudo efectuar la modificacion');
            redirect(base_url() . 'dashboard/tabla-usuarios');
        }
    }

    public function tabla_usuarios_eliminar($id_usuario)
    {
        $result = $this->AdminModel->tabla_usuarios_eliminar($id_usuario);
        if ($result) {
            $this->session->set_flashdata('status', 'Eliminacion exitosa');
            redirect(base_url() . 'dashboard/tabla-usuarios');
        } else {
            $this->session->set_flashdata('status', 'No se pudo efectuar la eliminacion');
            redirect(base_url() . 'dashboard/tabla-usuarios');
        }
    }

    //------------------------- Tabla de productos ----------------------\\

    public function tabla_productos()
    {
        $data = array(
            'productos' => $this->AdminModel->tabla_productos(),
        );

        $this->load->view('administrador/dashboard/header');
        $this->load->view('administrador/dashboard/tablas/productos', $data);
        $this->load->view('administrador/dashboard/footer');
    }

    public function tabla_transaccion()
    {
        $data1 = array(
            'carrito' => $this->AdminModel->tabla_transaccion(),
        );

        $this->load->view('administrador/dashboard/header');
        $this->load->view('administrador/dashboard/tablas/listar_productos', $data1);
        $this->load->view('administrador/dashboard/footer');
    }

    public function registrar_producto()
    {
        $this->load->view('administrador/dashboard/header');
        $this->load->view('administrador/dashboard/tablas/registrar_producto');
        $this->load->view('administrador/dashboard/footer');
    }

    public function tabla_productos_registrar()
    {
        $config['upload_path'] = './assets/imagenes/';
        $config['allowed_types'] = '*';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {

            $this->session->set_userdata('error_imagen', true);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $producto = array(
                "nombre_pdto" => $this->input->post("name"),
                "detalle_pdto" => $this->input->post("detail"),
                "precio_pdto" => $this->input->post("price"),
                "imagen_pdto" => $data['upload_data']['file_name'],
                'fecha_reg' => date('Y-m-d')
            );
            $result = $this->AdminModel->tabla_productos_registrar($producto);
            if ($result['saved']){
                redirect(base_url() . 'dashboard/tabla-productos');
            }else{
                
            }
        }
    }

    public function editar_producto($id_producto)
    {
        $result = $this->AdminModel->buscar_producto($id_producto);

        $this->load->view('administrador/dashboard/header');
        $this->load->view('administrador/dashboard/tablas/editar_producto', array(
            'producto' => $result
        ));
        $this->load->view('administrador/dashboard/footer');
    }

    public function tabla_productos_editar()
    {
        $data = array(
            "nombre_pdto" => $this->input->post("name"),
            "detalle_pdto" => $this->input->post("detail"),
            "precio_pdto" => $this->input->post("price"),
            'fecha_modif' => date('Y-m-d')
        );
        $result = $this->AdminModel->tabla_productos_editar($this->input->post("id_product"), $data);
        if ($result > 0) {
            $this->session->set_flashdata('status', 'Modificacion exitosa');
            redirect(base_url() . 'dashboard/tabla-productos');
        } else {
            $this->session->set_flashdata('status', 'No se pudo efectuar la modificacion');
            redirect(base_url() . 'dashboard/tabla-productos');
        }
    }

    public function tabla_productos_eliminar($id_producto)
    {
        $result = $this->AdminModel->tabla_productos_eliminar($id_producto);
        if ($result) {
            $this->session->set_flashdata('status', 'Eliminacion exitosa');
            redirect(base_url() . 'dashboard/tabla-productos');
        } else {
            $this->session->set_flashdata('status', 'No se pudo efectuar la eliminacion');
            redirect(base_url() . 'dashboard/tabla-productos');
        }
    }

}
