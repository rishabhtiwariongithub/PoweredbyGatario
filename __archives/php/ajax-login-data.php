<?php
include "../html/connection.php";
session_start();

if (isset($_POST['Email']) && isset($_POST['Password'])) {
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // Assuming the table name is 'logindetails' and the column names are correct
    $sql = "SELECT * FROM `logindetails` WHERE email='{$email}' AND password='{$password} '";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        // If login is successful, set session variables
        $user_data = mysqli_fetch_assoc($result);
        $_SESSION['user_sno'] = $user_data['sno'];
        $_SESSION['user_firstname'] = $user_data['firstname'];
        $_SESSION['user_lastname'] = $user_data['lastname'];
        $_SESSION['user_username'] = $user_data['username'];
        $_SESSION['user_email'] = $user_data['email'];

        // Send a success response to the client
        echo "1"; // Use quotes for string response
    } else {
        echo "0"; // Use quotes for string response
    }
} else {
    echo "cannot login";
}
?>
