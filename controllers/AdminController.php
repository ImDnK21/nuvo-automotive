<?php
require_once('models/mechanic.php');
require_once('models/client.php');
require_once('models/vehicle.php');

class AdminController{
    public function dashboard(){
        utils::isAdmin();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/dashboard.php');
    }

    public function ViewList() {
        Utils::isAdmin();
        $client = new Client();
        $clients = $client->getAll();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/client/ViewList.php');
    }

    public function AddClient() {
        Utils::isAdmin();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/client/AddClient.php');
    }

    public function EditClient() {
        Utils::isAdmin();
        if (isset($_GET['rut']) && !empty($_GET['rut'])) {
            $client = new Client();
            $client = $client->getByRut($_GET['rut']);
            require_once('views/layout/sidebar.php');
            require_once('views/admin/client/EditClient.php');
        }
    }

    public function SaveClient() {
        Utils::isAdmin();
        if (isset($_POST)) {
            $rut = isset($_POST['rut']) ? trim($_POST['rut']) : false;
            $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : false;
            $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : false;
            $second_lastname = isset($_POST['second_lastname']) ? trim($_POST['second_lastname']) : false;
            $phone = isset($_POST['phone']) ? trim($_POST['phone']) : false;
            $email = isset($_POST['email']) ? trim($_POST['email']) : false;
            $address = isset($_POST['address']) ? trim($_POST['address']) : false;
            $commune = isset($_POST['commune']) ? trim($_POST['commune']) : false;

            if ($rut && $firstname && $lastname && $second_lastname && $phone && $email && $address && $commune) {
                $client = new Client();
                $client->setRut($_POST['rut']);
                $client->setFirstname($_POST['firstname']);
                $client->setLastname($_POST['lastname']);
                $client->setSecond_lastname($_POST['second_lastname']);
                $client->setPhone($_POST['phone']);
                $client->setEmail($_POST['email']);
                $client->setAddress($_POST['address']);
                $client->setCommune($_POST['commune']);

                if ($client->save()) {
                    $_SESSION['saveClient'] = 'Se agregó correctamente el cliente';
                } else {
                    $_SESSION['saveClient'] = 'Error al agregar el cliente';
                }
            } else {
                $_SESSION['saveClient'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewList');
    }

    public function UpdateClient() {
        Utils::isAdmin();
        if (isset($_POST)) {
            $rut = isset($_POST['rut']) ? trim($_POST['rut']) : false;
            $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : false;
            $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : false;
            $second_lastname = isset($_POST['second_lastname']) ? trim($_POST['second_lastname']) : false;
            $phone = isset($_POST['phone']) ? trim($_POST['phone']) : false;
            $email = isset($_POST['email']) ? trim($_POST['email']) : false;
            $address = isset($_POST['address']) ? trim($_POST['address']) : false;
            $commune = isset($_POST['commune']) ? trim($_POST['commune']) : false;

            if ($rut && $firstname && $lastname && $second_lastname && $phone && $email && $address && $commune) {
                $client = new Client();
                $client->setRut($_POST['rut']);
                $client->setFirstname($_POST['firstname']);
                $client->setLastname($_POST['lastname']);
                $client->setSecond_lastname($_POST['second_lastname']);
                $client->setPhone($_POST['phone']);
                $client->setEmail($_POST['email']);
                $client->setAddress($_POST['address']);
                $client->setCommune($_POST['commune']);

                if ($client->update()) {
                    $_SESSION['saveClient'] = 'Se actualizó correctamente el cliente';
                } else {
                    // die('naonao');
                    $_SESSION['saveClient'] = 'Error al editar el cliente';
                }
            } else {
                $_SESSION['saveClient'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewList');
    }

    public function DeleteClient() {
        Utils::isAdmin();
        if (isset($_GET['rut'])) {
            $rut = $_GET['rut'];
            $client = new Client();
            $client->setRut($rut);
            if ($client->delete()) {
                $_SESSION['saveClient'] = 'Se eliminó correctamente el cliente';
            } else {
                $_SESSION['saveClient'] = 'Error al eliminar el cliente';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewList');
    }

    public function ViewListMechanic() {
        Utils::isAdmin();

        $mechanic = new Mechanic();
        $mechanics = $mechanic->getAll();

        require_once('views/layout/sidebar.php');
        require_once('views/admin/mechanic/ViewList.php');
        
    }

    public function ViewListVehicle(){
        Utils::isAdmin();

        $vehicle = new Vehicle();
        $vehicles = $vehicle->getAll();

        require_once('views/layout/sidebar.php');
        require_once('views/admin/vehicle/ViewList.php');
    }

    public function TodoList() {
        Utils::isAdmin();

        require_once('views/layout/sidebar.php');
        require_once('views/admin/TodoList.php');
    }

}