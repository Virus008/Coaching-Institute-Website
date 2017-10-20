<?php
	if(!empty($_POST["logout"]))
	{
		$_SESSION["userame"] = "";
		session_destroy();
		// header("Location: home.php");
	}
?>