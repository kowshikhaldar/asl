<?php

class Tdb
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

    function addtechr($conn,$table,$dept,$name,$id,$email,$rsch)
    {
        // var_dump(empty($dept));
        // var_dump(empty($name));
        // var_dump(empty($id));
        // var_dump(empty($email));
        // var_dump(empty($rsch));
        $sql = "INSERT INTO `$table`(`dept`, `name`, `id`, `email`, `research`) VALUES ('$dept','$name','$id','$email','$rsch')";
        echo $sql;
        $result = $conn->query($sql);
        var_dump($result);
        return $result;

    }

    function fetchtechr($conn,$table)
   {
    $sql = "SELECT * FROM `$table`";
    //echo $sql;
    $result = $conn->query($sql);
    return $result;
   }

   function fetchtechrbyid($conn,$table,$id)
   {
    $sql = "SELECT * FROM `$table` WHERE id = '$id'";
    //echo $sql;
    $result = $conn->query($sql);
    return $result;
   }
    
    function Deletetechr($conn,$table,$serial)
    {
        $sql = "DELETE FROM `$table` WHERE `serial`=$serial";
        echo $sql;
        $result = $conn->query($sql);
        return $result;
    }
    function Updatetechr($conn,$table,$serial,$dept,$name,$id,$email,$rsch)
    {
        $sql = "UPDATE `$table` SET  `dept` = '$dept', `name` = '$name',`id` = '$id', `email` = '$email', `research` = '$rsch' WHERE `serial` = $serial ";
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