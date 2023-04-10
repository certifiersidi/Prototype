<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pet Minding</title>
    <link rel="stylesheet" type="text/css" href="webapp.css">
  </head>
  <body>
    <header>
      <h1><a href="webapp.php">MindMyPet</a></h1>
      <nav>
        <ul>
          <li><a href="">Contact Us</a></li>
          <?php
            if (isset($_SESSION["useruid"])){
              echo "<li><a href='Request.php'>Request Pet Minding</a></li>";
              echo "<li><a href='Minding.php'>Minding a Pet</a></li>";
              echo "<li><a href='Report.php'>Report a problem</a></li>";
              echo "<li><a href='changepassword.php'>Change password</a></li>";
              echo "<li><a href='logout.inc.php'>Log out</a></li>";
            }
            else{
              echo "<li><a href = 'signup.php' >Sign up</a></li>";
              echo "<li><a href = 'login.php'>Log in</a></li>";
            }
          ?>
        </ul>
      </nav>
    </header>