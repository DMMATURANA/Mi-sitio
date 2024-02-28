<div class="card mb-3">

  <div class="card-body">

    <div class="pt-4 pb-2">
      <h5 class="card-title text-center pb-0 fs-4">Editor de informacion de Usuarios</h5>
    </div>

    <form action="<?php echo base_url() . 'dashboard/tabla-usuarios-editar'; ?>" class="row g-3 needs-validation" method="post">

      <input type="hidden" name="id_user" value="<?php echo $usuario->_id; ?>" required>

      <div class="col-12">
        <label for="yourName" class="form-label">Su nombre completo</label>
        <input type="text" name="fullname" class="form-control" value="<?php echo $usuario->nombre; ?>" required>
        <div class="invalid-feedback">¡Por favor, escriba su nombre!</div>
      </div>

      <div class="col-12">
        <label for="yourEmail" class="form-label">Tu correo electrónico</label>
        <div class="input-group has-validation">
          <span class="input-group-text">@</span>
          <input type="email" name="email" class="form-control" value="<?php echo $usuario->correo; ?>" required>
          <div class="invalid-feedback">Por favor, elija un nombre de usuario.</div>
        </div>
      </div>

      <div class="col-12">
        <label for="yourId" class="form-label">Numero de identificacion (CC, TI, NIT...)</label>
        <input type="text" name="user_id" class="form-control" value="<?php echo $usuario->usuario_id; ?>" required>
        <div class="invalid-feedback">¡Por favor, escriba su nombre!</div>
      </div>

      <div class="col-12">
        <label for="yourUsername" class="form-label">Nombre de usuario</label>
        <input type="text" name="username" class="form-control" value="<?php echo $usuario->nombre_usuario; ?>" required>
        <div class="invalid-feedback">¡Por favor ingrese una dirección de correo electrónico válida!</div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Aplicar Cambios</button>
      </div>
    </form>

  </div>
</div>