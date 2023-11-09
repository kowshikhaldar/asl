
 <?php
 include("../controller/session_handle.php");
 include("../view/menubar.php");


?>

<!DOCTYPE html>
<html>

<head>

    <title>Profile</title>
</head>

<body>
    <center>
    <h3>Profile</h3>
    
     <?php 
    echo '<img src='.$_SESSION["user"]["pro_pic"].' alt="profile" height="100px" width="100px">';
    ?>
    
    </center>
    <table>


        <tr>
            <td><b>First Name: </b></td><td><?php echo $_SESSION["user"]["fname"];?></td>

        </tr>
        <tr>
            <td><b>Last Name: </b></td><td><?php echo $_SESSION["user"]["lname"];?></td>

        </tr>
        <tr>
            <td><b>Date Of Birth: </b></td><td><?php echo $_SESSION["user"]["dob"];?></td>

        </tr>
        <tr>
            <td><b>Phone Number: </b></td><td><?php echo $_SESSION["user"]["phone"];?></td>

        </tr>

        <tr>
            <td><b>Gender: </b></td><td><?php echo $_SESSION["user"]["gender"];?></td>

        </tr>

        <tr>
            <td><b>Email: </b></td><td><?php echo $_SESSION["user"]["email"];?></td>

        </tr>

        <tr>
            <td><b>Username: </b></td><td><?php echo $_SESSION["user"]["uname"];?></td>

        </tr>

        



        <tr>
            <td><b>Country: </b></td><td><?php echo $_SESSION["user"]["country"];?></td>
            
        </tr>
        <tr>
            <td><b>City: </b></td><td><?php echo $_SESSION["user"]["city"];?></td>
            
        </tr>
        <tr>
            <td><b>Address: </b></td><td><?php echo$_SESSION["user"]["addrs"];?></td>
           

        </tr>
        <tr>
            <td><b>Experience: </b></td><td><?php echo $_SESSION["user"]["exp"];?></td>
           

        </tr>
        <tr>
            <td><b>Education: </b></td><td><?php echo $_SESSION["user"]["exp"];?></td>
          

        </tr>
        <tr>
            <td><b>Skills: </b></td><td><?php echo $_SESSION["user"]["skill"];?></td>
            

        </tr>
        <tr>
            <td><b>Availablity: </b></td><td><?php echo $_SESSION["user"]["availablity"];?></td>
          

        </tr>
      
        <tr>
            <td><b>References: </b></td><td><?php echo $_SESSION["user"]["reference"];?></td>
            

        </tr>
        <tr>
            <td><b>User Type: </b></td><td><?php echo $_SESSION["user"]["type"];?></td>
            

        </tr>
      


    </table>






    

</body>

</html>