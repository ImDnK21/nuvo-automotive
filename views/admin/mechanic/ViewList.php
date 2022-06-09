<div class="container py-3">
  <div class="row">

    <div class="col-12 -9">
      <div class="mb-3">
        <h2 class="fw-bold mb-3">Lista de Mecanicos</h2>
        <table class="table">
          <thead>
            <tr>
              <th>RUT</th>
              <th>Nombre</th>
              <th>Telefono</th>
              <th>Correo</th>
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
              <td><?= $mechanic->CREATED_AT ?></td>
              <td>
                <div class="icons">
                  <button type="button" class="btn btn-warning btn-square btn-xs" onclick=""><i class="fa fa-edit"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-square btn-xs" onclick=><i
                      class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-info btn-square btn-xs" onclick=><i
                      class="fa fa-eye"></i></button>
                </div>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>