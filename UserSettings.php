<?php
include('header.php');
include('footer.php');
?>

<?php
require 'dbconnect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$Email = test_input($_POST["user_email"]);
	$Username = test_input($_POST["username"]);
	$Password = test_input($_POST["password"]);
	$Con_password = test_input($_POST["con_password"]);
	$sql = $conn->query("UPDATE user_info SET user_email = '$Email', password = '$Password', con_password = '$Con_password' WHERE cust_id = '".$_SESSION['sess_user_id']."' ");

	echo "";
}
else{

}
	// UPDATE users set password='" . $_POST["newPassword"] . "' WHERE userId='" . $_SESSION["userId"] . "'"

function test_input($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>


<div class="container">
	<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" role="form">
		<fieldset>
			<legend>My Profile:- Account Setting</legend>

			<div class="form-group">
				<label class="col-md-4 control-label" for="textinput">Change Email ID:</label>
				<div class="col-md-4">
					<input type="text" name="user_email" id="email" onchange="email_validate(this.value)" class="form-control input md">
					<div class="status" id="status"></div>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label" for="passwordinput">New Password:</label>
				<div class="col-md-4">
					<input type="password" name="password" id="pass1" class="form-control input md" minlength="4" maxlength="16">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label" for="confirmpassword">Confirm Password:</label>
				<div class="col-md-4">
					<input type="password" name="con_password" id="pass2" class="form-control input md" minlength="4" maxlength="16" onkeyup="checkPass()" >
					<span id="ConfirmMessage" class="ConfirmMessage"></span>
				</div>
			</div>

			<div class="form-group">
                <div class="col-md-4 control-label">
                	<input class="btn btn-primary" type="submit" name="submit" value="Submit">
                </div>
            </div>

		</fieldset>
	</form>
</div>



