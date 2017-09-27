<?php
 session_start();
 if (!isset($_SESSION['username'])) {
  header("Location: index.php");
 } else if(isset($_SESSION['username'])!="") {
  header("Location: home.php");
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['username']);
  session_unset();
  session_destroy();
  header("Location: courses.php");
  exit;
 }