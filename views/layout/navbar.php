<nav class="sb-topnav navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a href="<?= APP_URL ?>" title="Página de inicio" class="navbar-brand fw-bold">
      <img src="<?= APP_URL . 'assets/img/logo_x28.png' ?>" alt="<?= APP_NAME ?>" class="logo">
      Nuvo Automotive
    </a>
    <button class="btn btn-link btn-sm order-1 order-lg-0 ms-3 me-0 me-lg-3" id="sidebarToggle" href="#!">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="" class="nav-link">Inicio</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Contactanos</a>
        </li>
      </ul>
      </button>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php if (isset($_SESSION['logged'])) { ?>
        <div class="nav-logout">
          <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?= APP_URL. 'account/profile'  ?>">Perfil</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a href="<?= APP_URL . 'account/logout' ?>" class="dropdown-item">Cerrar sesión</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <?php } else { ?>
        <li class="nav-item">
          <a href="<?= APP_URL . 'account/login' ?>" class="nav-link">Iniciar sesión</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
