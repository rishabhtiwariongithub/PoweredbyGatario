<?php
  $pageTitle = 'Dashboard';
  require __DIR__ . '/_modules/components/header.php';

  session_start();

  if (!isset($_SESSION['user_sno'])) {
    // User is not logged in, redirect them to the login page or show a login form.
    header("Location: {$config->url('auth/login.php')}");
    exit();
  }

  $user_sno = $_SESSION['user_sno'] ?? '';
  $user_firstname = $_SESSION['user_firstname'] ?? '';
  $user_lastname = $_SESSION['user_lastname'] ?? '';
  $user_email = $_SESSION['user_email'] ?? '';
  $user_username = $_SESSION['user_username'] ?? '';
?>

<!-- still nothing here.. move on -->

<?php
  require __DIR__ . '/_modules/components/footer.php';
?>