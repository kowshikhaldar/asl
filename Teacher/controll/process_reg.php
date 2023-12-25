<?php
//session_start();
// if (isset($_SESSION["user"])) 
// {
//     header("Location: ../view/home.php");

// }


function emptywarn()
{
    return "Field can not be Blanked";
}

function redirectp($link)
{
    header("Location: $link");
    exit;
}



function uploadFile($filegot,$target,$xname)
{
    $target=$target."/";
    if(!file_exists($target))
    {
        mkdir($target,0777,true);
    }
    if(move_uploaded_file($filegot["tmp_name"],$target.$xname.basename($filegot["name"]))){
        return $target.$xname.basename($filegot["name"]);

    }else {
        return false;
    }


}


//variables
 $fn = $ln = $un = $id = $pn = $em = $p= "";

 //variable for flag
$fn_flag = $ln_flag = $un_flag = $id_flag = $pn_flag = $em_flag = $p_flag= "";

//flag for checking no error
$redir_flag=1;



//json writing failed 
$jsonfailed="";




// if (isset($_REQUEST["submt"])) {

 

//     //firstname validation
//     if (!empty($_REQUEST["fn"])) {
       
//         if (!(strlen($_REQUEST["fn"]) < 30 && !preg_match("/[\d]+|\s|\W/i",$_REQUEST["fn"]))) {
//             $fname_flag = "Any digit,special charecter,spaces not allowed";
//             $redir_flag=0;
//         }else
//         {
//             $fname =$_REQUEST["fn"];

//         }
      
        
        
//     } else {
//         $fname_flag = emptywarn();
//         $redir_flag=0;
//     }

//     //lastname validation

//     if (!empty($_REQUEST["ln"])) {
        
//         if (!(strlen($_REQUEST["ln"]) < 30 && !preg_match("/[\d]+|\s|\W/i",$_REQUEST["ln"]))) {
//             $lname_flag = "Any digit,special charecter,spaces not allowed";
//             $redir_flag=0;

//         }else
//         {
//             $lname =$_REQUEST["ln"];
//         }
        
        
        
        
//     } else {
//         $lname_flag = emptywarn();
//         $redir_flag=0;

//     }

//     if (!empty($_REQUEST["un"])) {
        
//         if (!(strlen($_REQUEST["un"]) < 30 && !preg_match("/[\d]+|\s|\W/i",$_REQUEST["un"]))) {
//             $lname_flag = "Any digit,special charecter,spaces not allowed";
//             $redir_flag=0;

//         }else
//         {
//             $lname =$_REQUEST["un"];
//         }
        
        
        
        
//     } else {
//         $lname_flag = emptywarn();
//         $redir_flag=0;

//     }
//     if (!empty($_REQUEST["id"])) {
//         if(strlen($_REQUEST["id"])>8 && !preg_match("/\s|\W|[a-z]/i",substr($_REQUEST["id"],1))) {
            
//             $phone=$_REQUEST["id"];    
//         }else{
//             $redir_flag=0;


//             $phone_flag = "Field must be minimum 8 digit and can not contain any word,special charected,spaces";
//         }
        
        


//     } else {
//         $phone_flag = emptywarn();
//         $redir_flag=0;

//     }

   

//     //phone number validation
//     if (!empty($_REQUEST["pn"])) {
//         if(strlen($_REQUEST["pn"])>8 && !preg_match("/\s|\W|[a-z]/i",substr($_REQUEST["pn"],1))) {
            
//             $phone=$_REQUEST["pn"];    
//         }else{
//             $redir_flag=0;


//             $phone_flag = "Field must be minimum 8 digit and can not contain any word,special charected,spaces";
//         }
        
        


//     } else {
//         $phone_flag = emptywarn();
//         $redir_flag=0;

//     }
    
//     //email validation

//     if (!empty($_REQUEST["em"])) {
//         // $jsondat= file_get_contents("../data/json/teacher.json");
//         // $jsondat= json_decode($jsondat,true);
        
//         // if(filter_var($_REQUEST["em"], FILTER_VALIDATE_EMAIL) ) {

//         //     
//         //     //email existence check
//         //     foreach ($jsondat as $s) {
//         //         if($s["em"] == $email) {
//         //             $redir_flag=0;
//         //             $email_flag = "Email exist.change the Email";

//         //         }
//         //     }
       
//         // }else
//         // {
//         //     $email_flag = "Please write the correct email!";
//         //     $redir_flag=0;


//         // }

//         $email = $_REQUEST["em"];

//     } else {
//         $email_flag = emptywarn();
//         $redir_flag=0;


//     }

//     // if (!empty($_REQUEST["p"])) {
//     //     $jsondat= file_get_contents("../data/json/teacher.json");
//     //     $jsondat= json_decode($jsondat,true);
        
//     //     if(filter_var($_REQUEST["p"], FILTER_VALIDATE_EMAIL) ) {

//     //        
//     //         //email existence check
//     //         foreach ($jsondat as $s) {
//     //             if($s["p"] == $email) {
//     //                 $redir_flag=0;
//     //                 $email_flag = "Email exist.change the Email";

//     //             }
//     //         }
       
//     //     }else
//     //     {
//     //         $email_flag = "Please write the correct email!";
//     //         $redir_flag=0;


//     //     }

//     // } else {
//     //     $email_flag = emptywarn();
//     //     $redir_flag=0;


//     // }

//     $pass = $_REQUEST["p"];


    
   

    //json save

    $fn=$_REQUEST["fn"];
        $ln = $_REQUEST["ln"];
        $un =$_REQUEST["un"];
        $id =$_REQUEST["id"];
        $pn=$_REQUEST["pn"];
        $em = $_REQUEST["em"];
        
        $p=$_REQUEST["p"];



    $person = array(
        "fn"=>$fn,
        "ln" =>$ln,
        "un" =>$un,
        "id" =>$id,
        "pn"=> $pn,
        "em" => $em,
        
        "p"=>$p,
        
        
        


        
        
        
    );

    print_r($person);

    $peoples=array() ;
    $jsondata=file_get_contents("../data/json/teacher.json") ; //getting contents of people.json
    $decodejsondata=json_decode( $jsondata,true ) ; //converting json data to php array
    $peoples= $decodejsondata ;
    $peoples[] = $person; //appending to people
    $encodejsondata=json_encode($peoples,JSON_PRETTY_PRINT);
    if (file_put_contents("../data/json/teacher.json",$encodejsondata)) {
        
       // redirectp("home.php");
        
    }{
        $jsonfailed= "Problem while writing jSON";
    }


       
       

    // }





?>