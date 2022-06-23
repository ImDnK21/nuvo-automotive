<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="<?= APP_URL . 'admin/dashboard' ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Administración</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTaller" aria-expanded="false" aria-controls="collapseTaller">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Gestión del taller
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseTaller" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= APP_URL . 'admin/ViewListClient' ?>">Clientes</a>
                        <a class="nav-link" href="<?= APP_URL . 'admin/ViewListMechanic' ?>">Mecánico</a>
                        <a class="nav-link" href="<?= APP_URL . 'admin/ViewListVehicle' ?>">Vehículos</a>
                        <a class="nav-link" href="<?= APP_URL . 'admin/ViewListVehicle' ?>">Ordenes de trabajo</a>

                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSupply" aria-expanded="false" aria-controls="collapseTaller">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Gestión del Insumos
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseSupply" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= APP_URL . 'admin/Supply' ?>">Catalogo de insumos</a>
                        <a class="nav-link" href="<?= APP_URL . '#' ?>">Administracion de insumos</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseService" aria-expanded="false" aria-controls="collapseTaller">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Gestión del Servicios
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseService" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= APP_URL . 'admin/Service' ?>">Catalogo de Servicios</a>
                        <a class="nav-link" href="<?= APP_URL . 'admin/ViewListMechanic' ?>">Administracion de Servicios</a>
                    </nav>
                </div>
                <a class="nav-link" href="<?= APP_URL . 'admin/ToDoList' ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    To-do List
                </a>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Conectado como:</div>
            <?= $_SESSION['logged']->EMAIL ?>
        </div>
    </nav>
</div>
<div id="layoutSidenav_content">
    