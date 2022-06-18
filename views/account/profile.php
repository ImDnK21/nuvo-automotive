
<div class="container py-3 mb-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 mb-3">
        <div class="card" style="margin-top:60px ;">
          <div class="card-header">Datos Personales</div>
          <div class="card-body">

  
            <form action="<?= APP_URL . 'account/update' ?>" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Rut:</label>
                <input type="text" name="email" class="form-control" value="<?=$_SESSION['logged']->RUT?>">
              </div>
            <div class="mb-3">
                <label for="email" class="form-label">Nombre:</label>
                <input type="text" name="email" class="form-control" value="<?=$_SESSION['logged']->FIRSTNAME?>">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Apellido</label>
                <input type="text" name="email" class="form-control" value="<?=$_SESSION['logged']->LASTNAME?>">
              </div>
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="text" name="email" class="form-control" value="<?=$_SESSION['logged']->EMAIL?>">
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>