<?php

session_start();
$login_flag = "";
$cookemail="";

if (isset($_SESSION["user"])) 
{
    header("Location: ../view/home.php");

}else
{
    
    if(isset($_COOKIE['em']))
    {
       $cookemail=$_COOKIE['em'];
    }

}

if (isset($_REQUEST["sbmt"])) {
    
    if (!empty($_REQUEST["em"] && !empty("p"))) {
        $getjson = file_get_contents("../data/json/teacher.json");
        $decodedjson = json_decode($getjson, true);
   
        foreach ($decodedjson as $data) {
            if ($data["em"] == $_REQUEST["em"] && $data["p"] == $_REQUEST["p"]) {
                $_SESSION["user"] = $data;
                if(isset($_REQUEST["remem"]))
                {

                    setcookie("em", $_SESSION["em"]["em"], time() + 30*30*24*30,"../view/login.php");
                }
               
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