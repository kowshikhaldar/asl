
<?php
include("../../Controller/Librarian/Reg_process.php"); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
   
</head>
<body>
    
    <h1 align="center">Registration Form</h1>
    <Form action="" method ="POST">
    <table align="center">

        <tr>
            <td>
                <fieldset>
                    <legend>
                         <h2>Registration Information</h2>
                         </legend>
                         
<table>
        <tr>
            <td>First Name:</td>
            <td><input placeholder="Required" type="text" name="fname"> <?php  echo $fnameerror; ?></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" placeholder="Required" name="lname"><?php  echo $lnameerror; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" placeholder="abc@gmail.com" name="email"><?php  echo $emailerror; ?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" placeholder="Required" name="address"><?php  echo $addresserror; ?></td>
        </tr>
        <tr>
            <td>Date of Birth:</td>
            <td><input type="date" name="dob"><?php  echo $doberror; ?></td>
        </tr>
        
        <tr>
            <td>Gender:</td>
            <td><input type="radio" value="Male" name="gender"> Male
            <input type="radio" value="Female" name="gender"> Female
            <input type="radio" value="Custom" name="gender">Custom</td>
            <td><?php  echo $gendererror; ?></td>
        </tr>
        <tr>
            <td>Experience:</td>
            <td><input type="text" placeholder="Required" name="experience"><?php  echo $experror; ?></td>
        </tr>
        <tr>
            <td>Educational Background:</td>
            <td><input type="text" name="edubac" placeholder="Required"><?php  echo $edubacerror; ?></td>
        </tr>
        <tr>
            <td>User Name:</td>
            <td><input type="text" placeholder="Required" name="uname"><?php  echo $usernameerror ; ?></td>
        </tr>
        <tr>
            <td>Create New Pass:</td>
            <td><input type="password" placeholder="Required" name="npass"><?php  echo $passerror ; ?></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input type="password" placeholder="Required" name="cpass"><?php  echo $cnpasserror; ?></td>
        </tr>
        <tr>
            <td>Phone Number:</td>
            <td><input type="text" name="phone" value="+880"><?php  echo $pnoerror; ?></td>
        </tr>
        <tr>                        
            <td></td>
            <td><input type="submit" value="Submit" name="Submit">
            <input type="Reset" value="Reset" name="Reset"></td>
</table>
        
</Form>
</body>
</html>