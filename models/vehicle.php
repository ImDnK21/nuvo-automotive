<?php

class Vehicle {
    private $db;
    private $patent;
    private $brand;
    private $model;
    private $year;
    private $fuel_type;
    private $transmission;
    private $color;
    private $chasis_number;
    private $mileage;
    private $vehicle_type;

    public function __construct() {
        $this->db = Database::connect();
    }






}



?>
