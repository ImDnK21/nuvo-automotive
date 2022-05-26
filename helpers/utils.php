<?php
class Utils {
  public static function isAuth() {
    if (!isset($_SESSION['logged'])) {
      header('Location: ' . APP_URL . 'account/login');
    } else {
      return true;
    }
  }

  public static function isAdmin() {
    if (!isset($_SESSION['admin'])) {
      header('Location:' . APP_URL);
    } else {
      return true;
    }
  }

  public static function showError() {
    $error = new errorController();
    $error->index();
  }
  public static function title($title) {
    echo '<script>document.title = "' . $title . ' | ' . APP_NAME .'"</script>';
  }
// Interpreta los roles de permisos según los valores de la base de datos
public static function getRole($role) {
  $value = '';

  switch ($role) {
    case 'admin': $value = 'Administrador'; break;
    case 'user': $value = 'Usuario'; break;
  }

  return $value;
}

  
}
