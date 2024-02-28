<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>

    <ul>
        <?php foreach ($productos as $producto) : ?>
            <li><?php echo $producto['nombre']; ?> - $<?php echo $producto['precio']; ?></li>
        <?php endforeach; ?>
    </ul>

    <p>Total: $<?php echo $total; ?></p>

    <form action="checkout.php" method="post">
        <input type="submit" value="Pagar">
    </form>
</body>
</html>
