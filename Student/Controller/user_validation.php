<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="web_project_final";

	$conn=new mysqli($servername,$username,$password,$dbname);

	$isPost=false;
	$isPPost=false;
	$addSeller= false;
	$firstName=$lastName=$email1=$pnumber=$passwrd=$address=$dob="";
	$dstrct="Select a district";
	$upzla="Account Type";
	$gender="Select Gender";


	if(isset($_POST["sellerAddbtn"]))
	{
		$isPost=true;
		if($_POST["fname"]!="")
			$firstName=$_POST["fname"];
		if($_POST["lname"]!="")
			$lastName=$_POST["lname"];
		if($_POST["email"]!="")
			$email1=$_POST["email"];
		if($_POST["email"]!="")
			$pnumber=$_POST["email"];
		if($_POST["passwrd"]!="")
			$passwrd=$_POST["passwrd"];
		if($_POST["dstrct"]!="")
			$dstrct=$_POST["dstrct"];
		if($_POST["upzlla"]!="")
			$upzla=$_POST["upzlla"];
		if($_POST["address"]!="")
			$address=$_POST["address"];
		if($_POST["gender"]!="")
			$gender=$_POST["gender"];
		if($_POST["dob"]!="")
			$dob=$_POST["dob"];
		
	}


	
	
	if(isset($_POST["sellerAddbtn"])){
				if($conn->connect_error){
					die("Connection error");
				}
				else{
					if($firstName!="" && $lastName!="" && $email1!="" && $pnumber!="" && $passwrd!="" && $address!="" && $dob!="" && $dstrct!="Select a district" && $upzla!="Account Type" && $gender!="Select Gender"){
							$fname=$_POST["fname"];
							$lname=$_POST["lname"];
							$email1=$_POST["email"];
							$pnumber=$_POST["pnumber"];
							$password=$_POST["passwrd"];
							$address=$_POST["address"];
							$upzlla=$_POST["upzlla"];
							$dstrct=$_POST["dstrct"];
							$gender=$_POST["gender"];
							$dob=$_POST["dob"]; 
					
						$q="INSERT INTO tseller(first_name,last_name,email,phone_number,password,district,upzilla,address,gender,dob) VALUES('".$fname."','".$lname."','".$email1."',
							'".$pnumber."','".$password."','".$dstrct."','".$upzlla."','".$address."','".$gender."','".$dob."')";

						$result=$conn->query($q);

						if($result){
							header("location: ../View/customer.php");
							$accountC= true;
						}
						else{
							echo("data not inserted");
							$accountC= false;
						}
						
					}
				}
	}

	
?>