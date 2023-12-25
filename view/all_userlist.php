<?php
include("../controller/session_handle.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/all_userlist.css">
    <script src="../js/all_userlist.js"></script>
    
    
    
    

</head>

<body>
    
    <div class="userlist">
     
         <div onclick="gotoLink('tech_list.php')"> Teacher list </div>
         <div onclick="gotoLink('st_list.php')">Student list </div>
         <div onclick="gotoLink('librarian_list.php')">Librarian List</div>
        
         


        <?php
        if ($_SESSION['user']['type'] == 'admin') {
            
             echo '<div onclick="gotoLink('."'it_s_list.php'".')" > It Support Member Lis </div>';;

        }
        ?>


      
    </div>




</body>

</html>