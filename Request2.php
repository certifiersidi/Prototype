<?php 
  include_once 'header.php';
?>
<h2>Give us some informations about how to treat your pet</h2>
<label for="mindingDate">How long you want someone to take care of it?</label>
<input name="setTodaysDate" type="date">

<script>
    window.onload=function(){
        var today = new Date().toISOString().split('T')[0];
        document.getElementsByName("setTodaysDate")[0].setAttribute('min', today);
    }
</script>

<input type="text" name="" id="">



