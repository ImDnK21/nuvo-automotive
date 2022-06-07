<?php

class Client {
private $db;
private $rut;
private $firstname;
private $lastname;
private $second_lastname;
private $phone;
private $email;
private $address;
private $commune;

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

function getSecondLastname() {
  return $this->second_lastname;
}

function getPhone() {
  return $this->phone;
}

function getEmail() {
  return $this->email;
}

function getAddress() {
  return $this->address;
}

function getCommune() {
  return $this->commune;
}

function setRut($rut){
    $this->rut = $this->db->escape_string($rut);
}

function setFirstname($firstname){
    $this->firstname = $this->db->escape_string($firstname);
}

function setLastname($lastname){
    $this->lastname = $this->db->escape_string($lastname);
}

function setSecond_lastname($second_lastname){
    $this->second_lastname = $this->db->escape_string($second_lastname);
}

function setPhone($phone){
    $this->phone = $this->db->escape_string($phone);
}
function setEmail($email){
    $this->email = $this->db->escape_string($email);
}

function setAddress($address){
  $this->address = $this->db->escape_string($address);
}

function setCommune($commune){
  $this->commune = $this->db->escape_string($commune);
}

public function getAll(){
    $query = "SELECT * FROM CLIENT ORDER BY RUT ASC";
    $clientes = $this->db->query ($query);
    // die ($query);
    return $clientes;
    
}

public function save(){
    $query = "INSERT INTO CLIENT (RUT, FIRSTNAME, LASTNAME, SECOND_LASTNAME, PHONE, EMAIL, ADDRESS, COMMUNE) VALUES('{$this->getRut()}', '{$this->getFirstname()}', '{$this->getLastname()}', '{$this->getSecondLastname()}', '{$this->getPhone()}', '{$this->getEmail()}','{$this->getAddress()}','{$this->getCommune()}');";

    $save = $this->db->query($query);
    $result = false;
    if($save){
        $result = true;
    }
    return $result;
}

}

?>