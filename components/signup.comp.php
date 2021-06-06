<?php

if(isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];
  
  require_once 'dbh.comp.php';
  require_once 'functions.comp.php';

  if(emptyInput($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=emptyinput");
    exit();
    
    if(invalidUid($username) !== false) {
      header("location: ../signup.php?error=invaliduid");
      exit();
    };
    if(invalidEmail($email) !== false) {
      header("location: ../signup.php?error=invaliduid");
      exit();
    };
    if(pwdmatch($pwd, $pwdRepeat)) {
      header("location: ../signup.php?error=pwdinvalid");
      exit();
    };
    if(uidExists($conn, $username)) {
      header("location: ../signup.php?error=uidtaken");
      exit();
    };

    createUser($conn, $name, $email, $username, $pwd) {

    }
  }

} else {
  header("location: ../signup.php");
  exit();
}
