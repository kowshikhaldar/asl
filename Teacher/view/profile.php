
<!DOCTYPE html>
<html>
	<head>
		<title>Aiub Library</title>
		<link rel="icon" type="image/x-icon" href="../images/aiub-logo.svg">
	</head>
	
	
	<body>
		<a href="https://www.aiub.edu/"><img src="../images/aiub-logo.svg" alt="aiub-logo"></a><br>
		
		<?php
		include ("../controll/process.php");
		?>
		
		<h1>Teacher Profile</h1>
		<table  width ="1000px" >
				<th><a href="profile.php">Profile</a></th>
				<th><a href="sss.php">Special Sub Support</a></th>
				<th><a href="book.php">Read Book</a></th>
				<th><a href=""></a>Check About Students</th>
				<th><a href="login.php">Sign Out</a></th>

			
			</table>
		
		<form action="../controll/process.php" method="POST" >
			<table>
			<tr>
				<td>
					<img src="../images/blank-profile-picture-973460_960_720.webp" alt="photo" width="100px">
				</td>
			</tr>

			<tr>
				<td>First name:.........</td><td><?php echo $_SESSION["user"]["fname"];?></td>
				
			</tr>
			<tr>
				<td>Last name:.........</td><?php echo $_SESSION["user"]["lname"];?></td>
				
			</tr>
			<tr>
				<td>Username:........</td><?php echo $_SESSION["user"]["uname"];?></td>

            </tr>
			<tr>
				<td>Phone Number:.......</td><?php echo $_SESSION["user"]["pn"];?></td>
				
			<tr>
				<td>E-mail:.......</td><?php echo $_SESSION["user"]["email"];?></td>
				
			<tr>
				<td>Password:......</td><?php echo $_SESSION["user"]["pass"];?></td>

			</tr>
			
			<tr>
				<td>
					Gender:........
				</td><?php echo $_SESSION["user"]["gender"];?></td>
			</tr>
			
		
			
			<tr>
				<td>Your ID:.......</td><?php echo $_SESSION["user"]["id"];?></td>
			</tr>
						
			
			
			</table>
			
			
		</form>
		
		
	</body>
</html>