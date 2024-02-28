<div class="card mb-3">

    <div class="card-body">

        <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4">Registro para productos</h5>
        </div>

        <form action="<?php echo base_url() . 'dashboard/tabla-productos-registrar'; ?>" class="row g-3 needs-validation" method="post" enctype='multipart/form-data'>

            <div class="col-12">
                <label for="yourName" class="form-label">Nombre del producto</label>
                <input type="text" name="name" class="form-control" required>
                <div class="invalid-feedback">¡Por favor, escriba un nombre!</div>
            </div>

            <div class="col-12">
                <label for="yourName" class="form-label">Detalle del producto</label>
                <input type="text" name="detail" class="form-control" required>
                <div class="invalid-feedback">¡Por favor, escriba un detalle!</div>
            </div>

            <div class="col-12">
                <label for="yourEmail" class="form-label">Precio del producto</label>
                <input type="number" name="price" class="form-control " required>
                <div class="invalid-feedback">Por favor, digite un precio</div>
            </div>

            <div class="col-12">
                <label for="yourId" class="form-label">Imagen del producto</label>
                <input type="file" name="image" class="form-control custom-file-input" accept="image/*" required>
                <div class="invalid-feedback">¡Por favor, elija una imagen al menos!</div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Registrar</button>
            </div>
            
        </form>
        <br>

    </div>
</div>