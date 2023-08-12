<?php

require __DIR__ . '/../_modules/config.php';

if(isset($_POST['Email'])) {
  $email = $_POST['Email'];

  $sql = "SELECT email FROM `logindetails` WHERE email='{$email}'";
  $result = mysqli_query($connection, $sql);

  if(mysqli_num_rows($result)>0) {
    echo "1"; // Use quotes for string response
  } else {
    echo "0"; // Use quotes for string response
  }
} else {
  echo "0";
}

?>