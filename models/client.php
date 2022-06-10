<?php
class Client {

  /* Declaring the properties of the class. */
  private $db;
  private $rut;
  private $firstname;
  private $lastname;
  private $second_lastname;
  private $phone;
  private $email;
  private $address;
  private $commune;

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


  /* Setters. */
  /* Real_escape_string is used to prevent SQL injection. */
  
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

  /**
   * This function returns all the clients from the database.
   * 
   * @return A query object.
   */
  public function getAll(){
    $query = "SELECT * FROM CLIENT ORDER BY RUT ASC";
    $clientes = $this->db->query ($query);
    return $clientes;
  }

  /**
   * It gets a client by its rut
   * 
   * @param rut 12345678-9
   * 
   * @return An object.
   */
  public function getByRut($rut){
    $query = "SELECT * FROM CLIENT WHERE RUT = '$rut'";
    $client = $this->db->query ($query);
    return $client->fetch_object();
  }

  /**
   * It saves the data from the form into the database.
   * 
   * @return The result of the query.
   */
  public function save(){
    $sql = "INSERT INTO CLIENT (RUT, FIRSTNAME, LASTNAME, SECOND_LASTNAME, PHONE, EMAIL, ADDRESS, COMMUNE) VALUES('{$this->getRut()}', '{$this->getFirstname()}', '{$this->getLastname()}', '{$this->getSecondLastname()}', '{$this->getPhone()}', '{$this->getEmail()}','{$this->getAddress()}', '{$this->getCommune()}');";
    $save = $this->db->query($sql);
    $result = false;
    if($save){
      $result = true;
    }
    return $result;
  }

  /**
   * It updates a client's information in the database.
   * Rut is the primary key. Can't be updated or modified.
   * all the other fields can be updated.
   * 
   * @return The result of the query.
   */
  public function update(){
    $sql = "UPDATE CLIENT SET FIRSTNAME = '{$this->getFirstname()}', LASTNAME = '{$this->getLastname()}', SECOND_LASTNAME = '{$this->getSecondLastname()}', PHONE = '{$this->getPhone()}', EMAIL = '{$this->getEmail()}', ADDRESS = '{$this->getAddress()}', COMMUNE = '{$this->getCommune()}' WHERE RUT = '{$this->getRut()}';";
    $update = $this->db->query($sql);
    $result = false;
    if($update){
      $result = true;
    }
    return $result;
  }

  /**
   * It deletes a row from the database table CLIENT where the RUT column is equal to the value of the
   * RUT property of the object
   * 
   * @return The result of the query.
   */
  public function delete() {
    $sql = "DELETE FROM CLIENT WHERE RUT = '{$this->getRut()}';";
    $delete = $this->db->query($sql);
    $result = false;
    if($delete){
      $result = true;
    }
    return $result;
  }
}
?>