<html>

<head>
<title>SPEENGHAR TRAVEL AGENCY</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 <script>
	function date()
	{
		var data=document.getElementById('dt').value;
		var data2=data.toString();
		if(data2==data2.match(/\d{4}-\d{2}-\d{2}/g))
		{
		}
		else
		{
			alert("Invalid date");	
		}
	}
	function vou()
	{
		var data=document.getElementById('vn');

		if(data==data.match(/\d{4}/g))
		{
		}
		else
		{
			alert("Invalid Voucher");	
		}
	}
	function acc()
	{
		var data=document.getElementById('ac').value;
		if(data==data.match(/\d{2}-\d{5}-\d{8}/g))
		{
		}
		else
		{
			alert("Invalid Account");	
		}
	}
	function val() {
        var fbank = document.getElementById("drop");
        if (fbank.value == "") {
            //If the "Please Select" option is selected display error.
            alert("Please select an option in From Bank");
            return false;
        }
		var tbank = document.getElementById("drop2");
        if (tbank.value == "") {
            //If the "Please Select" option is selected display error.
            alert("Please select an option in TO Bank ");
            return false;
        }
		
        return true;
    }
	function deb()
	{
		var data=document.getElementById('de').value;
		var data2=parseInt(data);
		if(data2<10000000)
		{
		}
		else
		{
			alert("Debit nvalid");	
		}
	}
	
</script>
<body>
<div class="jumbotron text-center" style="background-color:plum;color:white">
<h1>SPEENGHAR TRAVEL AGENCY </h1>
</div>

 <nav class="navbar navbar-inverse">
	<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav nav-pills">
			<li>
				<a href="Home.html">
					<span class="glyphicon glyphicon-home"></span> Home
				</a>
			</li>
			<li>
			<a>
			<span class="glyphicon glyphicon-arrow-down" data-toggle="collapse" data-target="#debit">Debt Amount</span> 
			</a>
			</li>
		
	<li>
			<a>
			<span class="glyphicon glyphicon-arrow-down" data-toggle="collapse" data-target="#credit">Credit Amount</span> 
			</a>
			</li>
		

			<li class="nav navbar-nav navbar-right">
			<a href="Signin.html">Login
				<span class="glyphicon glyphicon-user"></span>
				</a>
			</li>
			<li class="navbar-form navbar-right" role="search">
			<form action="" method="POST">
			<input type="text" placeholder="Account #" name ="an">
			<input type="date" name= "from"/> <b style="color:white">to</b> <input type="date" name="to"/>
			<button type="submit" name="sub">Check Balance</button>
			</form>
			</li>
		</ul>
    </div>
	</div>
</nav>

















<div id="debit" class="collapse">
			<div class="container">
			<h3 style="color:green">Debit Amount</h3>
				<form>
				<div class="form-group">
				<label for ="userid">DATE</label>
				<input type="date" class="form-control" id="dt" onblur="date()" required>
				</div>
				<div class="form-group">
				<label for ="userid">VOUCHER NUMBER</label>
				<input type="number" class="form-control" id="vn" placeholder="maximum 4 digit: 1234" onblur="vou()" required>
				</div>
	<div class="row"><div class="col-sm-6">
			<div class="dropdown">
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="drop">From BANK
		<span class="caret"></span></button>
  		<ul class="dropdown-menu">
		    <li><a href="#">United Bank Limited</a></li>
		    <li><a href="#">Allied Bank Limited</a></li>
		    <li><a href="#">Habib Bank Limited</a></li>
		    <li><a href="#">Muslim Commercial Bank Limited</a></li>
		    <li><a href="#">Bank Alfalah Limited</a></li>
		    <li><a href="#">Faisal Bank Limited</a></li>
		    <li><a href="#">Albarak Bank Limited</a></li>
		    <li><a href="#">National Bank Limited</a></li>
		    <li><a href="#">Al-Habib Bank Limited</a></li>
		    <li><a href="#">Khushali Bank Limited</a></li>
		    <li><a href="#">SILK Bank Limited</a></li>
		    <li><a href="#">SUMMIT Bank Limited</a></li>
		</ul>
		</div>

		<div class="form-group">
		<label for ="userid">Account #</label>
		<input type="text" class="form-control" id="ac" onblur="acc()" required>
		</div>
</div>
<div class="col-sm-6">
		<div class="dropdown">
		  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">To BANK
		  <span class="caret"></span></button>
  			<ul class="dropdown-menu">
		    <li><a href="#">United Bank Limited</a></li>
		    <li><a href="#">Allied Bank Limited</a></li>
		    <li><a href="#">Habib Bank Limited</a></li>
		    <li><a href="#">Muslim Commercial Bank Limited</a></li>
		    <li><a href="#">Bank Alfalah Limited</a></li>
		    <li><a href="#">Faisal Bank Limited</a></li>
		    <li><a href="#">Albarak Bank Limited</a></li>
		    <li><a href="#">National Bank Limited</a></li>
		    <li><a href="#">Al-Habib Bank Limited</a></li>
		    <li><a href="#">Khushali Bank Limited</a></li>
		    <li><a href="#">SILK Bank Limited</a></li>
		    <li><a href="#">SUMMIT Bank Limited</a></li>
		  </ul>
		</div>
		<div class="form-group">
		<label for ="userid">Account #</label>
		<input type="number" class="form-control" id="ac" onblur="acc()" required>
		</div>
</div>
</div>
		<div class="form-group">
		<label for ="userid">DEBIT AMOUNT</label>
		<input type="number" class="form-control" id="de" placeholder= "100" onblur="deb()" required>
		</div>
		  <button class="btn btn-success" type="submit"  onclick="val()">Transfer Amount</button>
		</form>
		</div>
		</div>

<div id="credit" class="collapse">
			<div class="container">
			<h3 style="color:green">Credit Amount</h3>
				<form>
				<div class="form-group">
				<label for ="userid">DATE</label>
				<input type="date" class="form-control" id="dt" required>
				</div>
				<div class="form-group">
				<label for ="userid">VOUCHER NUMBER</label>
				<input type="number" class="form-control" id="vn" placeholder="maximum 4 digit: 1234"required>
				</div>
	<div class="row"><div class="col-sm-6">
			<div class="dropdown">
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">From BANK
		<span class="caret"></span></button>
  		<ul class="dropdown-menu">
		    <li><a href="#">United Bank Limited</a></li>
		    <li><a href="#">Allied Bank Limited</a></li>
		    <li><a href="#">Habib Bank Limited</a></li>
		    <li><a href="#">Muslim Commercial Bank Limited</a></li>
		    <li><a href="#">Bank Alfalah Limited</a></li>
		    <li><a href="#">Faisal Bank Limited</a></li>
		    <li><a href="#">Albarak Bank Limited</a></li>
		    <li><a href="#">National Bank Limited</a></li>
		    <li><a href="#">Al-Habib Bank Limited</a></li>
		    <li><a href="#">Khushali Bank Limited</a></li>
		    <li><a href="#">SILK Bank Limited</a></li>
		    <li><a href="#">SUMMIT Bank Limited</a></li>
		</ul>
		</div>

		<div class="form-group">
		<label for ="userid">Account #</label>
		<input type="number" class="form-control" id="vn" required>
		</div>
</div>
<div class="col-sm-6">
		<div class="dropdown">
		  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">To BANK
		  <span class="caret"></span></button>
  			<ul class="dropdown-menu">
		    <li><a href="#">United Bank Limited</a></li>
		    <li><a href="#">Allied Bank Limited</a></li>
		    <li><a href="#">Habib Bank Limited</a></li>
		    <li><a href="#">Muslim Commercial Bank Limited</a></li>
		    <li><a href="#">Bank Alfalah Limited</a></li>
		    <li><a href="#">Faisal Bank Limited</a></li>
		    <li><a href="#">Albarak Bank Limited</a></li>
		    <li><a href="#">National Bank Limited</a></li>
		    <li><a href="#">Al-Habib Bank Limited</a></li>
		    <li><a href="#">Khushali Bank Limited</a></li>
		    <li><a href="#">SILK Bank Limited</a></li>
		    <li><a href="#">SUMMIT Bank Limited</a></li>
		  </ul>
		</div>
		<div class="form-group">
		<label for ="userid">Account #</label>
		<input type="number" class="form-control" id="acc" required>
		</div>
</div>
</div>
		<div class="form-group">
		<label for ="userid">DEBIT AMOUNT</label>
		<input type="number" class="form-control" id="de" onblur="deb()" required>
		</div>
		  <button class="btn btn-success" type="submit">Transfer Amount</button>
		</form>
		</div>
		</div>


 <?php
 if(isset($_POST['sub']))
 {
 
$fd = $_POST['from'];
$td = $_POST['to'];
$ac = $_POST['a'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apnabank";

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

</body>
</html>