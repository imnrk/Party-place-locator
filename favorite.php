<?php
include("mysqli_connect.php");
session_start();
$user=$_SESSION['login_user'];
if($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($_POST['favorite'])){
    $partyplace = mysqli_real_escape_string($db,$_REQUEST['hidden']);
    $sql1 = "UPDATE login set favorite='$partyplace' where username='$user'";
    $result1 = mysqli_query($db,$sql1);
  }
  header("location: viewcomments.php");
}
?>