<?php

class Vehicle {

    /* Declaring the properties of the class. */
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

    /* Constructor. */
    public function __construct() {
        $this->db = Database::connect();
    }

     /* Getters. */
    public function getPatent() {
        return $this->patent;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getFuel_type() {
        return $this->fuel_type;
    }

    public function getTransmission() {
        return $this->transmission;
    }

    public function getColor() {
        return $this->color;
    }

    public function getChassisNumber() {
        return $this->chasiss_number;
    }

    public function getMileage() {
        return $this->mileage;
    }

    public function getVehicleType() {
        return $this->vehicle_type;
    }

    /* Setters. */
    /* Real_escape_string is used to prevent SQL injection. */


    public function setPatent($patent) {
        $this->patent = $this->db->escape_string($patent);
    }

    public function setBrand($brand) {
        $this->brand = $this->db->escape_string($brand);
    }

    public function setModel($model) {
        $this->model = $this->db->escape_string($model);
    }

    public function setYear($year) {
        $this->year = $this->db->escape_string($year);
    }

    public function setFuelType($fuel_type) {
        $this->fuel_type = $this->db->escape_string($fuel_type);
    }
    
    public function setTransmission($transmission) {
        $this->transmission = $this->db->escape_string($transmission);
    }

    public function setColor($color){
        $this->color = $this->db->escape_string($color);
    }

   public function setChassis_number($chassis_number){
        $this->chassis_number = $this->db->escape_string($chassis_number);
   }

    public function setMileage($mileage) {
        $this->mileage = $this->db->escape_string($mileage);
    }

    public function setVehicle_type($vehicle_type) {
        $this->vehicle_type = $this->db->escape_string($vehicle_type);
    }

    /**
   * This function returns all the Vehicle from the database.
   * 
   * @return A query object.
   */
    public function getAll(){
        $query = "SELECT * FROM VEHICLE";
        $vehicles = $this->db->query($query);
        return $vehicles;
    }

    /**
   * It gets a Vehicle by its Patent
   * 
   * @param Patent ABCD-12
   * 
   * @return An object.
   */
    public function getByPatent($patent){
        $query = "SELECT * FROM VEHICLE WHERE patent = '$patent'";
        $vehicle = $this->db->query($query);
        return $vehicle;
    }

    /**
   * It saves the data from the form into the database.
   * 
   * @return The result of the query.
   */
    public function save(){
        $sql = "INSERT INTO VEHICLE (PATENT, BRAND, MODEL, YEAR, FUEL_TYPE, TRANSMISSION, COLOR, CHASSIS_NUMBER, MILEAGE, VEHICLE_TYPE) VALUES ('{$this->getPatent()}', '{$this->getBrand()}', '{$this->getModel()}', '{$this->getYear()}', '{$this->getFuel_Type()}', '{$this->getTransmission()}', '{$this->getColor()}', '{$this->getChassisNumber()}', '{$this->getMileage()}', '{$this->getVehicleType()}');";
        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    /**
   * It updates a Vehicle's information in the database.
   * Patent is the primary key. Can't be updated or modified.
   * all the other fields can be updated.
   * 
   * @return The result of the query.
   */
    public function update(){
        $sql = "UPDATE VEHICLE SET BRAND = '{$this->getBrand()}', MODEL = '{$this->getModel()}', YEAR = '{$this->getYear()}', FUEL_TYPE = '{$this->getFuel_Type()}', TRANSMISSION = '{$this->getTransmission()}', COLOR = '{$this->getColor()}', CHASSIS_NUMBER = '{$this->getChassisNumber()}', MILEAGE = '{$this->getMileage()}', VEHICLE_TYPE = '{$this->getVehicleType()}' WHERE PATENT = '{$this->getPatent()}';";
        $update = $this->db->query($sql);
        $result = false;
        if ($update) {
            $result = true;
        }
        return $result;
    }

     /**
   * It deletes a row from the database table VEHICLE where the PATENT column is equal to the value of the
   * PATENT property of the object
   * 
   * @return The result of the query.
   */
    public function delete(){
        $sql = "DELETE FROM VEHICLE WHERE PATENT = '{$this->getPatent()}';";
        $delete = $this->db->query($sql);
        $result = false;
        if ($delete) {
            $result = true;
        }
        return $result;
    }





}
?>
