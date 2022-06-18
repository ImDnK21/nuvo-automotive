<?php
class ClientController{
    public function view(){
        utils::isAuth();
        require_once('views/client/viewClient.php');
        require_once('views/layout/sidebarClient.php');
    }

    public function save() {
        Utils::isAdmin();
        if (isset($_POST)) {
            $rut = isset($_POST['rut']) ? $_POST['rut'] : false;
            $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
            $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : false;
            $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
            $second_lastname = isset($_POST['second_lastname']) ? $_POST['second_lastname'] : false;
            $phone = isset($_POST['phone']) ? $_POST['phone'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;

            if ($rut && $lastname && $firstname && $lastname && $second_lastname && $phone && $email) {
                $client = new Client();
                $client->setRut($rut);
                $client->setFirstname($firstname);
                $client->setLastname($lastname);
                $client->setSecond_lastname($second_lastname);
                $client->setPhone($phone);
                $client->setEmail($email);

                if ($client->save()) {
                    $_SESSION['signup_message'] = 'Usuario creado correctamente';
                    $_SESSION['signup_message_type'] = 'success';
                } else {
                    $_SESSION['signup_message'] = 'Error al crear el usuario';
                    $_SESSION['signup_message_type'] = 'danger';
                }
            } else {
                $_SESSION['signup_message'] = 'Todos los campos son obligatorios';
                $_SESSION['signup_message_type'] = 'danger';
            }
        } else {
            $_SESSION['signup_message'] = 'Las Contraseñas no coinciden';
            $_SESSION['signup_message_type'] = 'danger';
        }
        header("Location:" . APP_URL . 'client/list.php');
    }











}