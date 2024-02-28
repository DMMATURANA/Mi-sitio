<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuarioModel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->library("mongodb");
		$this->usuario_db = $this->mongodb->db()->usuarios;
		$this->producto_db = $this->mongodb->db()->productos;
        $this->carro_db = $this->mongodb->db()->carrito;
	}

	// ----------- Funciones del Registro -------------- \\

	function reg_guardar($usuario)
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

	public function verificacion($nom_usuario, $contrasena)
	{
		try {
			$result = $this->usuario_db->findOne(array(
				"username" => $nom_usuario,
				"password" => $contrasena
			));
			return $result;
		} catch (\MongoDB\Driver\Exception\InvalidArgumentException $th) {
			return null;
		}
	}

	//---------------------------- Productos ----------------------------\\

	public function productos()
	{
		return $this->producto_db->find(array());
	}

	//---------------------------- Carro de compras ----------------------------\\

	public function carro()
	{
		return $this->carro_db->find(array());
	}
}
