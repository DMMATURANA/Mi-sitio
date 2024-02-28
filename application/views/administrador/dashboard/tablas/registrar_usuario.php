<div class="card mb-3">

    <div class="card-body">

        <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4">Registro para Usuarios</h5>
        </div>

        <form action="<?php echo base_url() . 'dashboard/tabla-usuarios-registrar'; ?>" class="row g-3 needs-validation" method="post">

            <div class="col-12">
                <label for="yourName" class="form-label">Nombre completo</label>
                <input type="text" name="fullname" class="form-control" required>
                <div class="invalid-feedback">¡Por favor, escriba su nombre!</div>
            </div>

            <div class="col-12">
                <label for="yourEmail" class="form-label">Correo electrónico</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="email" name="email" class="form-control" required>
                    <div class="invalid-feedback">Por favor, elija un nombre de usuario.</div>
                </div>
            </div>

            <div class="col-12">
                <label for="yourId" class="form-label">Numero de identificacion (CC, TI, NIT...)</label>
                <input type="text" name="user_id" class="form-control" required>
                <div class="invalid-feedback">¡Por favor, escriba su nombre!</div>
            </div>

            <div class="col-12">
                <label for="yourUsername" class="form-label">Nombre de usuario</label>
                <input type="text" name="username" class="form-control" required>
                <div class="invalid-feedback">¡Por favor ingrese una dirección de correo electrónico válida!</div>
            </div>

            <div class="col-12">
                <label for="yourPassword" class="form-label">Clave</label>
                <input type="password" name="password" class="form-control" required>
                <div class="invalid-feedback">¡Por favor, introduzca su contraseña!</div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Registrar</button>
            </div>
        </form>
        <br>

    </div>
</div>