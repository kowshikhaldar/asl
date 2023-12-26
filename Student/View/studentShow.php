<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="web_project_final";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	$q="SELECT * from tseller";
	$result=$conn->query($q);
	$output='<table border="1" width=100%><tr><th>Name</th><th>Email</th><th>Phone Number</th><th>Address</th><th>Gender</th><th>Date of birth</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= "<tr><td>{$row["first_name"]} {$row["last_name"]}</td><td>{$row["email"]}</td><td>{$row["phone_number"]}</td><td>{$row["address"]}</td><td>{$row["gender"]}</td><td>{$row["dob"]}</td></tr>";
		}
		$output.='</table>';
	}
	else
		echo "No User Found";
	
	
}
$conn->close();
echo $output;
?>