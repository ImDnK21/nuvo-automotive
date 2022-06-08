<div class="container py-3">
  <div class="row">

    <div class="col-12 col-md-9">
      <div class="mb-3">
        <h2 class="fw-bold mb-3">Lista de clientes</h2>
        <div class="clontainer">
        <div class="col-xs-3">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Buscar por nombre" id='q' onkeyup="load(1);">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onclick='load(1);'><i class='fa fa-search'></i></button>
                      </span>
                    </div><!-- /input-group -->
                </div>
                <div class="col-xs-3"></div>
                <div class="col-xs-1">
                    <div id="loader" class="text-center"></div>
                </div>

                <div class="col-md-offset-10">
                    <!-- modals -->
                        <?php 
                            // include "modals/agregar/agregar_empleado.php";
                            // include "modals/editar/editar_empleado.php";
                            // include "modals/mostrar/mostrar_empleado.php";
                        ?>
                    <!-- /end modals -->
        </div>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>RUT</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Comuna</th>
                <th>Creado el</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($client = $clients->fetch_object()): ?>
              <tr>
                <td><?= $client->RUT ?></td>
                <td><?= $client->FIRSTNAME . ' ' . $client->LASTNAME . ' ' . $client->SECOND_LASTNAME?></td>
                <td><?= $client-> PHONE?></td>
                <td><?= $client->EMAIL ?></td>
                <td><?= $client->ADDRESS ?></td>
                <td><?= $client->COMMUNE ?></td>
                <td><?= $client->CREATED_AT ?></td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>