<?php



include("../controller/process_login.php");

?>


<!DOCTYPE html>
<html >
<head>

    <title>ASL Login</title>
    <link rel="icon" href="../images/aiub-logo.svg" type="image/svg+xml">
</head>
<body>

    <center><img src="https://www.aiub.edu/Files/Templates/NewAIUB/assets/images/aiub-logo.svg" alt="aiub-logo">
    <h3>Login</h3>
    <form action="" method="post">
    <table>
        <td>
            <?php echo $login_flag;?>
        </td>
    <tr>
        <td>Username:</td>
        <td><input type="text" name="username" ></td>

        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="pass" ></td>

        </tr>
        <tr>

            <td><input type="submit" name="sbmt" value="Login" ></td>

        </tr>
    </table>
    </form>
    
    <a href="it_s_reg.php">Apply for IT support?</a>
    </center>

    
    
</body>
</html>