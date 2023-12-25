<?php


class Regdb
{
    function openCon()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project";
        $conn = new mysqli($servername, $username, $password, $dbname);
        return $conn;

    }

    function Addreg($conn,$table,$fname,$lname,$email,$address,$dob,$gender,$experience,$education,$uname,$newpass,$cpass,$phnno)
    {
        $sql = "INSERT INTO `$table`( `fname`, `lname`, `email`, `address`, `dob`, `gender`, `experience`, `education`, `user_name`, `new_pass`, `confirm_pass`, `phone_no`) VALUES ('$fname','$lname','$email','$address','$dob','$gender','$experience','$education','$uname','$newpass','$cpass','$phnno')";
        
        echo $sql;
        $result = $conn->query($sql);
        
        return $result;

    }

    function fetchme($conn,$table,$uname)
   {
    $sql = "SELECT * FROM `$table` WHERE   `user_name` = '$uname'";
    //echo $sql;
    $result = $conn->query($sql);
    return $result;

   }
    function closeCon($conn)
    {
        return $conn->close();
    }
}

?>