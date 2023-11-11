<?php
if ( session_status() === PHP_SESSION_ACTIVE ){

}else {
    
    include("../controller/session_handle.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>


<?php

if ($_SESSION['user']['type'] == 'admin' || $_SESSION['user']['type'] == 'it') {
    echo '<center><h5>Hello,</h5><h2> <i>'.$_SESSION['user']['fname'].'</i></h2></center>';
    echo ' <ul>

    <li><a href="home.php" >Home</a></li>
    <li><a href="it_s_profile.php" >Profile</a></li>

    <li><a href="logout.php" >Log Out</a></li>
</ul>';
}else{
    echo '';
} 

?>

    
</body>
</html>