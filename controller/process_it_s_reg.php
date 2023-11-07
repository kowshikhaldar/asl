<?php
function emptywarn()
{
    return "Field can not be Blanked";
}





$fname=$lname=$dob=$phone=$gender=$email=$country=$city=$addrs=$exp=$edu=$skill=$availablity=$reason=$reference="";
$fname_flag = $lname_flag = $dob_flag = $phone_flag = $gender_flag = $email_flag = $country_flag = $city_flag = $addrs_flag = $exp_flag = $edu_flag = $skill_flag = $availablity_flag = $reason_flag = $reference_flag = $terms_flag = "";


if (isset($_REQUEST["submt"])) {
    //firstname condition
    if (!empty($_REQUEST["fname"])) 
    {
        $fname_flag= "";


    }else{
        $fname_flag= emptywarn();
    }

    //lastname condition

    if (!empty($_REQUEST["lname"])) 
    {
        $lname_flag= "";


    }else{
        $lname_flag= emptywarn();
    }

    //date of birth
    if (!empty($_REQUEST["dob"])) 
    {
        $dob_flag= "";


    }else{
        $dob_flag= emptywarn();
    }

    //phone number
    if (!empty($_REQUEST["phone"])) 
    {
        $phone_flag= "";


    }else {
        $phone_flag= emptywarn();
    }
    //gender

    if (!empty($_REQUEST["gender"])) 
    {
        $gender_flag= "";


    }else {
        $gender_flag= emptywarn();
    }

    //email

    if (!empty($_REQUEST["email"]))
    {
        $email_flag="";

    }else{
        $email_flag= emptywarn();

    }


    //country

    if (!empty($_REQUEST["country"]))
    {
        $country_flag= "";
       

    }else{
        $country_flag= emptywarn();

    }
    //city

    if (!empty($_REQUEST["city"]))
    {
        $city_flag= "";

    }else{
        $city_flag= emptywarn();
    }
    //address

    if (!empty($_REQUEST["addrs"]))
    {
        $addrs_flag= "";
    }else{
        $addrs_flag= emptywarn();
    }

    //experience

    if (!empty($_REQUEST["exp"]))
    {
        $exp_flag= "";
    }else{
        $exp_flag= emptywarn();
    }
    //education

    if (!empty($_REQUEST["edu"]))
    {
        $edu_flag= "";
    }else{
        $edu_flag= emptywarn();
    }

    //skill

    if (!empty($_REQUEST["skill"]))
    {
        $skill_flag= "";
    }else{
        $skill_flag= emptywarn();
    }
    //availability

    if (!empty($_REQUEST["availablity"]))
    {
        $availablity_flag= "";
    }else{
        $availablity_flag= emptywarn();
    
    }

    //Reason


    if (!empty($_REQUEST["reason"]))
    {
        $reason_flag= "";
    }else{
        $reason_flag= emptywarn();
    }


    //Reference

    if (!empty($_REQUEST["reference"]))
    {
        $reference_flag= "";
    }else{
        $reference_flag= emptywarn();
    }

    //term and condition

    if (!empty($_REQUEST["terms"]))
    {
        $terms_flag= "";
    }else{
        $terms_flag= emptywarn();
    }

    


    
}
?>