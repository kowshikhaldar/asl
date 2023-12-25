<?php

if (session_status() == PHP_SESSION_ACTIVE) {
   


}else{
    session_start();
}


if (isset($_REQUEST["Submit"])) {

    if (!empty($_REQUEST["userid"]) && !empty($_REQUEST["password"])) {

        $jsondata = file_get_contents("../../data/json/Librarian/Librarian.json");
        $decodejsondata = json_decode($jsondata, true);


        foreach ($decodejsondata as $data) {

            if ($data["uname"]==$_REQUEST["username"] and $data["npass"]==$_REQUEST["password"]) {
               // $_SESSION["Librarian"]= $data;
                header("Location: ../../view/Librarian/Profile.php");
            }
        }
    }

    


} else {
    echo "Please Login to continue";
}





?>