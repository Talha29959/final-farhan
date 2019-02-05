 <?php
 if(isset($_POST['sub']))
 {
 
$to_bank = $_POST['dropto'];
$from_bank = $_POST['dropf'];
$voucher_no = $_POST['vn'];
$_date = $_POST['dt']; //date
$ac1 = $_POST['account1'];
$ac2 = $_POST['account2'];
$debit_amount = $_POST['da'];


echo $to_bank;
echo $from_bank;
echo $voucher_no;
echo $_date;
echo $ac1;
echo $ac2;
echo $debit_amount;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from debit where FromBankAcc = '$ac' AND Date >= '$fd' AND Date <= '$td'";
    $res = mysqli_query($conn, $sql);
    ?>
<div class="container">
  <table class="table">
    <thead>
    	<tr>
    		<th>Date</th>
    		<th>Voucher</th>
    		<th>From</th>
    		<th>To</th>
    		<th>Amount</th>
    	</tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_array($res)) { ?>
    	<tr>
    		<td><?php echo $row['Date'] ?></td>
    		<td><?php echo $row['FromBankAcc'] ?></td>
    		<td><?php echo $row['ToBankAcc'] ?></td>
    		<td><?php echo $row['Amount'] ?></td>
    	</tr>
    	<?php 
    	} ?>

    </tbody>
  </table>
</div>

    <?php
 }

 ?>