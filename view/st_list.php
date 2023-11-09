<?php
 include("../controller/json_to_table.php");
 include("../controller/session_handle.php");
 include("../view/menubar.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Student List</title>
</head>
<body>
    <h2>Student List</h2>
    <table border="1">
        <?php
        jsonToTable("../data/json/Applicant.json");//give the location of json data file of teacher here
        ?>

    </table>
    
</body>
</html>