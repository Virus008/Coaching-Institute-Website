<!DOCTYPE html>
<html>



</html>

<?php
require 'dbconnect.php';
session_start();
	if (isset($_POST['Login'])) {
		$Username = $_POST['username'];
		$Password = $_POST['password'];
		
		$result = $conn->query("select * from user_info where username = '$Username' AND password='$Password'");
		$row = $result->fetch_assoc();


		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];

		

		if (mysqli_num_rows($result) > 0) {
			echo "<script type='text/javascript'>alert('Login Successfully!!')</script>";
			$name=$row['username'];
			$_SESSION['username']=$name;
			header("Location:account.php");
		} else {
			echo "<script type='text/javascript>alert('Login Failed!!')</script>";
			unset($_SESSION['username']);
			session_destroy();
			header("Location:home.php");
		}
	}
?>



<?php
      include("footer.php");
    ?>