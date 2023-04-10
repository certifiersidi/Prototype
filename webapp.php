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

    <img class="pet" src="petminding.png" alt="" />  
<section class="Welcome">
    <h1> Welcome to MindMyPet</h1>
    <p> Connect with pet minders. Sign up to start!<p>
</section>
    
    <section>

    <?php
            if (isset($_SESSION["useruid"])){
              echo "<p> Logged in as " . $_SESSION["useruid"] . "</p>";
              echo "<button><a href='Request.php'>Request Pet Minding</a></button>";
              echo "<button><a href='Minding.php'>Minding a Pet</a></button>";
            }
    ?>
    </section>
  </body>
</html>
<?php 
  include_once 'footer.php';
?>