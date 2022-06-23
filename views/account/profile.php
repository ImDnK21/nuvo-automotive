<?php if (isset($_SESSION['admin'])) {
require_once('views/layout/sidebar.php');
}else{
require_once('views/layout/sidebarClient.php');
}

?>
<div class="container py-3">
  <div class="row">
    <div class="col-12 col-md-3 mb-3">
    </div>
    <div class="col-12 col-md-9 mb-3">
      <h3 class="fw-bold border-bottom mb-3 pb-3" style="padding-top: 20px;">Información de la cuenta</h3>
      <h4 class="mb-3">Datos personales del usuario</h4>
      <div class="row">
        <div id="account-form" class="col-6 mb-3  ">
          <form action="<?= APP_URL . 'account/update?id=' . $_SESSION['logged']->RUT ?>" method="POST">
          <!-- <div class="mb-3">
              <label for="rut" class="form-label required">Rut</label>
              <input type="text" name="rut" value="<?= $_SESSION['logged']->RUT ?>" class="form-control" readonly>
            </div> -->
            <div class="mb-3">
              <label for="firstname" class="form-label required">Nombre</label>
              <input type="text" name="firstname" value="<?= $_SESSION['logged']->FIRSTNAME ?>" class="form-control">
            </div>
            <div class="mb-3">
              <label for="lastname" class="form-label required">Apellido</label>
              <input type="text" name="lastname" value="<?= $_SESSION['logged']->LASTNAME ?>" class="form-control">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label required">Correo Electronico</label>
              <input type="email" name="email" value="<?= $_SESSION['logged']->EMAIL ?>" class="form-control">

            </div>
            <button class="btn btn-primary btn-block">Actualizar Datos</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
