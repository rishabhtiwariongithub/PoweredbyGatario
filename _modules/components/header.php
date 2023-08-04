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
    <?= $pageTitle ? $pageTitle . '|' : '' ?> Facebook
  </title>

  <!-- define stylesheet -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <link rel="stylesheet" href="<?= $config->url('_assets/css/main.css') ?>">
  <link rel="stylesheet" href="<?= $config->url('_assets/css/utilities.css') ?>">

  <!-- define script -->
  <script src="<?= $config->url('_assets/js/jquery.js') ?>"></script>
</head>
<body>
