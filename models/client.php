<?php

class Client {
private $db;
private $rut;
private $firstname;
private $lastname;
private $second_lastname;
private $phone;
private $email;

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

public function getAll(){
    $clientes = $this->db->query ("SELECT * FROM CLIENT ORDER BY id ASC");
    return $clientes;
}

public function save(){
    $sql = "INSERT INTO CLIENT (RUT, FIRSTNAME, LASTNAME, SECOND_LASTNAME, PHONE, EMAIL) VALUES('{$this->getRut()}', '{$this->getFirstname()}', '{$this->getLastname()}', '{$this->getSecondLastname()}', '{$this->getPhone()}', '{$this->getEmail()}');";

    $save = $this->db->query($sql);
    $result = false;
    if($save){
        $result = true;
    }
    return $result;
}


}


?>