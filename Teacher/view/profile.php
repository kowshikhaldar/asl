<?php
include "../controll/process_profile.php";



?>


<!DOCTYPE html>
<html>
	<head>
		<title>Aiub Library</title>
		<link rel="icon" type="image/x-icon" href="../images/aiub-logo.svg">
        <link rel="stylesheet" href="../css/Buttons.css">
	</head>
	
	<div class="x">
	<body>
		<center>
		<a href="https://www.aiub.edu/"><img src="../images/aiub-logo.svg" alt="aiub-logo"></a><br>
		
		
		
		<h1>Teacher Profile</h1>
        
		<div class="btn_success">
            <table  width ="1000px" >
				<th><a href="profile.php">Profile</a></th>
				<th><a href="sss.php">Special Sub Support</a></th>
				<th><a href="book.php">Read Book</a></th>
				<th><a href="cas.php">Check About Students</a></th>
				<th><a href="home.php">Home</a></th>
				<th><a href="login.php">Sign Out</a></th>
            </table>
        </div><br><br>
        

			
		<table>
             
        <tr>
            <td>
                <img src="../images/blank-profile-picture-973460_960_720.webp" alt="photo" width="100px">
            </td>
        </tr>

        <tr>
            <td>First name:</td><td><?php echo $decodedjson[0]["fn"];?></td>
            
        </tr>
        <tr>
            <td>Last name:</td><td><?php echo $decodedjson[0]["ln"];?></td>
            
        </tr>
        <tr>
            <td>Username:</td><td><?php echo $decodedjson[0]["un"];?></td>

        </tr>
        <tr>
            <td>Phone Number:</td><td><?php echo $decodedjson[0]["pn"];?></td>
            
        <tr>
            <td>E-mail:</td><td><?php echo $decodedjson[0]["em"];?></td>
            
        <tr>
            <td>Password:</td><td><?php echo $decodedjson[0]["p"];?></td>

        </tr>
        
        
        
    
        
        <tr>
            <td>Your ID:</td><td><?php echo $decodedjson[0]["id"];?></td>
        </tr>
                    
        
        
        </table>
			
			
		

		</center>
		
		
		
	</body>
</div>
</html>