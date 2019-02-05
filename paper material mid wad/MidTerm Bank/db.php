<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,'apnabank');

$date=$_POST['date'];
$voucher=$_POST['vn'];
$acc1=$_POST['fa'];
$acc2=$_POST['ta'];
$debut=$_POST['debut'];


if(isset($_POST['tta']))
{

$que="insert into acc (Date,Voucher,FromBankAcc,ToBankAcc,Account) value('$date','$voucher','$acc1','$acc2','$debut')";
mysqli_query($con,$que);
}

?>
