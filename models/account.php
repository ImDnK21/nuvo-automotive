<?php 
class Account {
  private $db;
  private $id;
  private $role;
  private $rut;
  private $firstname;
  private $lastname;
  private $email;
  private $password;
  private $created_at;
  private $updated_at;


  public function __construct() {
    $this->db = Database::connect();
  }

  public function getId() {
    return $this->id;
  }

  public function getRole() {
    return $this->role;
  }

  public function getRut() {
    return $this->rut;
  }

  public function getFirstname() {
    return $this->firstname;
  }

  public function getLastname() {
    return $this->lastname;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getPassword() {
    return password_hash($this->db->escape_string($this->password), PASSWORD_DEFAULT);
  }
  public function getCreatedAt() {
    return $this->created_at;
  }

  public function getUpdatedAt() {
    return $this->updated_at;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setRole($role) {
    $this->role = $this->db->escape_string($role);
  }

  public function setRut($rut) {
    $this->rut = $this->db->escape_string($rut);
  }

  public function setFirstname($firstname) {
    $this->firstname = $this->db->escape_string($firstname);
  }

  public function setLastname($lastname) {
    $this->lastname = $this->db->escape_string($lastname);
  }

  public function setEmail($email) {
    $this->email = $this->db->escape_string($email);
  }

  public function setPassword($password) {
    $this->password = $password;
  }
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }


  /* Saving the data into the database. */
  public function save() {
    $query = "INSERT INTO USER (ID, RUT ,FIRSTNAME, LASTNAME, EMAIL, PASSWORD) VALUES ('{$this->getId()}','{$this->getRut()}', '{$this->getFirstname()}', '{$this->getLastname()}', '{$this->getEmail()}', '{$this->getPassword()}')";
    // die($query);
    $save = $this->db->query($query);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  /**
   * It updates the user's information in the database
   * 
   * @return The result of the query.
   */

  public function update() {
    $query = "UPDATE USER SET FIRSTNAME = '{$this->getFirstname()}', LASTNAME = '{$this->getLastname()}', EMAIL = '{$this->getEmail()}' WHERE id = {$this->id}";
    $update = $this->db->query($query);
    $result = false;
    if ($update) {
      $result = true;
    }
    return $result;
  }

  /**
   * It takes the email and password from the form, queries the database for a user with that email,
   * and if it finds one, it checks if the password matches the hashed password in the database. If it
   * does, it returns the user object.
   * 
   * @return The result of the login function.
   */
  public function login() {
    $result = false;
    $email = $this->email;
    $password = $this->password;
    
    $query = "SELECT * FROM USER WHERE EMAIL = '{$email}' LIMIT 1";
    $login = $this->db->query($query);
    if ($login && $login->num_rows == 1) {
      $account = $login->fetch_object();
      if (password_verify($password, $account->PASSWORD)) {
        $result = $account;

      }
    }
    return $result;
  }
}
