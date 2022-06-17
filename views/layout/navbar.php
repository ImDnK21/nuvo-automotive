<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
<a href="<?= APP_URL ?>" title="Página de inicio" class="navbar-brand fw-bold">
      <img src="<?= APP_URL . 'assets/img/logo_x28.png' ?>" alt="<?= APP_NAME ?>" class="logo">
      Nuvo Automotive
    </a>  <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a href="<?= APP_URL . 'admin/dashboard' ?>" class="nav-link">Inicio</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">Contáctanos</a>
    </li>
  </ul>
  <ul class="navbar-nav ms-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="<?= APP_URL . 'account/profile' ?>">Perfil</a></li>
        <li>
          <hr class="dropdown-divider" />
        </li>
        <li><a class="dropdown-item" href="<?= APP_URL . 'account/logout' ?>">Cerrar sesión</a></li>
      </ul>
    </li>
  </ul>
</nav>
<div id="layoutSidenav">