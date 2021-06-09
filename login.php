<?php
  include_once "header.php";
?>

<section class="signup-form">
  <h2>Log In</h2>
  <form action="components/login.comp.php" method="post">
  <input type="text" name="name" placeholder="Username / Email">  
  <input type="password" name="pwd" placeholder="Password">  
  <button type="submit" name="submit">Log In</button>  
  </form>
  <?php
    switch(isset($_GET["error"])) {
      case "emptyinput":
        echo "<p>All input fields must be filled in.</p>";
        break;
      case "invalidlogin":
        echo "<p>Invalid login.</p>";
        break;
    }
  ?>
</section>

  <?php
    include_once "footer.php";
  ?>
