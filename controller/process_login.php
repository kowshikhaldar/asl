<?php
include("../model/itsdb/it_s_db.php");

session_start();
$login_flag = "";
$cookuid = "";

if (isset($_SESSION["user"])) {
    header("Location: ../view/home.php");

} else {
    //last login feature
    if (isset($_COOKIE['uname'])) {
        $cookuname = $_COOKIE['uname'];
    }

}

if (isset($_REQUEST["sbmt"])) {

    if (!empty($_REQUEST["userid"] && !empty("pass"))) {
        // $getjson = file_get_contents("../data/json/Applicant.json");
        // $decodedjson = json_decode($getjson, true);
        $obj = new ItsDb();
        $con = $obj->connectDb();
        $data = $obj->getuserByUserId($con, "itsdb", $_REQUEST["userid"]);
        if (!empty($data)) {
            if ( $data["password"] == $_REQUEST["pass"]) {
                $_SESSION["user"] = $data;
               
                if (isset($_REQUEST["remem"])) {
    
                    setcookie("uname", $_SESSION["user"]["uname"], time() + 60 * 60 * 24 * 30, "../view/login.php");
                }
    
                header("Location: ../view/home.php");
    
    
    
            } else {
                $login_flag = "User Not Found!";
            }
        }


        



    } else {
        $login_flag = "Field can not be Blanked!";

    }



}


?>