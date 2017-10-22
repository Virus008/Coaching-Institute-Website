<?php
	require 'dbconnect.php';
?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$Firstname = test_input($_POST["user_firstname"]);
		$Lastname = test_input($_POST["user_lastname"]);
		$Gender = test_input($_POST["user_gender"]);
		$Email = test_input($_POST["user_email"]);
		$Mobileno = test_input($_POST["user_mobileno"]);
		$Course = test_input($_POST["user_coursename"]);
		$Username = test_input($_POST["username"]);
		$Password = test_input($_POST["password"]);
		$Con_password = test_input($_POST["con_password"]);
		$sql = $conn->query("INSERT INTO user_info (user_firstname,user_lastname,user_gender,user_email,user_mobileno,user_coursename,username,password,con_password) VALUES ('{$Firstname}','{$Lastname}','{$Gender}', '{$Email}','{$Mobileno}','{$Course}','{$Username}','{$Password}','{$Con_password}')");

		echo "Successfully signed up!!";
	}
	

	function test_input($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	} 
?>



<title>Sign Up</title>

<?php
  include("header.php");
?>

    
    <div class="continer" id="Signup">
    	<div class="row">
    		<div class="col-md-6">
    			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="fileForm" role="form">
    			<fieldset>

    				<div class="panel-heading">
            			<strong><font size="5"> Sign Up</strong></font>
          			</div>

    				<div class="row">
    					<div class="center-block">
    						<img class="profile-img" src="images/login.png">
    					</div>
    				</div>

    				<div class="form-group">
    					<label for="firstname"><span class="req">* </span> First name: </label>
    					<input class="form-control" type="text" name="user_firstname" id="txt" onkeyup="validate(this)" required />
    					<div id="errFirst"></div>
    				</div>

    				<div class="form-group">
    					<label for="lastname"><span class="req">* </span> Last name: </label>
    					<input class="form-control" type="text" name="user_lastname" id="txt" onkeyup="validate(this)" required />
    					<div id="errLast"></div>
    				</div>


    				<div class="form-group">
    					<label for="gender"><span class="req">* </span>Gender:</label>
    					<select type="gender" class="form-control" name="user_gender">
    						<option value="select">Select</option>
    						<option value="male">Male</option>
    						<option value="female">Female</option>
    					</select>
    				</div>


    				<div class="form-group">
    					<label for="email"><span class="req">* </span> Email: </label>
    					<input class="form-control" type="text" name="user_email" id="email" onchange="email_validate(this.value)" />
    					<div class="status" id="status"></div>
    				</div>

    				<div class="form-group">
    					<label for="mobileno"><span class="req">* </span> Mobile No.: </label>
    					<input class="form-control" type="text" name="user_mobileno" id="mobile" />
    					<div id="errmobileno"></div>
    				</div>

    				<div class="form-group">
    					<label for="coursename"><span class="req">* </span> Course name: </label>
    					<select type="text" class="form-control" name="user_coursename" required>
    						<option value="select">Select</option>
    						<option value="C">C</option>
    						<option value="C++">C++</option>
    						<option value="java">Java</option>
    						<option value="php">PHP</option>
    						<option value="python">Python</option>
    						<option value="html">HTML</option>
    					</select>
    				</div>

    				<div class="form-group">
    					<label for="username"><span class="req">* </span> User name: </label>
    					<input class="form-control" type="text" name="username" id="txt" onkeyup="validate(this)" placeholder="min 6 letters" required />
    					<div id="errusername"></div>
    				</div>

    				<div class="form-group">
    					<label for="password"><span class="req">* </span>Password: </label>
    					<input required type="password" name="password" id="pass1" class="form-control inputpass" minlength="4" maxlength="16" />
    				</div>

    				<div class="form-group">
    					<label for="password"><span class="req">* </span>Confirm Password: </label>
    					<input required type="password" name="con_password" id="pass2" class="form-control inputpass" minlength="4" maxlength="16" onkeyup="checkPass()" />
    					<span id="ConfirmMessage" class="ConfirmMessage"></span>
    				</div>

    				<div class="form-group">
		                <?php //$date_entered = date('m/d/Y H:i:s'); ?>
		                <input type="hidden" value="<?php //echo $date_entered; ?>" name="dateregistered">
		                <input type="hidden" value="0" name="activate" />
		                <hr>

		                <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href="#" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
	            	</div>

	            	<div class="form-group">
                		<input class="btn btn-primary" type="submit" name="submit" value="Sign Up">
            		</div>
    			</fieldset>
    			</form>

    			<script type="text/javascript">
    				document.getElementById("field_terms").setCustomValidity("Please indicate that you accept the Terms and Conditions");
    			</script>
    		</div>
    	</div>	
    </div>

    <?php
      include("footer.php");
    ?>

<script src="js/formvalidation.js"></script>
<script src="js/sidenav.js"></script>