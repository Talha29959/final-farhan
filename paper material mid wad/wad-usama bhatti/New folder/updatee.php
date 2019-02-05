<?php
$id=$_GET['id'];
$con=mysql_connect("127.0.0.1","root","");
mysql_select_db("apnadatabase",$con);
$qu="SELECT * from employee where id='$id'";
$result=mysql_query($qu);
$row=mysql_fetch_array($result);
//echo $row;
?>
<form method=POST action="updateee.php">
<table>
<tr><td>
<input name ="eid" type="hidden" id="eid" value="<?php echo $row['id'] ?>">
</tr>
<tr><td>
<input type="text" name="fname" value="<?php echo $row['FirstName'] ?>">
</tr>
<tr><td>
<input type="text" name="lname" value="<?php echo $row['LastName'] ?>">
</tr>
<tr><td>
<input type="text" name="age" value="<?php echo $row['Age'] ?>">
</tr>

<tr><td><input type="submit" value="update">
</table></form>

