<?php
require_once 'CarritoModel.php';

class CarritoController {
    private $carritoModel;

    public function __construct($carritoModel) {
        $this->carritoModel = $carritoModel;
        $this->load->model('carritoModel');
    }

    public function agregarProducto($nombre, $precio) {
        $this->carritoModel->agregarProducto($nombre, $precio);
    }

    public function mostrarCarrito() {
        $productos = $this->carritoModel->obtenerProductos();
        $total = $this->carritoModel->calcularTotal();
        include 'Carrito.php';
    }
}

// Uso del controlador
$carritoModel = new CarritoModel($collection); // Pasa la colección de MongoDB al modelo
$carritoController = new CarritoController($carritoModel);

// Agregar productos al carrito
$carritoController->agregarProducto('Producto 1', 10);
$carritoController->agregarProducto('Producto 2', 20);

// Mostrar el carrito
$carritoController->mostrarCarrito();
?>
