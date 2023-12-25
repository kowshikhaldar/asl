<?php
	include ("../controll/process.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Aiub Library</title>
		<link rel="icon" type="image/x-icon" href="../images/aiub-logo.svg">
	</head>
	
	
	<body>
		<a href="https://www.aiub.edu/"><img src="../images/aiub-logo.svg" alt="aiub-logo"></a>
		<h1>Teacher REGISTRATION FORM</h1>
		
		<form action= "./index.php" method="POST" >
			<table>

			<tr>
				<td>First name:</td>
				<td><input type="text" name="fn">
			        
			    </td>
			</tr>
			<tr>
				<td>Last name:</td>
				<td><input type="text" name="ln" >
				    
                </td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="un" >
				    
                </td>
            </tr>
			<tr>
				<td>ID:</td>
				<td><input type="number" name="id">
			        
			    </td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td><input type="number" name="pn">
				</td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="email"  name="em">
				</td>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="p" >
				</td>
			</tr>
			
			
			
			<tr>
				<td>Upload your ID:</td><td><input type="file" name="uf"></td>
			</tr>
						
			
			<tr>
				<td><input type="submit" value="Submit"></td>
			</tr>
			<tr>
				<td><input type="reset" value="Reset"></td>
			</tr>
			</table>
			
			
		</form>
		
		
	</body>
</html>