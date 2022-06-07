<div class="container py-3">
  <div class="row">

    <div class="col-12 col-md-9">
      <div class="mb-3">
        <h2 class="fw-bold mb-3">Lista de clientes</h2>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>RUT</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
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
                <td><?= $client->CREATE_AT ?></td>
              </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>