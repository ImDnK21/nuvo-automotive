<?php
require_once('models/mechanic.php');
require_once('models/client.php');
require_once('models/vehicle.php');

class AdminController{
 
   /**
    * If the user is not an admin, redirect to the login page.
    * and if user is an admin, redirecto to the Dashboard page.
    */ 
    public function dashboard(){
        utils::isAdmin();
        $cliente = new Client();
        $clientes = $cliente->totalClient();
        $mecanico = new Mechanic();
        $mecanicos = $mecanico->totalMechanics();

        require_once('views/layout/sidebar.php');
        require_once('views/admin/dashboard.php');
    }

    /**
     ** CLIENT FUNCTION'S METHODS
     * 
     * It's a function that displays a list of clients.
     */
    public function ViewListClient() {
        Utils::isAdmin();
        $client = new Client();
        $clients = $client->getAll();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/client/ViewList.php');
    }

    /**
     * It's a function that displays a form to create a new client.
     */
    public function AddClient() {
        Utils::isAdmin();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/client/AddClient.php');
    }

    /**
     * It's a function that displays a form to Edit a exist client.
     */
    public function EditClient() {
        Utils::isAdmin();
        if (isset($_GET['rut']) && !empty($_GET['rut'])) {
            $client = new Client();
            $client = $client->getByRut($_GET['rut']);
            require_once('views/layout/sidebar.php');
            require_once('views/admin/client/EditClient.php');
        }
    }

    /**
     * If the form is submitted, then create a new client object, set the properties of the client
     * object, and save the client object.
     */
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
        header('Location:' . APP_URL . 'admin/ViewListClient');
    }

    /**
     * It updates the client's data in the database.
     */
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
        header('Location:' . APP_URL . 'admin/ViewListClient');
    }


    /**
     * It deletes a selected client from the database.
     */
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
        header('Location:' . APP_URL . 'admin/ViewListClient');
    }
   

    /**
     ** MECHANICAL FUNCTION'S METHODS
     * 
     * It's a function that displays a list of Mechanics.
     */
    public function ViewListMechanic() {
        Utils::isAdmin();

        $mechanic = new Mechanic();
        $mechanics = $mechanic->getAll();

        require_once('views/layout/sidebar.php');
        require_once('views/admin/mechanic/ViewList.php');
        
    }

    /**
     * AddMechanic It's a function that displays a form to create a new Mechanic.
     * "Utils::isAdmin();" is a function that checks if the user is an admin, if not, it redirects to the
     * login page.
     */
     
    public function AddMechanic(){
        Utils::isAdmin();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/mechanic/AddMechanic.php');
    }

    /**
     * Utils::isAdmin();" It checks if the user is an admin, then checks if the rut is set and not empty, then it creates
     * a new mechanic object, then it gets the mechanic by rut, then it requires the sidebar and the
     * edit mechanic view.
     */
    public function EditMechanic(){
        Utils::isAdmin();
        if (isset($_GET['rut']) && !empty ($_GET['rut'])) {
            $mechanic = new Mechanic();
            $mechanic = $mechanic->getByRut($_GET['rut']);
            require_once('views/layout/sidebar.php');
            require_once('views/admin/mechanic/EditMechanic.php');
        } 
    }
    
    /**
     * If the form is submitted, then create a new Mechanic object, set the properties of the Mechanic
     * object, and save the Mechanic object.
     */
    public function SaveMechanic(){
        Utils::isAdmin();
        if (isset($_POST)) {
            $rut = isset($_POST['rut']) ? trim($_POST['rut']) : false;
            $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : false;
            $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : false;
            $phone = isset($_POST['phone']) ? trim($_POST['phone']) : false;
            $email = isset($_POST['email']) ? trim($_POST['email']) : false;


            if ($rut && $firstname && $lastname && $phone && $email) {
                $mechanic = new Mechanic();
                $mechanic->setRut($_POST['rut']);
                $mechanic->setFirstname($_POST['firstname']);
                $mechanic->setLastname($_POST['lastname']);
                $mechanic->setPhone($_POST['phone']);
                $mechanic->setEmail($_POST['email']);


                if ($mechanic->save()) {
                    $_SESSION['saveMechanic'] = 'Se agregó correctamente el mecanico';
                
                } else {
                    $_SESSION['saveMechanic'] = 'Error al agregar el mecanico';
                }
            } else {
                $_SESSION['saveMechanic'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListMechanic');
    }

    /**
     * It updates the Mechanic's data in the database.
     */
    public function UpdateMechanic() {
        Utils::isAdmin();
        if (isset($_POST)) {
            $rut = isset($_POST['rut']) ? trim($_POST['rut']) : false;
            $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : false;
            $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : false;
            $phone = isset($_POST['phone']) ? trim($_POST['phone']) : false;
            $email = isset($_POST['email']) ? trim($_POST['email']) : false;
           
            
            if ($rut && $firstname && $lastname && $phone && $email ) {
                $mechanic = new Mechanic();
                $mechanic->setRut($_POST['rut']);
                $mechanic->setFirstname($_POST['firstname']);
                $mechanic->setLastname($_POST['lastname']);
                $mechanic->setPhone($_POST['phone']);
                $mechanic->setEmail($_POST['email']);


                if ($mechanic->update()) {
                    $_SESSION['saveMechanic'] = 'Se actualizó correctamente el mecanico';
                } else {
                    // die('naonao');
                    $_SESSION['saveMechanic'] = 'Error al editar el mecanico';
                }
            } else {
                $_SESSION['saveMechanic'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListMechanic');
    }

    /**
     * It deletes a selected Mechanic from the database.
     */
    public function DeleteMechanic() {
        Utils::isAdmin();
        if (isset($_GET['rut'])) {
            $rut = $_GET['rut'];
            $mechanic = new Mechanic();
            $mechanic->setRut($rut);
            if ($mechanic->delete()) {
                $_SESSION['saveMechanic'] = 'Se eliminó correctamente el mecanico';
            } else {
                $_SESSION['saveMechanic'] = 'Error al eliminar el mecanico';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListMechanic');
    }

   /**
     ** VEHICLES FUNCTION'S METHODS
     * 
     * It's a function that displays a list of Mechanics.
     */
    public function ViewListVehicle(){
        Utils::isAdmin();

        $vehicle = new Vehicle();
        $vehicles = $vehicle->getAll();

        require_once('views/layout/sidebar.php');
        require_once('views/admin/vehicle/ViewList.php');
    }

    /**
     * AddVehicle It's a function that displays a form to create a new Vehicle.
     * "Utils::isAdmin();" is a function that checks if the user is an admin, if not, it redirects to the
     * login page.
     */
    public function AddVehicle(){
        Utils::isAdmin();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/vehicle/AddVehicle.php');
    }

   /**
    * Utils::isAdmin() = It checks if the user is an admin, then checks if the patent is set and not empty, then it
    * creates a new vehicle object, then it gets the vehicle by patent, then it requires the sidebar
    * and the edit vehicle view.
    */
    public function EditVehicle(){
        Utils::isAdmin();
        if (isset($_GET['patent']) && !empty ($_GET['patent'])) {
            $vehicle = new Vehicle();
            $vehicle = $vehicle->getByPatent($_GET['patent']);
            require_once('views/layout/sidebar.php');
            require_once('views/admin/vehicle/EditVehicle.php');
        } 
    }

    public function SaveVehicle(){
        Utils::isAdmin();
        if (isset($_POST)) {
            $patent = isset($_POST['patent']) ? trim($_POST['patent']) : false;
            $brand = isset($_POST['brand']) ? trim($_POST['brand']) : false;
            $model = isset($_POST['model']) ? trim($_POST['model']) : false;
            $year = isset($_POST['year']) ? trim($_POST['year']) : false;
            $fuel_type = isset($_POST['fuel_type']) ? trim($_POST['fuel_type']) : false;
            $transmission = isset($_POST['transmission']) ? trim($_POST['transmission']) : false;
            $color = isset($_POST['color']) ? trim($_POST['color']) : false;
            $chassis_number = isset($_POST['chassis_number']) ? trim($_POST['chassis_number']) : false;
            $mileage = isset($_POST['mileage']) ? trim($_POST['mileage']) : false;
            $vehicle_type = isset($_POST['vehicle_type']) ? trim($_POST['vehicle_type']) : false;

            if ($patent && $brand && $model && $year && $fuel_type && $transmission && $color && $chassis_number && $mileage && $vehicle_type) {
                $vehicle = new Vehicle();
                $vehicle->setPatent($_POST['patent']);
                $vehicle->setBrand($_POST['brand']);
                $vehicle->setModel($_POST['model']);
                $vehicle->setYear($_POST['year']);
                $vehicle->setFuelType($_POST['fuel_type']);
                $vehicle->setTransmission($_POST['transmission']);
                $vehicle->setColor($_POST['color']);
                $vehicle->setChassis_number($_POST['chassis_number']);
                $vehicle->setMileage($_POST['mileage']);
                $vehicle->setVehicle_type($_POST['vehicle_type']);
                
                if ($vehicle->save()) {
                    $_SESSION['saveVehicle'] = 'Se agregó correctamente el vehiculo';
                
                } else {
                    $_SESSION['saveVehicle'] = 'Error al agregar el vehiculo';
                }
            } else {
                $_SESSION['saveVehicle'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListVehicle');
    }

    public function UpdateVehicle() {
        Utils::isAdmin();
        if (isset($_POST)) {
            $patent = isset($_POST['patent']) ? trim($_POST['patent']) : false;
            $brand = isset($_POST['brand']) ? trim($_POST['brand']) : false;
            $model = isset($_POST['model']) ? trim($_POST['model']) : false;
            $year = isset($_POST['year']) ? trim($_POST['year']) : false;
            $fuel_type = isset($_POST['fuel_type']) ? trim($_POST['fuel_type']) : false;
            $transmission = isset($_POST['transmission']) ? trim($_POST['transmission']) : false;
            $color = isset($_POST['color']) ? trim($_POST['color']) : false;
            $chassis_number = isset($_POST['chassis_number']) ? trim($_POST['chassis_number']) : false;
            $mileage = isset($_POST['mileage']) ? trim($_POST['mileage']) : false;
            $vehicle_type = isset($_POST['vehicle_type']) ? trim($_POST['vehicle_type']) : false;

            if ($patent && $brand && $model && $year && $fuel_type && $transmission && $color && $chassis_number && $mileage && $vehicle_type) {
                $vehicle = new Vehicle();
                $vehicle->setPatent($_POST['patent']);
                $vehicle->setBrand($_POST['brand']);
                $vehicle->setModel($_POST['model']);
                $vehicle->setYear($_POST['year']);
                $vehicle->setFuelType($_POST['fuel_type']);
                $vehicle->setTransmission($_POST['transmission']);
                $vehicle->setColor($_POST['color']);
                $vehicle->setChassis_number($_POST['chassis_number']);
                $vehicle->setMileage($_POST['mileage']);
                $vehicle->setVehicle_type($_POST['vehicle_type']);
                
                if ($vehicle->update()) {
                    $_SESSION['saveVehicle'] = 'Se actualizó correctamente el vehiculo';
                } else {
                    $_SESSION['saveVehicle'] = 'Error al actualizar el vehiculo';
                }
            } else {
                $_SESSION['saveVehicle'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListVehicle');
    }

    /**
     * It deletes a selected Vehicle from the database.
     */
    public function DeleteVehicle() {
        Utils::isAdmin();
        if (isset($_GET['patent'])) {
            $patent = $_GET['patent'];
            $vehicle = new Vehicle();
            $vehicle->setPatent($patent);
            if ($vehicle->delete()) {
                $_SESSION['saveVehicle'] = 'Se eliminó correctamente el vehiculo';
            } else {
                $_SESSION['saveVehicle'] = 'Error al eliminar el vehiculo';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListVehicle');
    }

   /**
    * This function is called when the user clicks on the TodoList link in the sidebar. It checks if
    * the user is an admin, and if so, it loads the sidebar and the TodoList page.
    */
    public function TodoList() {
        Utils::isAdmin();

        require_once('views/layout/sidebar.php');
        require_once('views/admin/TodoList.php');
    }

     public function  Supplies(){
        Utils::isAdmin();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/supplies/index.php');
    }

   

}