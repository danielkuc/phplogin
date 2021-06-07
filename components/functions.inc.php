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
  $result;

  if(!preg_match("/^[a-zA-Z0-9]*$/"), $username) {
    $result = true;
  } else {
    $result = false;
  }

  return $result;
};


function invalidEmail($email) {
  $result;
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
};


function pwdMatch($pwd, $pwdRepeat) {
  $result;
  if($pwd !== $pwdRepeat) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
};