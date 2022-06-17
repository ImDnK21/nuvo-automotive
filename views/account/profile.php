<div class="container py-3">
  <div class="row">
    <div class="col-12 col-md-3 mb-3">
      <?php require_once('views/layout/sidebar.php'); ?>
    </div>
    <div class="col-12 col-md-9 mb-3">
      <h3 class="fw-bold border-bottom mb-3 pb-3">Información de la cuenta</h3>
      <h4 class="mb-3">Información de contacto</h4>
      <div class="row">
        <div class="col-12 col-md-8 mb-3">
          <p class="fw-bold mb-1"><?= $_SESSION['logged']->FIRSTNAME . ' ' . $_SESSION['logged']->LASTNAME ?></p>
          <p class="mb-1"><?= $_SESSION['logged']->EMAIL ?></p>
          <p class="mb-1"><?= Utils::getRole($_SESSION['logged']->ROLE) ?></p>
        </div>

        <div id="account-form" class="col-6 mb-3 d-none">
          <form action="<?= APP_URL . 'account/update?id=' . $_SESSION['logged']->ID ?>" method="POST">
            <div class="mb-3">
              <label for="firstname" class="form-label required">Nombres</label>
              <input type="text" name="firstname" value="<?= $_SESSION['logged']->FIRSTNAME ?>" class="form-control">
            </div>
            <div class="mb-3">
              <label for="lastname" class="form-label required">Apellidos</label>
              <input type="text" name="lastname" value="<?= $_SESSION['logged']->LASTNAME ?>" class="form-control">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label required">Correo Electronico</label>
              <input type="text" name="email" value="<?= $_SESSION['logged']->EMAIL ?>" class="form-control">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> 


