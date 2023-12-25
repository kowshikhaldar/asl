<?php
 include("../../controller/Librarian/process_home.php");

 include("../../Controller/Librarian/Login_process.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1 align="center">Login Form</h1>
    <Form action="" method ="POST">
    <table align="center">

        <tr>
            <td>
                <fieldset>
                    <legend>
                         <h2>Login Information</h2>
                         </legend>
                         <table>
        <tr>
            <td>Userame:</td>
            <td><input placeholder="Required" type="text" name="username"> </td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input placeholder="Required" type="password" name="password"> </td>
        </tr>
        <tr>                        
            <td></td>
            <td><input type="submit" value="Submit" name="Submit">
            <input type="Reset" value="Reset" name="Reset"></td>
</table>
</Form>
    <a href="">Forgot Password?</a><br>
    <a href="Registration.php">Create New Account</a>
</body>
</html>