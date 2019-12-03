<html>
<body style="background-color:tomato;">
<div
      style="text-align: center; padding:100px 0; border-style:solid; border-width:1px;background-color:white; width: 500px; margin:0 auto;"
    >
<form action="" method="POST">
<h2>Enter your message to the user</h2>
<input type="text" name="username" placeholder="Enter name of the user"></input>
<br />
<br />
<label>Message:</label> <textarea rows="8" cols="30" name="message" placeholder="Enter the message and your name"></textarea>
<br />
<br />
<input type="submit" name="submit" value="Submit" />
</form>

<button onclick="location.href='welcome.php'">Back to welcome page</button>
</div>
</body>
</html>


<?php
include("mysqli_connect.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
$mesg = mysqli_real_escape_string($db,$_POST['message']);
$myusername = mysqli_real_escape_string($db,$_POST['username']);

            
// Make the query
$q="UPDATE login set messages='$mesg' where username='$myusername'";

// Run the query
$r=  mysqli_query($db, $q); 
}

?>
