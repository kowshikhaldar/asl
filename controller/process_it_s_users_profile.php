<?php
include("../controller/session_handle.php");
include("../model/itsdb/it_s_db.php");
if (!empty($_REQUEST["id"])) {
    $itsobj=new ItsDb();
            $con=$itsobj->connectDb();
            $result=$itsobj->getuserByUserId($con,'itsdb',$_REQUEST["id"]);
            
       
            $_SESSION["this_user"]=$result;
            $itsobj->disconnectDb($con);
}




?>