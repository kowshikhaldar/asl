<?php 
include("../../controller/Librarian/process_home.php");
include("head.php");

?>
<!DOCTYPE html>
<html>

<head>

    <title>Profile</title>
</head>

<body>
    <center>
    <h3>Profile</h3>
    <img src="../../images/user/user.png" alt="profile" height="100px" width="100px">
    </center>
    <table>


        <tr>
            <td>First Name:</td>
            <td><?php echo  $_SESSION["Librarian"]["fname"]?></td>

        </tr>
        <tr>
            <td>Last Name:</td>
            <td><?php echo  $_SESSION["Librarian"]["lname"]?></td>
            

        </tr>
        <tr>
            <td>Date Of Birth:</td>
            <td><?php echo  $_SESSION["Librarian"]["dob"]?></td>

        </tr>
        <tr>
            <td>Phone Number:</td>
            <td><?php echo  $_SESSION["Librarian"]["pno"]?></td>

        </tr>

        <tr>
            <td>Gender:</td>
            <td><?php echo  $_SESSION["Librarian"]["gender"]?></td>

        </tr>

        <tr>
            <td>Email:</td>
            <td><?php echo  $_SESSION["Librarian"]["email"]?></td>

        </tr>

        <tr>
            <td>Username:</td>
            <td><?php echo  $_SESSION["Librarian"]["uname"]?></td>

        </tr>

        <tr>
            <td>Address:</td>
            <td><?php echo  $_SESSION["Librarian"]["address"]?></td>
           

        </tr>
        <tr>
            <td>Experience:</td>
            <td><?php echo  $_SESSION["Librarian"]["experience"]?></td>
        </tr>
        <tr>
            <td>Educational Backgroun:</td>
            <td><?php echo  $_SESSION["Librarian"]["eduback"]?></td>
        

        </tr>
        
    </table>
    

</body>

</html>