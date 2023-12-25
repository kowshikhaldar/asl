<?php

include("../../model/tdb.php");

if (isset($_REQUEST["Show"])) {




echo "HELLO";

    $obj = new Tdb();
    $connobj = $obj->openCon();
    $result = $obj->fetchtechr($connobj, "teacher2");
    //var_dump($result);
    echo '<table border="1">';
    echo "<tr><th> Serial</th><th> Department</th><th> Name</th><th> ID</th><th> Email</th><th>Researcher</th></tr>";
    foreach ($result as $row) {
        echo "<pre>";
        //var_dump($row);
        echo "</pre>";
        echo "<tr><td>";
        echo $row["serial"];
        echo "</td><td>";
        echo $row["dept"];
        echo "</td><td>";
        echo $row["name"];
        echo "</td><td>";
        echo $row["id"];
        echo "</td><td>";
        echo $row["email"];
        echo "</td><td>";
        echo $row["research"];
        echo "</td></tr>";
    }

    $bobj->closeCon($connobj);
}
