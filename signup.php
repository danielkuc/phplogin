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
</section>

  <?php
    include_once "footer.php";
  ?>
