<?php
$servername="localhost";
$username="root";
$password="";
$dbname="web_project_final";

			$first_name="";
			$last_name="";
			$email1="";
			$phone_number="";
			$address="";
			$upzilla="";
			$district="";
			$dob="";
			$gender="";

$srchEmail="";

if(isset($_POST["sellerSrch"])){
	$srchEmail=$_POST["srchemail"];
}


	$conn=new mysqli($servername,$username,$password,$dbname);

	$q="SELECT * FROM tseller WHERE email='$srchEmail'";

	$result=$conn->query($q);        

	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			$first_name=$row["first_name"];
			$last_name=$row["last_name"];
			$email1=$row["email"];
			$phone_number=$row["phone_number"];
			$address=$row["address"];
			$upzilla=$row["upzilla"];
			$district=$row["district"];
			$dob=$row["dob"];
			$gender=$row["gender"];
		}
	}



	$efirstName=$elastName=$epnumber=$eaddress=$edob="";
	$edstrct="";
	$eupzla="";
	$egender="";
	$SEmail="";

	if(isset($_POST["srchsavebtn"]))
	{
		if($_POST["eemail"]!="")
			$SEmail=$_POST["eemail"];
		if($_POST["efname"]!="")
			$efirstName=$_POST["efname"];
		if($_POST["elname"]!="")
			$elastName=$_POST["elname"];
		if($_POST["edstrct"]!="")
			$edstrct=$_POST["edstrct"];
		if($_POST["eupzlla"]!="")
			$eupzla=$_POST["eupzlla"];
		if($_POST["epnumber"]!="")
			$epnumber=$_POST["epnumber"];
		if($_POST["eaddress"]!="")
			$eaddress=$_POST["eaddress"];
		if($_POST["egender"]!="")
			$egender=$_POST["egender"];
		if($_POST["edob"]!="")
			$edob=$_POST["edob"];
		
	}

	if(isset($_POST["srchsavebtn"])){
		if($conn->connect_error){
			die("Connection error");
		}
		else{
			if($efirstName!="" && $elastName!="" && $epnumber!="" && $eaddress!="" && $edob!="" && $edstrct!="" && $eupzla!="" && $egender!=""){
				$efname=$_POST["efname"];
				$elname=$_POST["elname"];
				$epnumber=$_POST["epnumber"];
				$eaddress=$_POST["eaddress"];
				$eupzlla=$_POST["eupzlla"];
				$edstrct=$_POST["edstrct"];
				$egender=$_POST["egender"];
				$edob=$_POST["edob"]; 
	
				$q1 = "UPDATE tseller SET first_name='$efname', last_name='$elname', phone_number='$epnumber', district='$edstrct', upzilla='$eupzlla',
				 address='$eaddress', gender='$egender', dob='$edob' WHERE email='$SEmail'";
	

				if ($conn->query($q1) === TRUE) {
					echo "Record updated successfully";
					header("location: ../View/customer.php");
				} else {
					echo "Error updating record: " . $conn->error;
				}
			}
				
		}
	}



	if(isset($_POST["srchdeletebtn"])){
		if($_POST["eemail"]!="")
			$SEmail=$_POST["eemail"];
		if($conn->connect_error){
			die("Connection error");
		}
		else{
				$q2 = "DELETE FROM tseller WHERE email='$SEmail'";
	
				if ($conn->query($q2) === TRUE) {
					echo "Record updated successfully";
					header("location: ../View/customer.php");
				} else {
					echo "Error updating record: " . $conn->error;
				}
			
				
		}
	}


	

?>

