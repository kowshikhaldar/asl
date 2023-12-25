<?php
include("../../model/sdb.php");
session_start();

//echo "hellow 1";
//$person = "";

$serial = $dept = $name = $id = $email = $rsch = $club = "";
if (isset($_REQUEST["add"])) {

    $obj = new Sdb();
    $connobj = $obj->openCon();
    if (empty($_REQUEST["dept"]) || empty($_REQUEST["name"]) || empty($_REQUEST["id"]) || empty($_REQUEST["email"]) || empty($_REQUEST["rsch"]) || empty($_REQUEST["club"])) {
        echo "Empty Value Cannot be Added";
    } else {
        $result = $obj->addstdnt($connobj, "student2", $_REQUEST["dept"], $_REQUEST["name"], $_REQUEST["id"], $_REQUEST["email"], $_REQUEST["rsch"], $_REQUEST["club"]);
    }

    //var_dump($result);
    if ($result) {
        echo "Student Added Successfully";
    } else {
        echo "";
    }

    //$obj -> Addstudent2($connobj,"student");

    $obj->closeCon($connobj);
}





if (isset($_REQUEST["search"])) {

    //echo "HELLO";




    $obj = new Sdb();
    $connobj = $obj->openCon();
    if (empty($_REQUEST["id"])) {
        echo "Please Enter the Valid Id";
    } else {
    $result = $obj->fetchstdntbyid($connobj, "student2", $_REQUEST["id"]);
    }
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

if (isset($_REQUEST["update"])) {
    //echo "HELLO";
    $obj = new Sdb();
    $connobj = $obj->openCon();
    if (empty($_REQUEST["dept"]) || empty($_REQUEST["name"]) || empty($_REQUEST["id"]) || empty($_REQUEST["email"]) || empty($_REQUEST["rsch"]) || empty($_REQUEST["club"])) {
        echo "Empty Value Cannot be Updated";
    } else {
        $result = $obj->Updatestdnt($connobj, "student2", $_REQUEST["serial"], $_REQUEST["dept"], $_REQUEST["name"], $_REQUEST["id"], $_REQUEST["email"], $_REQUEST["rsch"], $_REQUEST["club"]);
    }

    if ($result == true) {
        echo "Information Updated Successfully";
    } else {
        echo "";
    }
    $obj->closeCon($connobj);
}

//echo"Arghya";

if (isset($_REQUEST["delete"])) {
    // echo "'$_REQUEST[$serial]'.'Deleted Successfull'";
    $obj = new Sdb();
    $connobj = $obj->openCon();
    if (empty($_REQUEST["serial"])) {
        echo "";
    } else {
        $result = $obj->Deletestdnt($connobj, "student2", $_REQUEST["serial"]);
    }

    if ($result == true) {
        echo "User Deleted Successfull";
    } else {
        echo "Empty Value Cannot be Deleted";
    }
}
