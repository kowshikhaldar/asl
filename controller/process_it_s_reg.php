<?php
function emptywarn()
{
    return "Field can not be Blanked";
}
function redirectp($link)
{
    header("Location: $link");
    exit;
}



 $fname = $lname = $dob = $phone = $gender = $email = $country = $city = $addrs = $exp = $edu = $skill = $availablity = $reason = $reference =$terms= "";

$fname_flag = $lname_flag = $dob_flag = $phone_flag = $gender_flag = $email_flag = $country_flag = $city_flag = $addrs_flag = $exp_flag = $edu_flag = $skill_flag = $availablity_flag = $reason_flag = $reference_flag = $terms_flag = "";

$redir_flag=1;

$pro_pic=$cv =$aq=$cert="";
$pro_pic_flag=$cv_flag =$aq_flag=$cert_flag="";




if (isset($_REQUEST["submt"])) {

 
}
    //firstname condition
    if (!empty($_REQUEST["fname"])) {
       
        if (!(strlen($_REQUEST["fname"]) < 30 && !preg_match("/[\d]+|\s|\W/i",$_REQUEST["fname"]))) {
            $fname_flag = "Any digit,special charecter,spaces not allowed";
            $redir_flag=0;
        }else
        {
            $fname =$_REQUEST["fname"];

        }
      
        
        
    } else {
        $fname_flag = emptywarn();
        $redir_flag=0;
    }

    //lastname condition

    if (!empty($_REQUEST["lname"])) {
        
        if (!(strlen($_REQUEST["lname"]) < 30 && !preg_match("/[\d]+|\s|\W/i",$_REQUEST["lname"]))) {
            $lname_flag = "Any digit,special charecter,spaces not allowed";
            $redir_flag=0;

        }else
        {
            $lname =$_REQUEST["lname"];
        }
        
        
        
        
    } else {
        $lname_flag = emptywarn();
        $redir_flag=0;

    }

    //date of birth
    if (!empty($_REQUEST["dob"])) {
       
            $dob =$_REQUEST["dob"];


    } else {
        $dob_flag = "Please select any date";
        $redir_flag=0;

    }

    //phone number
    if (!empty($_REQUEST["phone"])) {
        if(strlen($_REQUEST["phone"])>8 && !preg_match("/\s|\W|[a-z]/i",substr($_REQUEST["phone"],1))) {
            
            $phone=$_REQUEST["phone"];    
        }else{
            $redir_flag=0;


            $phone_flag = "Field must be minimum 8 digit and can not contain any word,special charected,spaces";
        }
        
        


    } else {
        $phone_flag = emptywarn();
        $redir_flag=0;

    }
    //gender

    if (!empty($_REQUEST["gender"])) {
        $gender=$_REQUEST["gender"];
        $gender_flag = "";


    } else {
        $gender_flag = emptywarn();
        $redir_flag=0;

    }

    //email

    if (!empty($_REQUEST["email"])) {
        if(filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {
            $email = $_REQUEST["email"];
       
        }else
        {
            $email_flag = "Please write the correct email!";
            $redir_flag=0;


        }

    } else {
        $email_flag = emptywarn();
        $redir_flag=0;


    }


    //country

    if (!empty($_REQUEST["country"])) {
        $country = $_REQUEST["country"];
        $country_flag = "";


    } else {
        $country_flag = emptywarn();
        $redir_flag=0;


    }
    //city

    if (!empty($_REQUEST["city"])) {
        if (!(strlen($_REQUEST["city"]) < 30 && !preg_match("/[\d]+|\s|\W/i",$_REQUEST["city"]))) {
            $city_flag = "Any digit,special charecter,spaces not allowed";
            $redir_flag=0;

        }else
        {
            $city =$_REQUEST["city"];
        }
      
    } else {
        $city_flag = emptywarn();
        $redir_flag=0;

    }
    //address

    if (!empty($_REQUEST["addrs"])) {
        $addrs=$_REQUEST["addrs"];
        $addrs_flag = "";
    } else {
        $addrs_flag = emptywarn();
        $redir_flag=0;

    }

    //experience

    if (!empty($_REQUEST["exp"])) {
        $exp=$_REQUEST["exp"] ;
        $exp_flag = "";
    } else {
        $exp_flag = emptywarn();
        $redir_flag=0;

    }
    //education

    if (!empty($_REQUEST["edu"])) {
        $edu=$_REQUEST["edu"] ;
        $edu_flag = "";
    } else {
        $edu_flag = emptywarn();
        $redir_flag=0;

    }

    //skill

    if (!empty($_REQUEST["skill"])) {
        $skill=$_REQUEST["skill"] ;
        $skill_flag = "";
    } else {
        $skill_flag = emptywarn();
        $redir_flag=0;

    }
    //availability

    if (!empty($_REQUEST["availablity"])) {
        $availablity=$_REQUEST["availablity"] ;
        $availablity_flag = "";
    } else {
        $availablity_flag = emptywarn();
        $redir_flag=0;


    }

    //Reason


    if (!empty($_REQUEST["reason"])) {
        $reason=$_REQUEST["reason"] ;
        $reason_flag = "";
    } else {
        $reason_flag = emptywarn();
        $redir_flag=0;

    }


    //Reference

    if (!empty($_REQUEST["reference"])) {
        $reference=$_REQUEST["reference"] ;
    
        $reference_flag = "";
    } else {
        $reference_flag = emptywarn();
        $redir_flag=0;

    }

    //term and condition

    if (!empty($_REQUEST["terms"])) {
        $terms=$_REQUEST["terms"];
        $terms_flag = "";
    } else {
        $terms_flag = "*";
        $redir_flag=0;

    }
    //file upload handling
    if ($_FILES["pro_pic"]["error"]==0) {
        $pro_pic=$_FILES["pro_pic"];
        if (move_uploaded_file($pro_pic["tmp_name"],$fullpath."/")) {
            $pro_pic_flag="file uploaded successfully";
        }

    }else{
        $pro_pic_flag="Something went Wrong While Uploading";
        $redir_flag=0;
    }
    if ($_FILES["cv"]["error"]==0) {
        $cv=$_FILES["cv"];

    }else{
        $cv_flag="Something went Wrong While Uploading";
        $redir_flag=0;
    }
    if ($_FILES["aq"]["error"]==0) {
        $aq=$_FILES["aq"];

    }else{
        $aq_flag="Something went Wrong While Uploading";
        $redir_flag=0;
    }

    if ($_FILES["cert"]["error"]==0) {
        $cert=$_FILES["cert"];
        

    }else{
        $cert_flag="Something went Wrong While Uploading";
        $redir_flag=0;
    }
    if($redir_flag==0){


        
       
        
    }






    if($redir_flag==1)
    {
        redirectp("reg_success.php");

    }





}
?>