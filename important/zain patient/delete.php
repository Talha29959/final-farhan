<?php 

$id = $_GET["id"];
$con = new mysqli("localhost","root","","pms");
$q = "delete from patients where id=$id";
$con->query($q);
?>


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
	<td><a href='#' onclick='deleteFun($id);'>Delete</a></td>
 </tr>
 <?php
}
?>
</table>

