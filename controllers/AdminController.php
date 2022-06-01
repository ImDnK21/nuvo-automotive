<?php


class AdminController{
    public function dashboard(){
        utils::isAdmin();
        require_once('views/layout/sidebar.php');

        require_once('views/admin/dashboard.php');
    }

    public function ViewList() {
        Utils::isAdmin();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/client/ViewList.php');
        
    }
}