<?php
include("../../model/tdb.php");

//echo "hellow 1";


if (isset($_REQUEST["Add"])) {
    //echo"hello";
    $obj = new Tdb();
    $connobj = $obj->openCon();
    if (empty($_REQUEST["dept"]) || empty($_REQUEST["name"]) || empty($_REQUEST["id"]) || empty($_REQUEST["email"]) || empty($_REQUEST["rsch"])) {
        echo "Empty Value Cannot be Added";
    } else {
        $result = $obj->addtechr($connobj, "teacher2", $_REQUEST["dept"], $_REQUEST["name"], $_REQUEST["id"], $_REQUEST["email"], $_REQUEST["rsch"]);

        if ($result) {
            echo "Teacher Added Successfully";
        } else {
            echo "Failed";
        }
    }


    $obj->closeCon($connobj);
}



if (isset($_REQUEST["Search"])) {






    $obj = new Tdb();
    $connobj = $obj->openCon();
    if (empty($_REQUEST["id"]))
    {
        echo "Please Enter the Valid Id";
    }
    else 
    {
        $result = $obj->fetchtechrbyid($connobj, "teacher2", $_REQUEST["id"]);
    }
    
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




if (isset($_REQUEST["Update"])) {
    $obj = new Tdb();
    $connobj = $obj->openCon();
    if (empty($_REQUEST["dept"]) || empty($_REQUEST["name"]) || empty($_REQUEST["id"]) || empty($_REQUEST["email"]) || empty($_REQUEST["rsch"])) {
        echo "Empty Value Cannot be Updated";
    } else {
        $result = $obj->Updatetechr($connobj, "teacher2", $_REQUEST["serial"], $_REQUEST["dept"], $_REQUEST["name"], $_REQUEST["id"], $_REQUEST["email"], $_REQUEST["rsch"]);
    }

    if ($result == true) {
        echo " Information Updated Successfully";
    } else {
        echo "";
    }
    $obj->closeCon($connobj);
}

if (isset($_REQUEST["Delete"])) {
    $obj = new Tdb();
    $connobj = $obj->openCon();
    if (empty($_REQUEST["serial"]))
    {
        echo "";
    }
    else
    {
        $result = $obj->Deletetechr($connobj, "teacher2", $_REQUEST["serial"]);
    }
   
    if ($result == true) {
        echo "User Deleted Successfull";
    } else {
        echo "Empty Value Cannot be Deleted";
    }
}
