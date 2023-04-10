<?php
  include_once 'header.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Pet Minding</title>
    <link rel="stylesheet" type="text/css" href="webapp.css">
  </head>
  <body>
    <section>
    <?php
            if (isset($_SESSION["useruid"])){
              echo "<p> Logged in as " . $_SESSION["useruid"] . "</p>";
              echo "<button><a href='Request.php'>Request Pet Minding</a></button>";
              echo "<button><a href='Minding.php'>Minding a Pet</a></button>";
            }
            else{
              echo "<button><a href='Signup.php'>Signup</a></button>";
              echo "<button><a href='Login.php'>Login</a></button>";
            }
    ?>
    </section>
  </body>
</html>
<?php 
  include_once 'footer.php';
?>