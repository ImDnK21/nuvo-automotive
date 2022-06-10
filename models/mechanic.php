<?php

class Mechanic {
   /* Declaring the properties of the class. */
    private $db;
    private $rut;
    private $firstname;
    private $lastname;
    private $email;
    private $phone;

/* Constructor. */
public function __construct() {
    $this->db = Database::connect();
    }

/* Getters. */
function getRut() {
    return $this->rut;
}

function getFirstname() {
    
    return $this->firstname;
}

function getLastname() {
    return $this->lastname;
}

function getEmail() {
    return $this->email;
}

function getPhone() {
    return $this->phone;
}

  /* Setters. */
  /* Real_escape_string is used to prevent SQL injection. */

function setRut($rut){
    $this->rut = $this->db->escape_string($rut);
}

function setFirstname($firstname){
    $this->firstname = $this->db->escape_string($firstname);
}

function setLastname($lastname) {
    $this->lastname = $this->db->escape_string($lastname);
}

function setEmail($email) {
    $this->email = $this->db->escape_string($email);
}

function setPhone($phone) {
    $this->phone = $this->db->escape_string($phone);
}


/**
   * This function returns all the Mechanics from the database.
   * 
   * @return A query object.
   */
public function getAll(){
    $query = "SELECT * FROM MECHANIC";
    $mechanics = $this->db->query($query);
    return $mechanics;
}

/**
   * It gets a mechanic by its rut
   * 
   * @param rut 12345678-9
   * 
   * @return An object.
   */

public function getByRut($rut){
    $query = "SELECT * FROM MECHANIC WHERE RUT = '$rut'";
    $mechanic = $this->db->query ($query);
    return $mechanic->fetch_object();
  }

  /**
   * It saves the data from the form into the database.
   * 
   * @return The result of the query.
   */

public function save(){
    $sql = "INSERT INTO MECHANIC (RUT,FIRSTNAME, LASTNAME, PHONE, EMAIL) VALUES ('{$this->getRut()}','{$this->getFirstname()}' ,'{$this->getLastname()}', '{$this->getPhone()}', '{$this->getEmail()}')";
    $save = $this->db->query($sql);
    $result = false;
    if ($save) {
        $result = true;
    }
    return $result;   
}

/**
   * It updates a mechanic's information in the database.
   * Rut is the primary key. Can't be updated or modified.
   * all the other fields can be updated.
   * 
   * @return The result of the query.
   */

public function update(){
    $sql = "UPDATE MECHANIC SET FIRSTNAME = '{$this->getFirstname()}', LASTNAME = '{$this->getLastname()}', PHONE = '{$this->getPhone()}', EMAIL = '{$this->getEmail()}' WHERE RUT = '{$this->getRut()}';";
    $update = $this->db->query($sql);
    $result = false;
    if($update){
      $result = true;
    }
    return $result;
  }

/**
   * It deletes a row from the database table MECHANIC where the RUT column is equal to the value of the
   * RUT property of the object
   * 
   * @return The result of the query.
   */

  public function delete() {
    $sql = "DELETE FROM MECHANIC WHERE RUT = '{$this->getRut()}';";
    $delete = $this->db->query($sql);
    $result = false;
    if($delete){
      $result = true;
    }
    return $result;
  }

}

?>