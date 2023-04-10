<?php 
  include_once 'header.php';
?>

<section class="signup-form">
    <h2>Log in</h2>
    <form action="login.inc.php" method="post">
        <input type="text" name="uid" placeholder="username">
        <input type="password" name="pwd" placeholder="password">
        <button type="submit" name="submit">Log in</button>
    </form>
    <?php
      if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
          echo "Fill in all the fields";
        }
        else if($_GET["error"] == "wronglogin"){
          echo "There is an incorrect information";
        }
      }
    ?>
    <a href="reset-password.php">Forgot your password?</a>
</section>
  <script type="text/javascript" src="script.js"></script>
  </body>
</html>
<?php 
  include_once 'footer.php';
?>