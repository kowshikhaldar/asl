<?php
 include("../controller/session_handle.php");
 include("../controller/json_to_table.php");
 include("../view/menubar.php");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>It Support Member List</title>
</head>
<body>
    <h2>It Support Member List</h2>
    <table>
        <tr>
        <table border="1">
        <?php
        jsonToTable("../data/json/Applicant.json"); //give the location of json data file of teacher here
        ?>
           
        </tr>

    </table>
    
</body>
</html>