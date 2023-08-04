<?php
session_start();

if (isset($_SESSION['user_id'])) {
    // User is logged in, you can access their data using session variables
    $user_id = $_SESSION['user_id'];
    $user_firstname = $_SESSION['user_firstname'];
    $user_lastname = $_SESSION['user_lastname'];
    $user_email = $_SESSION['user_email'];

    // You can use this user data to display personalized content or perform actions.
} else {
    // User is not logged in, you can redirect them to the login page or show a login form.
    header("Location: login.php");
    exit();
}
?>
