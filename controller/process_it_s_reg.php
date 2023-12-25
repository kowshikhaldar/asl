<?php
include("../model/itsdb/it_s_db.php");


session_start();
if (isset($_SESSION["user"])) {
    header("Location: ../view/home.php");

}

//emptywarn() will return field can not be blank.used give blank field warning 
function emptywarn()
{
    return "Field can not be Blanked";
}
//redirectp() takes link and redirect to that link
function redirectp($link)
{
    header("Location: $link");

}


//uploadFile(superglobalveriable,destination,xname=uniquely indentify) function for uploading file to specific destination
function uploadFile($filegot, $target, $xname)
{
    $target = $target . "/";
    if (!file_exists($target)) {
        mkdir($target, 0777, true);
    }
    if (move_uploaded_file($filegot["tmp_name"], $target . $xname . basename($filegot["name"]))) {
        return $target . $xname . basename($filegot["name"]);

    } else {
        return false;
    }


}


//variables
$fname = $lname = $dob = $phone = $gender = $email = $country = $city = $addrs = $exp = $edu = $skill = $availablity = $reason = $reference = $terms = "";

//variable for flag
$fname_flag = $lname_flag = $dob_flag = $phone_flag = $gender_flag = $email_flag = $country_flag = $city_flag = $addrs_flag = $exp_flag = $edu_flag = $skill_flag = $availablity_flag = $reason_flag = $reference_flag = $terms_flag = "";

//flag for checking no error
$redir_flag = 1;

//variables for files
$pro_pic = $cv = $aq = $cert = "";

//variable for file_flag 
$pro_pic_flag = $cv_flag = $aq_flag = $cert_flag = "";

//json writing failed 
$jsonfailed = "";




if (isset($_REQUEST["submt"])) {



    //firstname validation
    if (!empty($_REQUEST["fname"])) {

        if (!(strlen($_REQUEST["fname"]) < 30 && !preg_match("/[\d]+|\s|\W/i", $_REQUEST["fname"]))) {
            $fname_flag = "Any digit,special charecter,spaces not allowed";
            $redir_flag = 0;
        } else {
            $fname = $_REQUEST["fname"];

        }



    } else {
        $fname_flag = emptywarn();
        $redir_flag = 0;
    }

    //lastname validation

    if (!empty($_REQUEST["lname"])) {

        if (!(strlen($_REQUEST["lname"]) < 30 && !preg_match("/[\d]+|\s|\W/i", $_REQUEST["lname"]))) {
            $lname_flag = "Any digit,special charecter,spaces not allowed";
            $redir_flag = 0;

        } else {
            $lname = $_REQUEST["lname"];
        }




    } else {
        $lname_flag = emptywarn();
        $redir_flag = 0;

    }

    //date of birth validation
    if (!empty($_REQUEST["dob"])) {

        $dob = $_REQUEST["dob"];


    } else {
        $dob_flag = "Please select any date";
        $redir_flag = 0;

    }

    //phone number validation
    if (!empty($_REQUEST["phone"])) {
        if (strlen($_REQUEST["phone"]) > 8 && !preg_match("/\s|\W|[a-z]/i", substr($_REQUEST["phone"], 1))) {

            $phone = $_REQUEST["phone"];
        } else {
            $redir_flag = 0;


            $phone_flag = "Field must be minimum 8 digit and can not contain any word,special charected,spaces";
        }




    } else {
        $phone_flag = emptywarn();
        $redir_flag = 0;

    }
    //gender validation

    if (!empty($_REQUEST["gender"])) {
        $gender = $_REQUEST["gender"];
        $gender_flag = "";


    } else {
        $gender_flag = emptywarn();
        $redir_flag = 0;

    }

    //email validation

    if (!empty($_REQUEST["email"])) {



        if (filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {

            $email = $_REQUEST["email"];
            //email existence check
           
            $itsdb = new itsdb();
            $con = $itsdb->connectDb();
            if($itsdb->isEmailExist($con, $email))
            {
                $redir_flag = 0;
                $email_flag = "Email exist.change the Email";

            }

            

        } else {
            $email_flag = "Please write the correct email!";
            $redir_flag = 0;


        }

    } else {
        $email_flag = emptywarn();
        $redir_flag = 0;


    }


    //country validation

    if (!empty($_REQUEST["country"])) {
        $country = $_REQUEST["country"];
        $country_flag = "";


    } else {
        $country_flag = emptywarn();
        $redir_flag = 0;


    }
    //city validation

    if (!empty($_REQUEST["city"])) {
        if (!(strlen($_REQUEST["city"]) < 30 && !preg_match("/[\d]+|\s|\W/i", $_REQUEST["city"]))) {
            $city_flag = "Any digit,special charecter,spaces not allowed";
            $redir_flag = 0;

        } else {
            $city = $_REQUEST["city"];
        }

    } else {
        $city_flag = emptywarn();
        $redir_flag = 0;

    }
    //address validation

    if (!empty($_REQUEST["addrs"])) {
        $addrs = $_REQUEST["addrs"];
        $addrs_flag = "";
    } else {
        $addrs_flag = emptywarn();
        $redir_flag = 0;

    }

    //experience validation

    if (!empty($_REQUEST["exp"])) {
        $exp = $_REQUEST["exp"];
        $exp_flag = "";
    } else {
        $exp_flag = emptywarn();
        $redir_flag = 0;

    }
    //education validation

    if (!empty($_REQUEST["edu"])) {
        $edu = $_REQUEST["edu"];
        $edu_flag = "";
    } else {
        $edu_flag = emptywarn();
        $redir_flag = 0;

    }

    //skill validation

    if (!empty($_REQUEST["skill"])) {
        $skill = $_REQUEST["skill"];
        $skill_flag = "";
    } else {
        $skill_flag = emptywarn();
        $redir_flag = 0;

    }
    //availability validation

    if (!empty($_REQUEST["availablity"])) {
        $availablity = $_REQUEST["availablity"];
        $availablity_flag = "";
    } else {
        $availablity_flag = emptywarn();
        $redir_flag = 0;


    }

    //Reason validation


    if (!empty($_REQUEST["reason"])) {
        $reason = $_REQUEST["reason"];
        $reason_flag = "";
    } else {
        $reason_flag = emptywarn();
        $redir_flag = 0;

    }


    //Reference validation

    if (!empty($_REQUEST["reference"])) {
        $reference = $_REQUEST["reference"];

        $reference_flag = "";
    } else {
        $reference_flag = emptywarn();
        $redir_flag = 0;

    }

    //term and condition validation

    if (!empty($_REQUEST["terms"])) {
        $terms = $_REQUEST["terms"];
        $terms_flag = "";
    } else {
        $terms_flag = "*";
        $redir_flag = 0;

    }
    //uploaded file error checking
    if ($_FILES["pro_pic"]["error"] == 0) {
        $pro_pic = $_FILES["pro_pic"];



    } else {
        $pro_pic_flag = "Something went Wrong While Uploading";
        $redir_flag = 0;
    }
    if ($_FILES["cv"]["error"] == 0) {
        $cv = $_FILES["cv"];


    } else {
        $cv_flag = "Something went Wrong While Uploading";
        $redir_flag = 0;
    }
    if ($_FILES["aq"]["error"] == 0) {
        $aq = $_FILES["aq"];


    } else {
        $aq_flag = "Something went Wrong While Uploading";
        $redir_flag = 0;
    }

    if ($_FILES["cert"]["error"] == 0) {
        $cert = $_FILES["cert"];



    } else {
        $cert_flag = "Something went Wrong While Uploading";
        $redir_flag = 0;
    }




    if ($redir_flag == 1) {
        //uploads file because everything fine
        $pro_pic_loc = uploadFile($pro_pic, "../uploads/Appli_Doc/" . date("Y-m-d") . "_" . $email . "/pro_pic", $email);
        $cv_loc = uploadFile($cv, "../uploads/Appli_Doc/" . date("Y-m-d") . "_" . $email . "/cv", $email);
        $aq_loc = uploadFile($aq, "../uploads/Appli_Doc/" . date("Y-m-d") . "_" . $email . "/aq", $email);
        $cert_loc = uploadFile($cert, "../uploads/Appli_Doc/" . date("Y-m-d") . "_" . $email . "/cert", $email);






        //associative array

        $person = array(
            "fname" => $fname,
            "lname" => $lname,
            "dob" => $dob,
            "phone" => $phone,
            "gender" => $gender,
            "email" => $email,
            "country" => $country,
            "city" => $city,
            "addrs" => $addrs,
            "exp" => $exp,
            "edu" => $edu,
            "skill" => $skill,
            "availablity" => $availablity,
            "reason" => $reason,
            "reference" => $reference,
            "terms" => $terms,
            "pro_pic" => $pro_pic_loc,
            "cv" => $cv_loc,
            "aq" => $aq_loc,
            "cert" => $cert_loc,
            "uname" => $fname,
            "pass" => $lname,
            "type" => "it",







        );
        $itsdb = new ItsDb();
        $con = $itsdb->connectDb();


        if ($itsdb->insertRegData($con, "itsdb", $person)) {

            redirectp("reg_success.php");

        } {
            $jsonfailed = "Problem while insert to database"; //using the json failed flag
        }

        $itsdb->disconnectDb($con);



        //database insert

        //json save


        // $peoples=array() ;
        // $jsondata=file_get_contents("../data/json/Applicant.json") ; //getting contents of people.json
        // $decodejsondata=json_decode( $jsondata,true ) ; //converting json data to php array
        // $peoples= $decodejsondata ;
        // $peoples[] = $person; //appending to people
        // $encodejsondata=json_encode($peoples,JSON_PRETTY_PRINT);


        // if (file_put_contents("../data/json/Applicant.json",$encodejsondata)) {

        //     redirectp("reg_success.php");

        // }{
        //     $jsonfailed= "Problem while writing jSON";
        // }






    }




}
?>