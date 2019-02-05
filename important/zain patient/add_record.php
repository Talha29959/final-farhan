<?php 
	$cnic = $_POST["cnic"];
	$name = $_POST["name"];
	$disease = $_POST["disease"];
	$entry = $_POST["entry"];
	$discharge = $_POST["discharge"];

	$con = new mysqli("localhost","root","","pms");
	
	$q = "INSERT INTO patients(cnic, name, disease, entrytime, dischargetime) values('$cnic','$name','$disease','$entry','$discharge')";
	    
	if($con->query($q)==TRUE)
		header("location:patients.php");
	else
		echo("query not successfull");
		
	$con->close();
?>