<?php
include("../controller/session_handle.php");
include("../view/menubar.php");
include("../controller/process_it_s_users_profile.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <title>Profile</title>
    <link rel="stylesheet" href="../css/it_s_Data_Profile.css">
</head>

<body>
    

   

    <center  id="it_s_profile_header_center">
    <h3>Profile</h3>

    <?php
    echo '<img id="profile_picture" src=' . $_SESSION["this_user"]["picture"] . ' alt="Profile Picture" height="200px" width="200px">';
    ?>
    </center>
    <table>


        <tr>
            <td><b>First Name: </b></td>
            <td><?php echo $_SESSION["this_user"]["fname"]; ?></td>
        </tr>
        <tr>
            <td><b>Last Name: </b></td>
            <td><?php echo $_SESSION["this_user"]["lname"]; ?></td>
        </tr>
        <tr>
            <td><b>Date Of Birth: </b></td>
            <td><?php echo $_SESSION["this_user"]["dob"]; ?></td>
        </tr>
        <tr>
            <td><b>Phone Number: </b></td>
            <td><?php echo $_SESSION["this_user"]["phone"]; ?></td>
        </tr>
        <tr>
            <td><b>Gender: </b></td>
            <td><?php echo $_SESSION["this_user"]["gender"]; ?></td>
        </tr>
        <tr>
            <td><b>Email: </b></td>
            <td><?php echo $_SESSION["this_user"]["email"]; ?></td>
        </tr>
        <tr>
            <td><b>UserID: </b></td>
            <td><?php echo $_SESSION["this_user"]["id"]; ?></td>
        </tr>
        <tr>
            <td><b>Country: </b></td>
            <td><?php echo $_SESSION["this_user"]["country"]; ?></td>
        </tr>
        <tr>
            <td><b>City: </b></td>
            <td><?php echo $_SESSION["this_user"]["city"]; ?></td>
        </tr>
        <tr>
            <td><b>Address: </b></td>
            <td><?php echo $_SESSION["this_user"]["address"]; ?></td>
        </tr>
        <tr>
            <td><b>Experience: </b></td>
            <td><?php echo $_SESSION["this_user"]["experience"]; ?></td>
        </tr>
        <tr>
            <td><b>Education: </b></td>
            <td><?php echo $_SESSION["this_user"]["education"]; ?></td>
        </tr>
        <tr>
            <td><b>Skills: </b></td>
            <td><?php echo $_SESSION["this_user"]["skills"]; ?></td>
        </tr>
        <tr>
            <td><b>Availablity: </b></td>
            <td><?php echo $_SESSION["this_user"]["availability"]; ?></td>
        </tr>
        <tr>
            <td><b>References: </b></td>
            <td><?php echo $_SESSION["this_user"]["reference"]; ?></td>
        </tr>
        <tr>
            <td><b>User Type: </b></td>
            <td><?php echo $_SESSION["this_user"]["type"]; ?></td>
        </tr>
    </table>

</body>

</html>
