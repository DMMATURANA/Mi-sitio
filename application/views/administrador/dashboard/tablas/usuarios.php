<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
                <h2>Tabla de Usuarios</h2>
            </div>
            <div class="col-sm-6">
                <a href="<?php echo base_url() . 'dashboard/registrar-usuario' ?>" class="btn btn-primary"><span>Registrar Usuario</span></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Identificacion</th>
                        <th>Correo electronico</th>
                        <th>Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0;
                    foreach ($usuarios as $u) : ?>
                        <tr>
                            <input type="hidden" name="id_user" id="id_user" value="<?php echo $u->_id; ?>" required>
                            <td><?php echo $u->nombre; ?></td>
                            <td><?php echo $u->usuario_id; ?></td>
                            <td><?php echo $u->correo; ?></td>
                            <td><?php echo $u->fecha_reg; ?></td>
                            <td>
                                <a href="<?php echo base_url() . 'dashboard/editar_usuario/' . $u->_id; ?>" class="btn btn-info">Editar</a>
                                <a href="<?php echo base_url() . 'dashboard/tabla-usuarios-eliminar/' . $u->_id; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>