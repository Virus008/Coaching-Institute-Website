<!DOCTYPE html>
<html>

<?php
	include("header.php");
?>

</html>

<?php
require 'dbconnect.php';
session_start();
	if (!empty($_POST["Login"]))
	{
		$Username = $_POST['username'];
		$Password = $_POST['password'];

		$result = mysqli_query($conn, "SELECT * FROM user_info WHERE username = '$Username' AND password='$Password'");
		$row  = mysqli_fetch_array($result);

		if(is_array($row))
		{
			$_SESSION["username"] = $row['username'];
		} 
		else
		{
			$message = "Invalid Username or Password!";
		}
	}

	if(!empty($_POST["logout"])) 
	{
		$_SESSION["username"] = "";
		session_destroy();
	}
?>



<?php
      include("footer.php");
?>