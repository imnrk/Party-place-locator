<?php
include("mysqli_connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($_POST['submit'])){
    $comment = mysqli_real_escape_string($db,$_REQUEST['hidden']);
    $sql1 = "UPDATE comments set Likes=Likes+1 where comment='$comment'";
    $result1 = mysqli_query($db,$sql1);
  }
  header("location: viewcomments.php");
}
?>