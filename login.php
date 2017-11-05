<?php
	require 'dbconnect.php';
	session_start();

	$Username = $_POST['username'];
	$Password = $_POST['password'];
		
	$result = $conn->query("select * from user_info where username = '$Username' AND password='$Password'");
	$row = $result->fetch_assoc();

	if (mysqli_num_rows($result) == 0)
	{
		header('Location: header.php?err=1');
	}
	else
	{
		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['id'];
		$_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_userrole'] = $row['role'];
        $_SESSION['sess_password'] = $row['password'];

        echo $_SESSION['sess_userrole'];
		session_write_close();

		if( $_SESSION['sess_userrole'] == "admin")
		{
			header('Location: AdminAccount.php');
		}
		else
		{
			header('Location: UserAccount.php');
		}
	}
?>



<?php
      include("footer.php");
?>