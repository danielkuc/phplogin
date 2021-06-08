<?php

if(isset($_POST["submit"])) {
  
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];
  
  require_once 'dbh.comp.php';
  require_once 'functions.comp.php';

  (!emptyInput($name, $email, $username, $pwd, $pwdRepeat)) ? 
    header("location: ../signup.php?error=emptyinput") : null;  
    
  (!invalidUid($username)) ? header("location: ../signup.php?error=invaliduid") : null;

  (!invalidEmail($email)) ? header("location: ../signup.php?error=invalidemail") : null;

  (!pwdmatch($pwd, $pwdRepeat)) ? header("location: ../signup.php?error=pwdinvalid") : null;

  (!uidExists($conn, $username, $email)) ? header("location: ../signup.php?error=uidtaken") : null; 

  createUser($conn, $name, $email, $username, $pwd);

  } else {
  
  header("location: ../signup.php");
  exit();
}
