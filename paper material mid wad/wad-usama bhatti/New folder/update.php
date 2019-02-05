<html>
<body>
<?php
$host="localhost";
$username="root";
$pass="";
$dbname="apnadatabase";
$con = mysql_connect("$host","$username","$pass") or die("LOcalhost ERROR" . mysql_error());
mysql_select_db("$dbname",$con) or die("DB ERROR" . mysql_error());
$q = "SELECT * FROM employee";
$result = mysql_query($q) or die("QUERY ERROR" . mysql_error());
?>
<table border=1>
<tr>
<td>FNAME</td><td>LNAME</td><td>Age</td<td><UPDATE></td><td><DELETE></td></tr>
<?php
while($row = mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['FirstName']?></td>
<td><?php echo $row['LastName']?></td>
<td><?php echo $row['Age']?></td>
<td><a href="updatee.php?id=<?php echo $row['id']?>">UPDATE</a></td>
</tr>
<?php
}

mysql_close($con);
?>
</table>
</body>
</html>