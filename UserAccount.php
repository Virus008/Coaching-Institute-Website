<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="user"){
      header('Location: #login?err=2');
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Log In</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <div class="navbar-collapse collapse" id="back">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>      
            </div><!--=======.nav collapse========-->
         </div>

          <div class="navbar-collapse collapse">
              <div class="nav navbar-nav navbar-right">
                <span style="font-size:28px;cursor:pointer" id="loggedinuser" onclick="openNav()">&#9776; <?php echo $_SESSION['sess_username'];?></span>
                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="UserAccount.php">Account</a>
                  <a href="profile.php">Profile</a>
                  <a href="#">Settings</a>
                  <a href="logout.php">Logout</a>
                </div>
              </div>
          </div>
      </div>


      <div class="container">
        <?php
          echo '<span style="font-size:32pt;"> Welocme, '.$_SESSION['sess_username'].'</span>'; 
        ?>

        <br>You can add your personal details.
        <br>You will able to view your details soon.
        <br><h2>Site Is Under Development</h2>
      </div>
    

      <?php
        include("footer.php");
      ?>

<script src="js/sidenav.js"></script>