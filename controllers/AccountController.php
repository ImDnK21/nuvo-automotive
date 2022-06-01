<?php
require_once('models/account.php');


class AccountController {
  public function login() {
    require_once('views/account/login.php');
    Utils::title('Iniciar sesión');
  }

  // public function register() {
    // require_once('views/account/register.php');
  // }

  public function signup() {
    if (isset($_POST) && !empty($_POST)) {
      $id = isset($_POST['id']) ? trim($_POST['id']) : false;
      $rut = isset($_POST['rut']) ? trim($_POST['rut']) : false;
      $firstname = isset($_POST['firstname']) ? ucwords(trim($_POST['firstname'])) : false;
      $lastname = isset($_POST['lastname']) ? ucwords(trim($_POST['lastname'])) : false;
      $email = isset($_POST['email']) ? trim($_POST['email']) : false;
      $password = isset($_POST['password']) ? trim($_POST['password']) : false;
      $confirmPassword = isset($_POST['confirm-password']) ? trim($_POST['confirm-password']) : false;

      if ($id && $rut && $firstname && $lastname && $email && $password && $confirmPassword) {
        if ($password === $confirmPassword) {
          $account = new Account();
          $account->setId($id);
          $account->setRut($rut);
          $account->setFirstname($firstname);
          $account->setLastname($lastname);
          $account->setEmail($email);
          $account->setPassword($password);

          if ($account->save()) {
            $_SESSION['signup_message'] = 'Usuario creado correctamente';
            $_SESSION['signup_message_type'] = 'success';
          } else {
            $_SESSION['signup_message'] = 'Error al crear la cuenta. Por favor intente nuevamente.';
            $_SESSION['signup_message_type'] = 'warning';
          }
        } else {
          $_SESSION['signup_message'] = 'Las contraseñas no coinciden.';
          $_SESSION['signup_message_type'] = 'warning';
        }
      } else {
        $_SESSION['signup_message'] = 'Rellena todos los campos.';
        $_SESSION['signup_message_type'] = 'warning';
      }
    }
    header('Location:' . APP_URL . 'account/login');
  }

  public function signin() {
    if (isset($_POST) && !empty($_POST)) {
      $account = new Account();
      $account->setEmail($_POST['email']);
      $account->setPassword($_POST['password']);

      $auth = $account->login();

      if ($auth && is_object($auth)) {
        $_SESSION['logged'] = $auth;

        if ($auth->ROLE == 'admin') {
          $_SESSION['admin'] = true;
          header('Location:' . APP_URL . 'admin/dashboard');
        }else{
          header('Location:' . APP_URL . 'client/view');
        }

        
      } else {
        $_SESSION['login_message'] = 'Usuario o contraseña incorrectos';
        $_SESSION['login_message_type'] = 'warning';

        header('Location:' . APP_URL . 'account/login');
      }
    }
  }

  public function logout() {
    if (isset($_SESSION['logged'])) {
      unset($_SESSION['logged']);
    }

    if (isset($_SESSION['admin'])) {
      unset($_SESSION['admin']);
    }

    header('Location:' . APP_URL . 'account/login');
  }
}