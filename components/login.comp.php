<?php

if(isset($_POST["submit"])) {
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  require_once 'dbh.comp.php';
  require_once 'functions.comp.php';
}