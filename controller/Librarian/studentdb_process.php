<?php

include("../../model/sdb.php");

if (isset($_REQUEST["show"])) {

    echo "HELLO";




    $obj = new Sdb();
    $connobj = $obj->openCon();
    $result = $obj->fetchstdnt($connobj, "student2");
    //var_dump($result);
    echo '<table border="1">';
    echo "<tr><th> Serial</th><th> Department</th><th> Name</th><th> ID</th><th> Email</th><th>Researcher</th><th>Club</th></tr>";
    foreach ($result as $row) { //$person = $row;

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
        echo "</td><td>";
        echo $row["club"];
        echo "</td></tr>";
    }
    //echo $person["dept"];

    $bobj->closeCon($connobj);
}
