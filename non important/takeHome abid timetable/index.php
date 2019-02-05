<?php
	$con   = mysqli_connect("localhost","root","","takehome");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo "Connected successfully";
	if( isset($_POST['addSlot']) ){
		print_r($_POST);
		$hours_difference = round(differenceInHours($_POST["sTime"],$_POST["eTime"]),2);	
	
			$message = "The Difference is " . $hours_difference . " hours";
			$day   = $_POST['slotWeekDay'];
			$stime = date("H:i A", strtotime($_POST['sTime']));
			$etime = date("H:i A", strtotime($_POST['eTime']));
			$slot  = $_POST['slotNo'];
			echo $stime;
			echo $etime;
			if( $hours_difference >= 1 && $hours_difference <= 3 )
			{
				$q = "delete from tableslots where weekDay = $day and slotNo = $slot ";
				
				if ($con->query($q) === TRUE) {
				} else {
					echo "Error: " . $q . "<br>" . $con->error;
				}
				
				echo 'in';
				
				$q = "insert into tableslots(weekDay,sTime,eTime,slotNo) values($day,'$stime','$etime',$slot)";
				
				if ($con->query($q) === TRUE) {
				} else {
					echo "Error: " . $q . "<br>" . $con->error;
				}
			}
			else
			{
				echo "time duration is not within range";
			}
	}
	
	function differenceInHours($startdate,$enddate){
		$starttimestamp = strtotime($startdate);
		$endtimestamp = strtotime($enddate);
		$difference = abs($endtimestamp - $starttimestamp)/3600;
		return $difference;
	}
	$sql = "SELECT id, roomNo FROM venues";
	$resultVenues = $con->query($sql);

	

?>

<?php

	

?>

<script type="text/javascript">
	
function addslots()
{
		var day   = $("#day").val();
		var stime = $("#stime").val();
		var etime = $("#etime").val();
		var slot  = $("#slotNo").val();


		adt =
		{
			"day"   : day,
			"stime" : stime,
			"etime" : etime,
			"slot"  : slot

		}

		$.ajax
		({
			type:"POST",
			url :"index.php",
			data:adt,
			dataType:"HTML"
		})
}
</script>



<html>
<body>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
function addslots()
{
		
}
</script>

<body>


<div class="jumbotron text-center">
<h1>TimeTable</h1>
</div>


<div class="container">


<div class="row">&nbsp;</div> 
		<div class="row clearfix">
		<div style="margin: 18px">
	<form method="POST" >
	<select id="day" name="slotWeekDay" >
  	<option value="1">Monday</option>
  	<option value="2">Tuesday</option>
  	<option value="3">Wednesday</option>
  	<option value="4">Thursday</option>
  	<option value="5">Friday</option>
  	<option value="6">Satuarday</option>
	</select>

  	<label>Starting Time</label>
 	<input type="time" id="stime" name="sTime"></input>
	<label>Ending Time</label>
 	<input type="time" id="etime" name="eTime"></input>

 	<label>Slot No:</label>

	<input type="number" name="slotNo" min="1" placeholder="Slot No." />
 	<button name="addSlot"> ADD SLOTS</button>
	</form>
	

</div>

		<div class="col-md-12 column">
			<table class="table table-bordered maintbl">
				<thead>
					<tr>
						<th>
							Venue
						</th>
						<th>
							Monday
						</th>
						<th>
							Tuesday
						</th>
						<th>
							Wednesday
						</th>
						<th>
							Thursday
						</th>
						<th>
							Friday
						</th>
						<th>
							Friday
						</th>
					</tr>
					<?php
					if ($resultVenues->num_rows > 0) {
						// output data of each row
						while($row = $resultVenues->fetch_assoc()) {
							?>
							<tr>
								<td><?php echo $row["roomNo"] ?></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							
							</tr>
							<?php
						}
					} else {
						echo "0 results";
					}
					?>
					<?php
						
						for ($row = 0; $row < num_rows; $row++) {
						  echo "<p><b>Row number $row</b></p>";
						  echo "<ul>";
						  for ($col = 0; $col < roomNo; $col++) {
							echo "<li>".$cars[$row][$col]."</li>";
							
							
						  }
						  echo "</ul>";
						}
					
					
					
					?>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
		</div>
		</div>
</div>
</body>
</html>