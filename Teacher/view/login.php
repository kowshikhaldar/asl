
<!DOCTYPE html>
<html>
<head>
    
    <title>Aiub Library</title>
    <link rel="icon" type="image/x-icon" href="../images/aiub-logo.svg">
</head>
<body>
    <a href="https://www.aiub.edu/"><img src="../images/aiub-logo.svg" alt="aiub-logo"></a>
    <h1>Teacher Log In</h1>
    <?php
	include ("../controll/process.php");
    ?>

    
    <form action="../controll/process.php" method="POST">
    <table>
    <tr>
		<td>
            <h4>E-mail:</h4>
        </td>
		<td>
            <input type="email" >
		    <?php echo $email;?>
        </td>
    </tr>
	<tr>
		<td>
            <h4>Password:</h4>
        </td>
		<td>
            <input type="password" >
			<?php echo $password;?>
        </td>
	</tr>
    <tr>
		<td>
            <a href="home.php"><input type="submit" value="Log In"></a>
        </td>
	</tr>
	
    <tr>
        <td>
            <h3><a href="reg.php">REGISTRATION</a></h3>
        </td>
    </tr>
    </table>
    

    </form>
    
</body>
</html>