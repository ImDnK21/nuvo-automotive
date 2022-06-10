
<div class="container py-3">
    <div class="card">
        <div class="card-header">
            <span class="fw-bold">Agregar Vehiculo</span>
        </div>
        <div class="card-body">
            <form action="<?= APP_URL . 'admin/UpdateVehicle' ?>" method="post" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="patent" class="form-label required">Patente</label>
                            <input type="text" name="patent" value="<?=$vehicle->PATENT?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="brand" class="form-label required">Marca</label>
                            <input type="text" name="brand" value="<?=$vehicle->BRAND?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="model" class="form-label required">Modelo</label>
                            <input type="text" name="model" value="<?=$vehicle->MODEL ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="year" class="form-label required">Año de Fabricacion</label>
                            <input type="number" name="year" value="<?=$vehicle->YEAR?>" class="form-control"
                                placeholder="YYYY" min="1980" max="2023">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="fuel_type" class="form-label required" value="<?=$vehicle->FUEL_TYPE?>" >Tipo de Combustible</label>
                            <select name="fuel_type" class="form-select">
                                <option selected="selected" value="nuevo">Bencina</option>
                                <option value="diesel">Diesel</option>
                                <option value="electric">Electrico</option>
                                <option value="natural_gas">Gas Natural</option>
                                <option value="hybrid">Hibrido (Gasolina - Gas natural)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="transmission" class="form-label required" value="<?=$vehicle->TRANSMISSION?>" >Transmision</label>
                            <select name="transmission" class="form-select">
                                <option selected="selected" value="mechanic">Mecanico</option>
                                <option value="automatic">Automatico</option>
                                <option value="usado">Electrico</option>
                                <option value="cvt">CVT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-4">
                            <label for="color" class="form-label required">Color Primario</label>
                            <div class="control">
                                <input type="color" name="color" value="<?=$vehicle->COLOR ?>" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="chassis_number" class="form-label required">N° de Chasis</label>
                            <input type="text" name="chassis_number" value="<?=$vehicle->CHASSIS_NUMBER?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="mileage" class="form-label required">Kilometraje</label>
                            <input type="text" name="mileage" value="<?=$vehicle->MILEAGE ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <label for="vehicle_type" class="form-label required" value="<?=$vehicle->VEHICLE_TYPE?>">Tipo de Vehiculo</label>
                            <select name="vehicle_type" class="form-select">
                                <option selected="selected" value="sedan">Sedan</option>
                                <option value="Station_wagon">Stating Wagon</option>
                                <option value="hatchback">HatchBack</option>
                                <option value="suv">SUV</option>
                                <option value="sport">Deportivo</option>
                                <option value="commercial_vehicle">Vehiculo Comercial</option>
                                <option value="van">VAN</option>
                                <option value="pickup">PickUp</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary float-end">Agregar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>