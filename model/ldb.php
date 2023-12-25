<?php

class ldb
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

   function insertbook($conn,$table,$bname,$aname,$booktypes,$isbn,$pdate)
   {
    $sql = "INSERT INTO `$table`(`book_name`, `author_name`, `book_types`, `isbn_no`, `publication_date`) VALUES ('$bname','$aname','$booktypes',$isbn,'$pdate');";
    echo $sql;
    $result = $conn->query($sql);
    var_dump($result);
    return $result;
   }


   function fetchbook($conn,$table)
   {
    $sql = "SELECT * FROM `$table`";
    //echo $sql;
    $result = $conn->query($sql);
    return $result;
   }

   function fetchbookbyisbn($conn,$table, $isbn)
   {
    $sql = "SELECT * FROM `$table` WHERE  `isbn_no` = '$isbn'";
    //echo $sql;
    $result = $conn->query($sql);
    return $result;
   }


   function DeleteBook($conn,$table, $serial)
   {
    $sql = "DELETE FROM `$table` WHERE serial_id=$serial";
    echo $sql;
    $result = $conn->query($sql);
    return $result;

   }

   function UpdateBook($conn,$table,$serial,$bname,$aname,$booktypes,$isbn,$pdate,)
   {
    $sql = "UPDATE `$table` SET  `book_name` = '$bname', `author_name` = '$aname',`book_types` = '$booktypes', `isbn_no` = $isbn, `publication_date` = '$pdate' WHERE `serial_id` = '$serial' ";
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