<?php
include "../controll/process_reg.php";



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
		<?php
		include ("../controll/process.php");
		?>
		<h1>Teacher REGISTRATION FORM</h1>
		
		<form action= "" method="POST" >
			<table>

			<tr>
				<td>First name:</td>
				<td><input type="text" name="fn"></td><td><?php echo $fn_flag; ?></td>
			</tr>
			<tr>
				<td>Last name:</td>
				<td><input type="text" name="ln" ></td><td><?php echo $ln_flag; ?></td>
			</tr>
			<tr>
				<td>Username:</td>
				<td><input type="text" name="un" ></td><td><?php echo $un_flag; ?></td>
            </tr>
			<tr>
				<td>ID:</td>
				<td><input type="number" name="id"></td><td><?php echo $id_flag; ?></td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td><input type="number" name="pn"></td><td><?php echo $pn_flag; ?></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="email"  name="em"></td><td><?php echo $em_flag; ?></td>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="p" ></td><td><?php echo $p_flag; ?></td>
			</tr>
			
			
			
			<tr>
				<td>Upload your ID:</td><td><input type="file" name="uf"></td>
			</tr>
						
			
			<tr>
				<td><input type="submit" value="Submit" name="submt"></td>
			</tr>
			<tr>
				<td><input type="reset" value="Reset"></td>
			</tr>
			</table>
			
			
		</form>
		<?php
    	echo $jsonfailed;
    	?>
		

		</center>
		
		
	</body>
</div>
</html>