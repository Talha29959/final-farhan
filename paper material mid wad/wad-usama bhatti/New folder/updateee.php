<?php

$iid=$_POST['eid'];
echo $iid;
$name=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
echo $name;
echo $lname;
echo $age;
$con=mysql_connect("127.0.0.1","root","");
mysql_select_db("apnadatabase",$con);
$qu="UPDATE employee SET FirstName='$name',LastName='$lname',Age='$age' WHERE id='$iid'";
$row=mysql_query($qu);
echo "<a href='update.php'>VIEW RESULT</a>";
?>
