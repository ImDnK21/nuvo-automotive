<?php
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

}