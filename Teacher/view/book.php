<!DOCTYPE html>
<html >
<head>
    
    <title>Books</title>
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
    <div class="btn_success">
   
<table  width ="1000px" >
				<th><a href="profile.php">Profile</a></th>
				<th><a href="sss.php">Special Sub Support</a></th>
				<th><a href="book.php">Read Book</a></th>
				<th><a href="cas.php">Check About Students</a></th>
                <th><a href="home.php">Home</a></th>
				<th><a href="login.php">Sign Out</a></th>

			
			</table></div><br><br>
            <h1>Books</h1>
            <?php
	        include ("../controll/process_book.php");
            kk("History");
            kk("Bengaly");
            kk("English");
            kk("Urdu");
            kk("Hindi");
            kk("Arabic");
            kk("Comics");
            kk("Math");
            kk("LOcal");
            kk("Art");
            ?>

    </center>

</body>
</div>
</html> 
