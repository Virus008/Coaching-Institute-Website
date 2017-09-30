<?php
	require 'dbconnect.php';

	$FullnameErr = $GenderErr = $DobErr = $AddressErr = $EmailErr = $CourseErr = $MobilenoErr = $UsernameErr = $PasswordErr = ""; 
	$Fullname = $Gender = $Dob = $Address = $Email = $Course = $Mobileno = $Username = $Password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if (empty($_POST["user_name"]))
		{
			$FullnameErr = "Name is reqired";
		}
		else
		{
			$Fullname = test_input($_POST["user_name"]);
			if (!preg_match("/^[a-zA-Z]*$",$Fullname))
			{
				$FullnameErr = "Only letters and white space is allowed";		
			}			
		}


		if (empty($_POST["user_email"]))
		{
			$EmailErr = "Email is required";	
		}
		else
		{
			$Email = test_input($_POST["user_email"]);
			if (!filter_var($Email, FILTER_VALIDATE_EMAIL))
			{
			 	$EmailErr = "Invalid Email format";
			} 
		}


    if (empty($_POST["user_mobileno"]))
    {
      $MobilenoErr = "Number is required";
    }
    else
    {
      $Mobileno = test_input($_POST["user_mobileno"]);
      if (!is_numeric($Mobileno))
      {
        $MobilenoErr = "Numeric value is required";
      }

    }


		/*$Fullname = test_input($_POST["user_name"]);*/
		$Gender = test_input($_POST["user_gender"]);
		$Dob = test_input($_POST["user_dob"]);
		$Address = test_input($_POST["user_address"]);
		/*$Email = test_input($_POST["user_email"]);*/
		$Course = test_input($_POST["user_coursename"]);
		/*$Mobileno = test_input($_POST["user_mobileno"]);*/
		$Username = test_input($_POST["username"]);
		$Password = test_input($_POST["password"]);


		$sql = $conn->query("INSERT INTO user_info (user_name,user_gender,user_dob,user_address,user_email,user_coursename,user_mobileno,username,password) VALUES ('{$Fullname}','{$Gender}','{$Dob}', '{$Address}','{$Email}','{$Course}','{$Mobileno}','{$Username}','{$Password}')");


		/*echo "successfully signed up!!";*/
	}

?>

<?php

	function test_input($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

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

    <div class="container text-center">
      <div class="row text-center">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong><font size="4"> Sign Up</strong></font>
          </div>

          <div class="panel-body">
            <form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <fieldset>
                <div class="row">
                  <div class="center-block">
                    <img class="profile-img" src="images/login.png" alt="">
                  </div>
                </div><br>

                <div class="row">
                  <div class="col-sm-12 col-md-9  col-md-offset-1 ">
                    <div class="form-group ">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Full Name" name="user_name" id="user_name" type="text">
                      </div><span class="Error"> <?php echo $FullnameErr; ?> </span>
                    </div>
                    
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Gender" name="user_gender" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Date Of Birth" name="user_dob" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-home"></i>
                        </span> 
                        <input class="form-control" placeholder="Local Address" name="user_address" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-envelope"></i>
                        </span> 
                        <input class="form-control" placeholder="@gmail.com" name="user_email" type="text">
                      </div><span class="Error"> <?php echo $EmailErr; ?> </span>
                    </div>                    

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-earphone"></i>
                        </span> 
                        <input class="form-control" placeholder="Mobile No." name="user_mobileno" type="text">
                      </div><span class="Error"> <?php echo $MobilenoErr; ?> </span>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-search"></i>
                        </span> 
                        <input class="form-control" placeholder="Enter Course" name="user_coursename" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        <input class="form-control" placeholder="Username" name="username" type="text" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                      </div>
                    </div>
                    
                    <div class="form-group">
                    	<p id="succ_msg">
                      <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block" data-toggle="modal" data-target="#signupmodal" onclick="myFunction()">Sign Up</button></p>
                      
                      <!--<div id="signupmodal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b>Message</b></h4>
                            </div>

                            <div class="modal-body">
                              <p>You have successfully signed up!!!</p>
                            </div>

                            <!--<div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                          </div>
                        </div>
                      </div>-->
                    </div>

                  </div>
                </div>
              </fieldset>
            </form><!--Form closed-->
        </div><!--Panel closed-->
      </div> <!--row closed-->
    </div> <!--continer closed-->

    <?php
      include("footer.php");
    ?>