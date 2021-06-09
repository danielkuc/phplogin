<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Project</title>
  <!-- link to font -->
  <!-- link to reset -->
  <link rel="stylesheet" href="css/reset.css">
  <!-- link to stylesheet -->
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  
  <nav>
    <div class="wrapper">
      <a href="index.php" alt="logo">Add logo</a>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="discover.php">About Us</a></li>
        <li><a href="blog.php.php">Find Blog</a></li>
        <?php
            if(isset($_SESSION["userid"])) {
              echo "<li><a href='profile.php'>Profile page</a></li>"
              echo "<li><a href='login.php'>Log out</a></li>"              
            } else {
              echo "<li><a href='signup.php'>Sign Up</a></li>"
              echo "<li><a href='login.php'>Log in</a></li>"
            }
        ?>
      </ul>
    </div>
  </nav>

  <div class="wrapper">