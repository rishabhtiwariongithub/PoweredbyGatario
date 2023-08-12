<?php

class Config {
  // Database connection properties
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $db = "logindata";

  public $conn; // Declare a public property to store the database connection object

  // Project config properties
  private $projectUrl = 'http://localhost/PoweredbyGatario-main';

  public function __construct() {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
    if ($this->conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
    }
  }

  // Simple method to get url within site
  public function url($targetUrl) {
    return "{$this->projectUrl}/$targetUrl";
  }
}

// Creating an instance of the Conn class
$config = new Config();

// Accessing the database connection object
$connection = $config->conn;

?>