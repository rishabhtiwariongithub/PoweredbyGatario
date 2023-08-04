<?php class Conn
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "logindata";
    public $conn; // Declare a public property to store the database connection object
    
    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}

// Creating an instance of the Conn class
$dev = new Conn();

// Accessing the database connection object
$connection = $dev->conn;
?>