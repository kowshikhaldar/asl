<?php
include("../model/itsdb/it_s_db.php");

if (!empty($_REQUEST["del"])) {
    if ($_REQUEST["del"] == 1) {
        
        if (!empty($_REQUEST["id"])) {

            
         $itsobj=new ItsDb();
         $con=$itsobj->connectDb();
         $result=$itsobj->deleteUser($con,'itsdb',$_REQUEST["id"]);
         if ($result === true) {
            echo 1;
         }else{
            echo 0;
         }
         $itsobj->disconnectDb($con);

        }

    }

} else if (!empty($_REQUEST["up"])) {
    if ($_REQUEST["up"] == 1) {
        if (!empty($_REQUEST["id"])) {
            $itsobj=new ItsDb();
            $con=$itsobj->connectDb();
            $result=$itsobj->getuserByUserId($con,'itsdb',$_REQUEST["id"]);
            
       
            echo( json_encode($result));
            $itsobj->disconnectDb($con);
            
        }

    }
} else if (!empty($_REQUEST["view"])) {
    if ($_REQUEST["view"] == 1) {
        if (!empty($_REQUEST["id"])) {
            # code...
        }

        echo "view function called";

    }
}

?>