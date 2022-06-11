<div class="container py-3">
  <div class="row justify-content-center">
    <div class="col-6">
      <form action="<?= APP_URL . 'admin/UpdateMechanic' ?>" method="post">
        <div class="mb-3">
          <label class="form-label">RUT</label>
          <input type="text" name="rut" value="<?= $mechanic->RUT ?>" disabled class="form-control" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" name="firstname" value="<?= $mechanic->FIRSTNAME ?>" class="form-control">
        </div>
        <div class="row">
          <div class="col-6">
            <div class="mb-3">
              <label class="form-label">Apellido paterno</label>
              <input type="text" name="lastname" value="<?= $mechanic->LASTNAME ?>" class="form-control">
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Telefono de Contacto</label>
          <input type="text" name="phone" value="<?= $mechanic->PHONE ?>" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Correo electrónico</label>
          <input type="text" name="email" value="<?= $mechanic->EMAIL ?>" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Editar Mecanico</button>
      </form>
    </div>
  </div>
</div>