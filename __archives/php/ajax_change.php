<?php
include "../html/connection.php";
if (isset($_POST['Email']) && isset($_POST['Password'])) 
{
$email = $_POST['Email'];
$password = $_POST['Password'];

// Assuming the table name is 'logindetails' and the column names are correct
$sql = "UPDATE   `logindetails` SET `password` ='{$password}' WHERE `logindetails`.`email` ='{$email}'";
$result=mysqli_query($connection, $sql);

if(mysqli_num_rows($result)>0) {
    echo "1"; // Use quotes for string response
} else {
    echo "0"; // Use quotes for string response
}}
else
{
    echo "cannot login";
}
?>
