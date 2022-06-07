<?php
require_once('models/mechanic.php');
require_once('models/client.php');

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

    public function ViewListMechanic() {
        Utils::isAdmin();

        $mechanic = new Mechanic();
        $mechanics = $mechanic->getAll();

        require_once('views/layout/sidebar.php');
        require_once('views/admin/mechanic/ViewList.php');
        
    }

    // public function ViewList(){
    //     Utils::isAdmin();

    //     $mecanico = new Mechanic();
    //     $mecanicos = $mecanico->getAll();

    //     require_once('views/layout/sidebar.php');
    //     require_once('views/admin/mechanic/ViewList.php');
    // }

}