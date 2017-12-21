<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="admin"){
      header('Location: index.php?err=2');
    }
?>

<script type="text/javascript">
	function loadDoc()
	{
  		var xhttp = new XMLHttpRequest();
  		xhttp.onreadystatechange = function()
  		{
    		if (this.readyState == 4 && this.status == 200)
    		{
    			document.getElementById("demo").innerHTML = this.responseText;
    		}
  		};
  		xhttp.open("POST", "usersdetails.php", true);
  		xhttp.send();
	}
</script>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Control Panel</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">


  </head>
  <body>

     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <div class="wrapper">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
          </ul>      
        </div><!--=======.nav collapse========-->
      </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php 
            if(!empty($_SESSION['sess_username']))
            {
            ?>

            <div class="navbar-collapse collapse">
              <div class="nav navbar-nav navbar-right">
                <span style="font-size:28px;cursor:pointer" id="loggedinuser" onclick="openNav()">&#9776; <?php echo $_SESSION['sess_username'];?></span>
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="AdminAccount.php">Account</a>
                  <a href="AdminProfile.php">Profile</a>
                  <a href="AdminSettings.php">Settings</a>
                  <a href="logout.php">Logout</a>
                </div>
              </div>
          </div>

            <?php
            }
            else{
            
            }
            ?>  
            </ul> 
        </div>


    </div><br><br>


<div class="container">
	<button class="btn btn-primary" name="users_details" onclick="loadDoc()"> Show all users details </button> <br><br>
	<p id="demo"></p>

	<!-- <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" onclick="">Select user
	 <span class="caret"></span></button>
  	<ul class="dropdown-menu">
    	<li><a href="#">HTML</a></li>
    	<li><a href="#">CSS</a></li>
    	<li><a href="#">JavaScript</a></li>
  	</ul> -->
</div>

<?php
include('footer.php');
?>
