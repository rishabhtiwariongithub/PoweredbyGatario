<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
</head>
<body>
<script>
        function Logout() {
    alert("You're Logged Out");
           }
Logout();
        setTimeout(function() {
            window.location.href = "../html/index.php";
        }, 500);
    </script>
</body>
</html>
