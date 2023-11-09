<?php
 include("../controller/session_handle.php");
 include("../view/menubar.php");
 include("../controller/json_to_table.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Librarian List</title>
</head>
<body>
    <h2>Librarian List</h2>
    <table>
    <table border="1">
        <?php
        jsonToTable("../data/json/Applicant.json");//give the location of json data file of teacher here
        ?>

    </table>
    
</body>
</html>