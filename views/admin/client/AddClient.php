<div class="container py-3">
  <div class="row justify-content-center">
    <div class="col-6">
      <form action="<?= APP_URL . 'admin/SaveClient' ?>" method="post">
        <div class="mb-3">
          <label class="form-label">RUT</label>
          <input type="text" name="rut" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" name="firstname" class="form-control">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="mb-3">
              <label class="form-label">Apellido paterno</label>
              <input type="text" name="lastname" class="form-control">
            </div>
          </div>
          <div class="col-6">
            <div class="mb-3">
              <label class="form-label">Apellido materno</label>
              <input type="text" name="second_lastname" class="form-control">
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Teléfono de contacto</label>
          <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Correo electrónico</label>
          <input type="text" name="email" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Dirección</label>
          <input type="text" name="address" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Comuna</label>
          <input type="text" name="commune" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Agregar cliente</button>
      </form>
    </div>
  </div>
</div>