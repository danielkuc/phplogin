<?php

function emptyInput($name, $email, $username, $pwd, $pwdRepeat) {
  $result;

  if(empty($name) || empty($email) || empty($username) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
    $result = true;
  } else {
    $result = false;
  }

  return $result;
};

function invalidUid($username) {
  return (!preg_match("/^[a-zA-Z0-9]*$/", $username)) ? true : false;
};


function invalidEmail($email) {
  return (!filter_var($email, FILTER_VALIDATE_EMAIL)) ? true : false;
};


function pwdMatch($pwd, $pwdRepeat) {
  return ($pwd !== $pwdRepeat) ? true : false;
};

function uidExists($conn, $username, $email) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  (!mysqli_stmt_prepare($stmt, $sql)) ? header("location: ../signup.php?error=stmtfailed") : null;

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);
  return ($row = mysqli_fetch_assoc($resultData)) ? $row : false;
  mysqli_stmt_close($stmt);
};


function createUser($conn, $name, $email, $username, $pwd) {
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  (!mysqli_stmt_prepare($stmt, $sql)) ? header("location: ../signup.php?error=stmtfailed") : null;

  $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../signup.php?error=none");
};