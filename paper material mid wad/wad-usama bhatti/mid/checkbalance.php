 <?php
 if(isset($_POST['checkbalance']))
 {
 
$handler=mysqli_connect("localhost","root","") or die("Server error" . mysqli_error());
    
 mysqli_select_db($handler,"apnabank") or die("Database error" . mysqli_error());

 $q2= "SELECT * FROM debit";
    $re = mysqli_query($handler,$q2) or die("Query Error" . mysqli_error()); 

        ?>
        <div class="container">
  <table class="table">
    <head>
        <tr>
            <td>Date</td>
            <td>Voucher</td>
            <td>From</td>
            <td>To</td>
            <td>Amount</td>
        </tr>
    </head>
</table>
</div>

       <?php  if($re->num_rows > 0)
        {
             while($row = $re->fetch_assoc()) { ?>
                <tr>
                <td><?php echo $row['Date_'] ?></td>
                <td><?php echo $row['FromBankAcc'] ?></td>
                <td><?php echo $row['ToBankAcc'] ?></td>
                <td><?php echo $row['Amount'] ?></td>
                <br>
                </tr>
              
             <?php } ?>
       <?php } ?>

 <?php } ?>