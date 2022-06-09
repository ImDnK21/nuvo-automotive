<div class="container py-3">
  <div class="row">

    <div class="col-12 -9">
      <div class="mb-3">
        <h2 class="fw-bold mb-3">Lista de vehiculos</h2>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Patente</th>
                <th>Marca</th>
                <th>Modelo</th>
                <!-- <th>Año Fabricacion</th> -->
                <!-- <th>Tipo de combustible</th> -->
                <!-- <th>transmision</th> -->
                <th>Color</th>
                <!-- <th>N° de chasis</th> -->
                <th>Kilometraje</th>
                <th>Tipo de vehiculo</th>
                <th>Creado el</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($vehicle = $vehicles->fetch_object()): ?>
              <tr>
                <td><?= $vehicle->PATENT ?></td>
                <td><?= $vehicle->BRAND ?></td>
                <td><?= $vehicle-> MODEL ?></td>
                <!-- <td><?= $vehicle->YEAR ?></td> -->
                <!-- <td><?= $vehicle->FUEL_TYPE ?></td> -->
                <!-- <td><?= $vehicle->TRANSMISSION ?></td> -->
                <td><?= $vehicle->COLOR ?></td>
                <!-- <td><?= $vehicle->CHASSIS_NUMBER ?></td> -->
                <td><?= $vehicle->MILEAGE ?></td>
                <td><?= $vehicle->VEHICLE_TYPE?></td>
                <td><?= $vehicle->CREATED_AT ?></td>
                <td>
                  <div class="icons">
                    <button type="button" class="btn btn-warning btn-square btn-xs" onclick=""><i
                        class="fa fa-edit"></i>
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
</div>