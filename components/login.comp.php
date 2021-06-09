<?php

if(isset($_POST["submit"])) {
  
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  require_once 'dbh.comp.php';
  require_once 'functions.comp.php';

  (!emptyInputLogin($username, $pwd)) ? header("location: ../login.php?error=emptyinput") : null;

  loginUser($conn, $username, $pwd);
} else {
  header("location: ../login.php");
  exit();
}