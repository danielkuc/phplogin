<?php

if(isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];
  
  require_once 'dbh.comp.php';
  require_once 'functions.comp.php';

  if(emptyInput() !== false) {
    header("location: ../signup.php?error=emptyinput");
    exit();    
  }

} else {
  header("location: ../signup.php");
  exit();
}
