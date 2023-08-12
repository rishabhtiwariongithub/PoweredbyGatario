<?php
  require __DIR__ . '/../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $pageTitle ? $pageTitle . ' |' : '' ?> Facebook
  </title>

  <link rel="shortcut icon" href="<?= $config->url('_assets/images/facebook-icon.webp') ?>" type="image/x-icon">

  <!-- define stylesheet -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <link rel="stylesheet" href="<?= $config->url('_assets/css/main.css?q=') ?>">
  <link rel="stylesheet" href="<?= $config->url('_assets/css/components.css?q=') ?>">
  <link rel="stylesheet" href="<?= $config->url('_assets/css/utilities.css?q=') ?>">

  <!-- define script -->
  <script>
    window.projectUrl = "<?= $config->url('') ?>";
  </script>
  <script src="<?= $config->url('_assets/js/jquery.js') ?>"></script>
  <script type="text/javascript" src="https://apis.google.com/js/api.js"></script>
  <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
  <script src="<?= $config->url('_assets/js/main.js?q=') ?>"></script>
</head>
<body>
