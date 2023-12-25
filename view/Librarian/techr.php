<?php 
include("head.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Book Upload</title>
   
</head>
<body>
    <h1 align="center">Teacher Management</h1>
    <Form action="" method ="POST">
    <table align="center">
        <tr>
    <td>Department</td>
             <td>
                <select name="dept">
                <option value="None" name="dept">None</option>
                    <option value="CSE" name="dept">CSE</option>
                    <option value="EEE" name="dept">EEE</option>
                    <option value="ARCHI" name="dept">ARCHI</option>
                    <option value="IPE" name="dept">IPE</option>
                    <option value="BBA" name="dept">BBA</option>
                    <option value="ENGLISH" name="dept">ENGLISH</option>
</select>
</td>
</tr>
<tr>
    <td>Name:</td>
    <td><input type="text" name="name"></td>
</tr>
    <tr>
        <td>ID:</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Researcher:</td>
            <td><input type="radio" value="Yes" name="rsch"> Yes</td>
            <td><input type="radio" value="No" name="rsch"> No</td>
        </tr>
       
        <tr> 
            <td></td>  
            <td><input type="submit" value="Search" name="Search"></td>
            <td><input type="Reset" value="Cancel" name="Cancel"></td>
        </tr>
  
</table>
        
</Form>
            

</body>
</html>






