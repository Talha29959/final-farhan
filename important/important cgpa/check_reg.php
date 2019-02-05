<?php
require "db_connection.php";
$reg = $_REQUEST["reg"];
$sel_reg = "select * from students where student_reg = '$reg'";
$run_reg  = mysqli_query($connection,$sel_reg);
$count = mysqli_num_rows($run_reg);
if($count>0){
    echo "Student already registered for Scholarship";
}