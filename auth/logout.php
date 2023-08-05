<?php

require __DIR__ . '/../_modules/config.php';

session_start();
session_destroy();

header("Location: {$config->url('index.php')}");
exit();

?>