<?php
//https://www.tutorialspoint.com/php/mysql_insert_php.htm
include("mysqli_connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
$myusername = mysqli_real_escape_string($db,$_POST['username']);
$mypassword = mysqli_real_escape_string($db,$_POST['password']);
$id=rand();
$sql = "INSERT INTO login (id,username,password) VALUES ( '$id', '$myusername', '$mypassword')";
$result = mysqli_query($db,$sql);

header("location: index.html");
}
?>