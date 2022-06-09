<?php

class Mechanic {
    private $db;
    private $rut;
    private $firstname;
    private $lastname;
    private $email;
    private $phone;
            
public function __construct() {
    $this->db = Database::connect();
    }

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



public function getAll(){
    $query = "SELECT * FROM MECHANIC";
    $mechanics = $this->db->query($query);
    return $mechanics;
}

public function getByRut($rut){
    $query = "SELECT * FROM MECHANIC WHERE RUT = '$rut'";
    $mechanic = $this->db->query ($query);
    return $mechanic->fetch_object();
  }




public function save() {
    $query = "INSERT INTO MECHANIC (RUT, FIRSTNAME, LASTNAME, EMAIL, PHONE) VALUES ('{$this->rut}', '{$this->firstname}', '{$this->lastname}', '{$this->email}', '{$this->phone}')";
    $save = $this->db->query($query);
    $result = false;
    if ($save) {
        $result = true;
    }
    return $result;

}

}

?>