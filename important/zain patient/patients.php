<html>
<head>
<title>Patient Management System</title>
<script>
function deleteFun(id){		
	var x = new XMLHttpRequest();
	x.open("GET","delete.php?id="+id,true);  //async request
	x.send();

	x.onreadystatechange= function(){	
	if(x.status==200&&x.readyState==4){
		document.getElementById("myspan").innerHTML=x.responseText;
	}
	};
}

</script>
</head>
<body>
<?php
session_start();
if($_SESSION["user"]!="valid")
	header("location:login.php");
?>


<center><h1><u>Welcome <?php echo $_SESSION["Name"] ?></u></h1></center>
<a href="logout.php" align="right">Signout</a><br>

<form method="post" action="add_record.php">
CNIC : <br><input type="text" name="cnic"  /> <br>
Name : <br><input type="text" name="name" /> <br>
Disease : <br><input type="text" name="disease" /> <br>
Entry Time : <br><input type="datetime-local" name="entry" > <br>
Discharge Time : <br><input type="datetime-local" name="discharge" > <br>

<input type="submit" value="Add Record" />

</form>

<span id="myspan">
<table border=1>
<tr>
<th>ID</th>
<th>CNIC</th>
<th>Disease</th>
<th>Name</th>
<th>Entry Time</th>
<th>Discharge Time</th>
<th>Action</th>
</tr>
<?php 
$con = new mysqli("localhost","root","","pms");
$q = "select * from patients";

$ds = $con->query($q); 
while($r=$ds->fetch_assoc()){
	$id=$r['id'];
?>
 <tr>
	<td><?php echo $id ?></td>
	<td><?php echo $r["cnic"]?></td>
	<td><?php echo $r["name"]?></td>
	<td><?php echo $r["disease"]?></td>
	<td><?php echo $r["entrytime"]?></td>
	<td><?php echo $r["dischargetime"]?></td>
	<td><a href='#' onclick='deleteFun(<?php echo $id ?>);'>Delete</a></td>
 </tr>
 <?php
}
?>
</table>
</body>
</html>