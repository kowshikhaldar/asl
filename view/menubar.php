<?php
if (session_status() === PHP_SESSION_ACTIVE) {

} else {

    include("../controller/session_handle.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/menubar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,500;0,600;0,700;1,400&family=Roboto:wght@500&family=Rubik+Bubbles&display=swap"
        rel="stylesheet">
    

</head>

<body>

    <?php

    if ($_SESSION['user']['type'] == 'admin' || $_SESSION['user']['type'] == 'it') {

        //     echo ' <div class="navbar">
    
        //     Hello,'.$_SESSION['user']['fname'].'
//     <div><a href="home.php" >Home</a></div>
//     <div><a href="it_s_profile.php" >Profile</a></div>
//     <div><a href="logout.php" >Log Out</a></div>
    
        // </div>';
    

        echo '    <div class="navbar">

<div class="menubar" id="home"><a href="home.php" >Home</a></div>
<div class="menubar" id="profile"><a href="it_s_profile.php" >Profile</a></div>
<div class="menubar" id="logout"><a href="logout.php" >Log Out</a></div>
<div class=" greet">Hello,' . $_SESSION['user']['fname'] . '</div>

</div>
';


    } else {
        echo '';
    }

    ?>


</body>

</html>