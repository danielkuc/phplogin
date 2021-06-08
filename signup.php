<?php
  include_once "header.php";
?>

<section class="signup-form">
  <h2>Sign Up</h2>
  <form action="components/signup.comp.php" method="post">
  <input type="text" name="name" placeholder="Full Name">  
  <input type="email" name="email" placeholder="E-mail">  
  <input type="text" name="uid" placeholder="Username">  
  <input type="password" name="pwd" placeholder="Password">
  <input type="password" name="pwdrepeat" placeholder="Confirm Password">
  <button type="submit" name="submit">Sign Up</button>  
  </form>
  <?php
    switch(isset($_GET["error"])) {
      case "emptyinput":
        echo "<p>All input fields must be filled in.</p>";
        break;
      case "invaliduid":
        echo "<p>Invalid username.</p>";
        break;
      case "invalidemail":
        echo "<p>Invalid Email.</p>";
        break;
      case "pwdinvalid":
        echo "<p>Passwords don't match.</p>";
        break;
      case "stmtfailed":
        echo "<p>Something went wrong, try again.</p>";
        break;
      case "uidtaken":
        echo "<p>Username already taken.</p>";
        break;
      case "none":
        echo "<p>Sign up successful!</p>";
        break;
    }
  ?>
</section>

  <?php
    include_once "footer.php";
  ?>
