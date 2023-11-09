<?php
echo '<head><link rel="icon" href="../images/aiub-logo.svg" type="image/svg+xml"><head>';

if ( session_status()===PHP_SESSION_ACTIVE ) 
{

}else{

    session_start();
}

if (!isset( $_SESSION["user"]))
{
    header("Location: login.php");

}




?>