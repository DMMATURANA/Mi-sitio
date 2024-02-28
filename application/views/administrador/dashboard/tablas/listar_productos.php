<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
                <h2>Tabla de Productos</h2>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Detalle</th>
                        <th>Precio</th>
                        <th>Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0;
                    foreach ($productos as $p) : ?>
                        <tr>
                            <input type="hidden" name="id_user" id="id_user" value="<?php echo $p->_id; ?>" required>
                            <td><img src="<?php echo base_url() . 'assets/imagenes/' . $p->imagen_pdto; ?>" width="50px" height="80px" alt="Item Img" /></td>
                            <td><?php echo $p->nombre_pdto; ?></td>
                            <td><?php echo $p->detalle_pdto; ?></td>
                            <td>$<?php echo $p->precio_pdto; ?></td>
                            <td>
                                <a href="<?php echo base_url() . 'dashboard/editar_producto/' . $p->_id; ?>" class="btn btn-info">Editar</a>
                                <a href="<?php echo base_url() . 'dashboard/tabla-productos-eliminar/' . $p->_id; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>