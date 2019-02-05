 <?php
 
 if(isset($_POST['mid']))
 {
 

	$_date = $_POST['dt']; //date
	$voucher_no = $_POST['vn'];

	$from_bank = $_POST['dropf'];
	$to_bank = $_POST['dropto'];

	$ac1 = $_POST['account1'];
	$ac2 = $_POST['account2'];

	$debit_amount = $_POST['da'];


	$handler=mysqli_connect("localhost","root","") or die("Server error" . mysqli_error());
    print "<h2>Server Connected!!!</h2><br>";
    
    mysqli_select_db($handler,"apnabank") or die("Database error" . mysqli_error());
    print "<h2>Database Selected</h2><br>";

     $q = "INSERT INTO debit (Date_, Voucher, FromBankAcc,ToBankAcc,Amount) VALUES ('$_date', '$voucher_no', '$from_bank','$to_bank','$debit_amount');";

     if ($handler->multi_query($q) === TRUE) {
        echo "New records created successfully";
		}
}		

?>