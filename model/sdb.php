<?php

class Sdb
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

    function addstdnt($conn,$table,$dept,$name,$id,$email,$rsch,$club)
    {
        $sql = "INSERT INTO `$table` (`dept`,`name`,`id`,`email`,`research`,`club`) VALUES('$dept','$name','$id','$email','$rsch','$club');";
        echo $sql;
        $result = $conn->query($sql);
       //var_dump ($result);
        //echo "Hi";
        return $result;

    }

    function fetchstdnt($conn,$table)
   {
    $sql = "SELECT * FROM `$table`";
    //echo $sql;
    $result = $conn->query($sql);
    return $result;

   }

   function fetchstdntbyid($conn,$table, $id)
   {
    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
    //echo $sql;
    $result = $conn->query($sql);
    return $result;

   }
    
    function Deletestdnt($conn,$table,$serial)
    {
        $sql = "DELETE FROM `$table` WHERE `serial`=$serial";
        echo $sql;
        $result = $conn->query($sql);
        return $result;
    }
    function Updatestdnt($conn,$table,$serial,$dept,$name,$id,$email,$rsch, $club)
    {
        $sql = "UPDATE `$table` SET `dept` = '$dept', `name` = '$name',`id` = '$id', `email` = '$email', `research` = '$rsch', `club` = '$club' WHERE `serial` = '$serial'";
        echo $sql;
        $result = $conn->query($sql);
        return $result;
    }





    function closeCon($conn)
    {
        return $conn->close();
    }

   

}




?>