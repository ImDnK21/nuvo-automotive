<div class="container py-3">
  <div class="row">

    <div class="col-12 col-md-9">
      <div class="mb-3">
        <h2 class="fw-bold mb-3">Lista de Mecanicos</h2>
        <table class="table">
          <thead>
            <tr>
              <th>RUT</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Teléfono</th>
              <th>Creado el</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($mechanic = $mechanics->fetch_object()): ?>
            <tr>
              <td><?= $mechanic->RUT ?></td>
              <td><?= $mechanic->FIRSTNAME . ' ' . $mechanic->LASTNAME?></td>
              <td><?= $mechanic->PHONE?></td>
              <td><?= $mechanic->EMAIL ?></td>
              <td><?= $mechanic->CREATE_AT ?></td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
