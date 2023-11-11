<?php

session_start();
$login_flag = "";
$cookuname="";

if (isset($_SESSION["user"])) 
{
    header("Location: ../view/home.php");

}else
{
    //last login feature
    if(isset($_COOKIE['uname']))
    {
       $cookuname=$_COOKIE['uname'];
    }

}

if (isset($_REQUEST["sbmt"])) {
    
    if (!empty($_REQUEST["username"] && !empty("pass"))) {
        $getjson = file_get_contents("../data/json/Applicant.json");
        $decodedjson = json_decode($getjson, true);
   
        foreach ($decodedjson as $data) {
            if ($data["uname"] == $_REQUEST["username"] && $data["pass"] == $_REQUEST["pass"]) {
                $_SESSION["user"] = $data;
                setcookie("uname", $_SESSION["user"]["uname"], time() + 60*60*24*30,"../view/login.php");
               
               header("Location: ../view/home.php");

                break;

            }else{
                $login_flag="User Not Found!";
            }
           

        }
    } else {
       $login_flag = "field can not be blanked";

    }



}


?>