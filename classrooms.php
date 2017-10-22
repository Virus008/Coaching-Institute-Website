<?php
  include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="myCarousel" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target = "#myCarousel" data-slide-to = "0" class="active"></li>
        <li data-target = "#myCarousel" data-slide-to = "1" class="active"></li>
        <li data-target = "#myCarousel" data-slide-to = "1" class="active"></li>
      </ol>

      <div class="carousel-inner">

        <div class="item active">
          <img src="images/classroom1.jpeg" alt="classroom" class="img-responsive">
            <div class="carousel-caption">
              <h3>Classroom</h3>
            </div>
        </div>

        <div class="item">
          <img src="images/lab.jpg" alt="lab" class="img-responsive">
            <div class="carousel-caption">
              <h3>Lab</h3>
            </div>
        </div>

        <div class="item">
          <img src="images/canteen.jpg" alt="canteen" class="img-responsive">
            <div class="carousel-caption">
              <h3>Canteen</h3>
            </div>
        </div>

      </div>
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
      </a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
      </a>
    </div>  

</body>

<?php
  include("footer.php");
?>

<script src="js/sidenav.js"></script>