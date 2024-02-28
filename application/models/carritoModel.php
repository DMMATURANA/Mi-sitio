<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CarritoModel extends CI_Model
 {
    private $collection;

    public function __construct($collection) {
        $this->collection = $collection;
    }

    public function agregarProducto($nombre, $precio) {
        $producto = [
            'nombre' => $nombre,
            'precio' => $precio
        ];
        $this->collection->insertOne($producto);
    }

    public function obtenerProductos() {
        return $this->collection->find();
    }

    public function calcularTotal() {
        $productos = $this->obtenerProductos();
        $total = 0;
        foreach ($productos as $producto) {
            $total += $producto['precio'];
        }
        return $total;
    }
}
?>
