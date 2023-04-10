<?php
include 'header.php';

include_once 'dbh.inc.php'; 
$sql = "SELECT * FROM petdetails";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo '<div name=''>' . implode("</div><div>", $row) . '</div>';
        //    echo '<div name="' . $row[''] . '">' . implode("</div><div>", $row) . '</div>';

          //  echo implode("</div><div>", $row);
            echo '<br>';
       //     echo implode(" ", $row);
      //      echo "$row['IDpet']  $row['userEmail'] . '<br>'" ;
        }
    }

    ?>