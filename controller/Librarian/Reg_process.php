<?php
function warning()
{
    return "Required";
}
function redirectpage($link)
{
    header("Location: $link");
    exit;
}




$fnameerror = $lnameerror = $emailerror = $addresserror = $doberror = $gendererror = $experror = $edubacerror = $usernameerror = $cpasserror = $passerror = $pnoerror = "";
$fname = $lname = $email = $address = $dob = $gender = $experience = $eduback = $uname = $npass = $cpass = $pno = "";
$redir_flag = 1;

if (isset($_REQUEST["Submit"])) {


    if (empty($_REQUEST["fname"])) {
        $fnameerror = warning();
    } else {
        if (!(strlen($_REQUEST["fname"]) < 10) && preg_match("/^[A-Z][a-z]+$/",$_REQUEST["fname"]) ) {
            $fnameerror = "Special Character Not Accepted";
            $redir_flag = 0;
        } else {
            $fname = $_REQUEST["fname"];

        }
    }



    if (empty($_REQUEST["lname"])) {
        $lnameerror = warning();
        $redir_flag = 0;
    } else {
        if (!(strlen($_REQUEST["lname"]) < 10) && preg_match("/^[A-Z][a-z]+$/",$_REQUEST["fname"])) {
            $fnameerror = "Special Character Not Accepted";
            $redir_flag = 0;
        } else {
            $lname = $_REQUEST["lname"];

        }
        
    }



    if (empty($_REQUEST["email"]))  {
        $emailerror = "Required";
        $redir_flag = 0;

    } else 
    // $jsondata = file_get_contents("../../data/json/Librarian/Librarian.json");
    //     $decodejsondata = json_decode($jsondata, true);
    {
        if(filter_var($_REQUEST["email"],FILTER_VALIDATE_EMAIL))
        {

            $email = $_REQUEST["email"];
        }
    }



    if (empty($_REQUEST["address"])) {
        $addresserror = "Required";
        $redir_flag = 0;

    } else {
        $address = $_REQUEST["address"];
    }




    if (empty($_REQUEST["dob"])) {
        $doberror = "Required";
        $redir_flag = 0;

    } else {
        $dob = $_REQUEST["dob"];
    }

    if (isset($_REQUEST["gender"])) {


        
        
        $gender = $_REQUEST["gender"];
    } else {
        $gendererror = "Required";
        $redir_flag = 0;
    }







    if (empty($_REQUEST["experience"])) {
        $experror = "Required";
        $redir_flag = 0;

    } else {
        $experience = $_REQUEST["experience"];
    }



   if (empty($_REQUEST["edubac"])) 
   {
   
      
        $edubacerror="Required";
        $redir_flag = 0;
    

   }else
   {
    $eduback = $_REQUEST["edubac"];
   }




    if (empty($_REQUEST["uname"])) {
        $usernameerror = "Required";
        $redir_flag = 0;

    } else {
        if(!(strlen($_REQUEST["uname"]) < 20)){
            $usernameerror = "Fill the requirements properly";
            $redir_flag = 0;

        }
        else{
            $uname = $_REQUEST["uname"];
        }
        
    }



    if (empty($_REQUEST["npass"])) {
        $passerror = "Required";

        $redir_flag = 0;

    } else {
       
        $npass = $_REQUEST["npass"];
    }



    if (empty($_REQUEST["cpass"])) {

        $cnpasserror = "Required";
        $redir_flag = 0;

    } else {
        if(!(strlen($_REQUEST["cpass"]) < 8)){
            $cnpasserror ="Password must be 8 characters";
            $redir_flag = 0;

        }
        else
        {
            $cpass = $_REQUEST["cpass"];
        }
        
    }



    if (!empty($_REQUEST["phone"] )) {

       
        if (strlen($_REQUEST["phone"])<11 && preg_match("/^\d+$/",$_REQUEST["phone"])) 
        {
            $pnoerror = "Please enter valid number";
        }else
        {
           $pno=$_REQUEST["phone"];
        }
            
       
        
    } else {
        $pnoerror = "Required";
        $redir_flag = 0;
       
    }

    if ($redir_flag == 1) {
        $user = array(
            "fname" => $fname,
            "lname" => $lname,
            "email" => $email,
            "address" => $address,
            "dob" => $dob,
            "gender" => $gender,
            "experience" => $experience,
            "eduback" => $eduback,
            "uname" => $uname,
            "npass" => $npass,
            "cpass" => $cpass,
            "pno" => $pno,

        );
        $User = array();
        $jsondata = file_get_contents("../../data/json/Librarian/Librarian.json");
        $decodejsondata = json_decode($jsondata, true);
        $User = $decodejsondata;
        $User[] = $user;
        $encodejsondata = json_encode($User, JSON_PRETTY_PRINT);
        if (file_put_contents("../../data/json/Librarian/Librarian.json", $encodejsondata)) {
            echo "Registration Success!";



        } else {
            echo "Registration Failed";

        }


        redirectpage("../../view/Librarian/Login.php");


    }
}


?>