<?php
class ClientController{
    public function view(){
        utils::isAuth();
        require_once('views/client/viewClient.php');
    }
}