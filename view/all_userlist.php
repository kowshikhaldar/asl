<?php 
include("../controller/session_handle.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>


</head>

<body>
    <center>

  
    
            <li><a href="tech_list.php">Techer list</a></li>
            <li><a href="st_list.php">Student list</a></li>
            <li><a href="librarian_list.php">Librarian List</a></li>
            

            <?php
            if($_SESSION['user']['type'] == 'admin'){
                echo '<li><a href="it_s_list.php">It Support Member List</a></li>';

            }
            ?>
   
    </center>

</body>

</html>