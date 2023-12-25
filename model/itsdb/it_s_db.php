<?php

class ItsDb
{
    private $servername = "localhost";
    private $port = 3306;
    private $dbname = "asl";
    private $username = "root";
    private $password = "";

    //function to create connection
    function connectDb()
    {
        $con = new mysqli($this->servername, $this->username, $this->password, $this->dbname, $this->port);
        if ($con->connect_error) {
            die("Failed to connect IT support database");

        } else {

            return $con;
        }

    }



    //function to Insert user data to database
    function insertRegData($con, $TABLENAME, $arr)
    {



        $fname = $arr['fname'];
        $lname = $arr['lname'];
        $dob = $arr['dob'];
        $phone = $arr['phone'];
        $gender = $arr['gender'];
        $email = $arr['email'];
        $country = $arr['country'];
        $city = $arr['city'];
        $addrs = $arr['addrs'];
        $exp = $arr['exp'];
        $edu = $arr['edu'];
        $skill = $arr['skill'];
        $availability = $arr['availablity'];
        $reason = $arr['reason'];
        $reference = $arr['reference'];
        $terms = $arr['terms'];
        $pro_pic = $arr['pro_pic'];
        $cv = $arr['cv'];
        $aq = $arr['aq'];
        $cert = $arr['cert'];
        $type = $arr['type'];



   




        $sql = "INSERT INTO $TABLENAME (
            fname,
            lname,
            dob,
            phone,
            gender,
            email,
            picture,
            country,
            city,
            address,
            experience,
            education,
            skills,
            availability,
            reason,
            reference,
            cv,
            aq,
            certificates,
            terms,
            type
        ) VALUES (
            '$fname',
            '$lname',
            '$dob',
            '$phone',
            '$gender',
            '$email',
            '$pro_pic',
            '$country',
            '$city',
            '$addrs',
            '$exp',
            '$edu',
            '$skill',
            '$availability',
            '$reason',
            '$reference',
            '$cv',
            '$aq',
            '$cert',
            '$terms',
            '$type'
        )
        ";

        if ($con->query($sql)) {
            return true;
        } else {
            return false;
        }



    }


    function getAlluser($con, $TABLENAME)
    {
        $sql = "SELECT * FROM $TABLENAME ";


        return $con->query($sql);

    }


    function getuserByUserId($con, $TABLENAME,$userid)
    {
        $sql = "SELECT * FROM $TABLENAME WHERE id='$userid' ";


        return ($con->query($sql))->fetch_assoc();

    }
    

    //check email exist

    function isEmailExist($con,$mail)
    {
        $sql="SELECT * FROM itsdb WHERE email='$mail'";
       $result= $con->query($sql);
       if($result->num_rows>0){
        return true;
       }
       return false;

    }

    




    //Delete User 
    function deleteUser($con,$TABLENAME,$userid){

        $sql="DELETE FROM $TABLENAME WHERE id='$userid'";
        $result=$con->query($sql);
        return $result;

        
    }
    //Update User 
    function updateUser(){

    }
    
    //sort User 
    function sortUser(){

    }

    function searchUserByName($con, $TABLENAME,$name)
    {
        $sql = "SELECT * FROM $TABLENAME WHERE name='$name' ";


        return ($con->query($sql));

    }
  


    


    //function to close connection
    function disconnectDb($con)
    {
        $con->close();

    }




}

?>