<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "bonusdb";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if(!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}