<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Informacion</div>
                <a class="nav-link" href="<?= APP_URL . '#' ?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-car"></i></div>
                    Mi Vehiculo
                </a>
                <div class="sb-sidenav-menu-heading">Administración</div>
                <a class="nav-link" href="<?= APP_URL . 'admin/Supplies' ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Mi Orden de Trabajo
                </a>
                <a class="nav-link" href="<?= APP_URL . '' ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Servicios Solicitados
                </a>
                <a class="nav-link" href="<?= APP_URL . '' ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Historial de Ordenes de trabajos
                </a>
                <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a> -->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Conectado como:</div>
            <?= $_SESSION['logged']->EMAIL ?>
        </div>
    </nav>
</div>
<div id="layoutSidenav_content">