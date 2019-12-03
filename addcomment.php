<?php  
include("mysqli_connect.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
$user=$_SESSION['login_user'];
$myusername = mysqli_real_escape_string($db,$user);
$comment_id=rand();
$comment=mysqli_real_escape_string($db,$_POST['comment']);
$place=mysqli_real_escape_string($db,$_POST['place']);


$sql = "INSERT INTO comments (comment_id,username,comment,partyplace) VALUES ( '$comment_id', '$myusername', '$comment','$place')";
$result = mysqli_query($db,$sql);
header("location: welcome.html");
}

?>