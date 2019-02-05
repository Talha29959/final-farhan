<?php
$u = $_POST["user"];
$p = $_POST["pass"];

$con = new mysqli("localhost","root","","pms");
$q = "select * from users where username='$u' and password='$p'";

$ds = $con->query($q);
if($ds->num_rows>0)
{
		session_start();
		$_SESSION["user"]="valid";
		$_SESSION["Name"]=$u;
		setCookie("user",$u,time()+60*60*24*30);
		setCookie("password",$p,time()+60*60*24*30);
		header("location:patients.php");
		
}else
		header("location:login.php");	


?>