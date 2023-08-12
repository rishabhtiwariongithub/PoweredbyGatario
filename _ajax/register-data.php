<?php

require __DIR__ . '/../_modules/config.php';

if (isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['First_name']) && isset($_POST['Last_name']) && isset($_POST['Username'])) {
  $email = $_POST['Email'];
  $password = $_POST['Password'];
  $name = $_POST['First_name'];
  $lastname = $_POST['Last_name'];
  $username = $_POST['Username'];

  $sql = "INSERT INTO logindetails (email, password, lastname, firstname,username) VALUES ('$email', '$password', '$lastname', '$name', '$username')";
  if (mysqli_query($connection, $sql)) {
    echo 1; // Registration successful
  } else {
    echo 0; // Failed to insert into the database
  }

} else {
  echo 0; // Incomplete form submission
}

?>