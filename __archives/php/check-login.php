<?php
include '../php/connection.php';

$login = false;
$showError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['Email'];
    $sql = "SELECT email FROM logindetails WHERE email = '$username'";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $login = true;
            session_start();
            $_SESSION['loggedin'] = $login;
            $_SESSION['email'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $showError = "Invalid Credentials";
        }
    } else {
        $showError = "Database Error: " . mysqli_error($connection);
    }
}
?>
