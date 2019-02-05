<?php 
	$u = $_POST["user"];
	$p = $_POST["pass"];

	$con = new mysqli("localhost","root","","pms");
	
	$q = "insert into users(username, password) values('$u','$p')";
	      echo $q;
	if($con->query($q)==TRUE)
		header("location:login.php");
	else
		echo("query not successfull");
		
	$con->close();
?>