<?php

defined("BASEPATH") or exit("No direct script access allowed");

class AdminModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->library("mongodb");
        $this->admin_db = $this->mongodb->db()->administrador;
        $this->usuario_db = $this->mongodb->db()->usuarios;
        $this->producto_db = $this->mongodb->db()->productos;
        $this->db = $this->mongodb->db()->productos;
    }
    

    // ----------- Funciones del Registro -------------- \\

    function reg_guardar($admin)
    {
        $result = $this->admin_db->insertOne($admin);
        if ($result->getInsertedCount() > 0) {
            return array(
                "saved" => true,
                "admin_id" => $result->getInsertedId()
            );
        } else {
            return array("saved" => false);
        }
    }

    public function verificacion($admin_usuario, $contrasena)
    {
        try {
            $result = $this->admin_db->findOne(array(
                "username" => $admin_usuario,
                "password" => $contrasena
            ));
            return $result;
        } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
            return null;
        }
    }

    //-------------------------- Tabla de Usuarios --------------------------\\

    public function tabla_usuarios()
    {
        return $this->usuario_db->find(array());
    }

    function buscar_usuario($id_usuario)
    {
        try {
            $result = $this->usuario_db->findOne(array(
                '_id' => $this->mongodb->getObjetId($id_usuario)
            ));
            return $result;
        } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
            return null;
        }
    }

    function tabla_usuarios_registrar($usuario)
    {
        $result = $this->usuario_db->insertOne($usuario);
        if ($result->getInsertedCount() > 0) {
            return array(
                "saved" => true,
                "usuario_id" => $result->getInsertedId()
            );
        } else {
            return array("saved" => false);
        }
    }

    function tabla_usuarios_editar($id_usuario, $post)
    {
        $result = $this->usuario_db->updateOne(
            array(
                '_id' => $this->mongodb->getObjetId($id_usuario)
            ),
            array('$set' => $post)
        );
        return $result->getModifiedCount();
    }

    function tabla_usuarios_eliminar($id_usuario)
    {
        $result = $this->usuario_db->findOneAndDelete(array(
            '_id' => $this->mongodb->getObjetId($id_usuario)
        ));
        return $result;
    }

    //-------------------------- Tabla de Productos --------------------------\\

    public function tabla_productos()
    {
        return $this->producto_db->find(array());
    }

    public function tabla_transaccion()
    {
        return $this->carrito_db->find(array());
    }

    function buscar_producto($id_producto)
    {
        try {
            $result = $this->producto_db->findOne(array(
                '_id' => $this->mongodb->getObjetId($id_producto)
            ));
            return $result;
        } catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
            return null;
        }
    }

    function tabla_productos_registrar($producto)
    {
        $result = $this->producto_db->insertOne($producto);
        if ($result->getInsertedCount() > 0) {
            return array(
                "saved" => true,
                "_id" => $result->getInsertedId()
            );
        } else {
            return array("saved" => false);
        }
    }

    function tabla_productos_editar($id_producto, $post)
    {
        $result = $this->producto_db->updateOne(
            array(
                '_id' => $this->mongodb->getObjetId($id_producto)
            ),
            array('$set' => $post)
        );
        return $result->getModifiedCount();
    }

    function tabla_productos_eliminar($id_producto)
    {
        $result = $this->producto_db->findOneAndDelete(array(
            '_id' => $this->mongodb->getObjetId($id_producto)
        ));
        return $result;
    }

    //listar productos
    public function listar_productos()
    {

        return $this->db->find();

    }

}