<?php
	require 'dbconnect.php';
?>

// <?php

// 	function test_input($data)
// 	{
// 		$data = trim($data);
// 		$data = stripcslashes($data);
// 		$data = htmlspecialchars($data);
// 		return $data;
// 	}

	/*if(isset($_POST['submit'])){
		$Fullname = $_POST['user_name'];
		$Gender = $_POST['user_gender'];
		$Dob = $_POST['user_dob'];
		$Address = $_POST['user_address'];
		$Email = $_POST['user_email'];
		$Course = $_POST['user_coursename'];
		$Mobileno = $_POST['user_mobileno'];
		$Username = $_POST['username'];
		$Password = $_POST['password'];
		$sql = $conn->query("INSERT INTO user_info (user_name,user_gender,user_dob,user_address,user_email,user_coursename,user_mobileno,username,password) VALUES ('{$Fullname}','{$Gender}','{$Dob}', '{$Address}','{$Email}','{$Course}','{$Mobileno}','{$Username}','{$Password}')");

	}

	echo "Successfully signed up!!"; */
?>



<title>Sign Up</title>

<?php
  include("header.php");
?>

    
    <div class="continer" id="Signup">
    	<div class="row">
    		<div class="col-md-6">
    			<form action="signup.php" method="POST" id="fileForm" role="form">
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
                		<input class="btn btn-primary" type="submit" name="submit_reg" value="Sign Up">
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


    <script type="text/javascript">
    	
    	function checkPass()
    	{
    		var pass1 = document.getElementById('pass1');
    		var pass2 = document.getElementById('pass2');
    		var message = document.getElementById('ConfirmMessage');

    		var succ_color = "#66cc66";
    		var fail_color = "#ff6666";

    		if (pass1.value == pass2.value)
    		{
    			pass2.style.backgroundcolor = succ_color;
    			message.style.color = succ_color;
    			message.innerHTML = "Passwords Match";
    		}
    		else
    		{
    			pass2.value.backgroundcolor = fail_color;
    			message.style.color = fail_color;
    			message.innerHTML = "Passwords do not match!";
    		}
    	}


    	function validate(txt)
    	{
    		txt.value = txt.value.replace(/[^a-zA-Z-'\n\r.]+/g, '');
		}


		function email_validate(email)
		{
			var regmail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

		    if(regmail.test(email) == false)
    		{
    			document.getElementById("status").innerHTML = "<span class='warning'>Email-ID is not valid yet.</span>";
    		}
    		else
    		{
    			document.getElementById("status").innerHTML	= "<span class='valid'>You have entered a valid Email-ID!</span>";	
    		}
		}


    </script>