<?php

require __DIR__ . '/../_modules/config.php';

// just to redirect request, ignore me..
header("Location: {$config->url('auth/login.php')}");
exit();

?>