<?php
session_start();
require "db_connection.php";
if(!isset($_SESSION['user_name'])){
    header('location: login.php');
}
if(isset($_POST['apply'])){
    $name = $_POST['student_name'];
    $reg = $_POST['student_reg'];
    $cgpa = $_POST['student_cgpa'];
    $sel_reg = "select * from students where student_reg = '$reg'";
    $run_reg  = mysqli_query($connection,$sel_reg);
    $count = mysqli_num_rows($run_reg);
    if($count==0) {
        $insert_student = "insert into students (student_name,student_reg,student_cgpa) values ('$name','$reg','$cgpa')";
        $run_insert = mysqli_query($connection, $insert_student);
        if ($run_insert) {
            header('location:index.php');
        }
    }
}
function getScholarship($cgpa = 0){
    if($cgpa >=3.95) return 100;
    else if($cgpa >=3.90 && $cgpa <3.95) return 75;
    else if($cgpa >=3.50 && $cgpa <3.90) return 50;
    else if($cgpa >=3.25 && $cgpa <3.50) return 25;
    else if($cgpa >=3.00 && $cgpa <3.25) return 12.5;
    else return 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students Scholarship</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body id="home">
<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="img/UCP-Logo.gif" width="50" height="50" alt=""><h3 class="d-inline align-middle"> Scholarships </h3>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#showcase" class="nav-link">Students</a>
                </li>
                <li class="nav-item">
                    <a href="#join" class="nav-link">Join</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- JOIN -->
<section id="join" class="bg-light py-4">
    <div class="container-fluid">
        <div class="row">
            <!--Question-2 Part 2 : Write CSS code in line below accordingly-->
            <div class="col-sm-12 col-lg-9">
                <h3>Register Student</h3>
                <p class="lead">UCP offers up-to 100% scholarship for undergraduate students</p>
                <form name="studentForm" id="studentForm" action="" method="post">
                    <div class="form-row">
                        <!--Question-2 Part 2 : Write CSS code in line below accordingly-->
                        <div class="col-md-12 col-xl-4">
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control"
                                           id="student_name"
                                           name="student_name" placeholder="Student Name" required
                                           pattern="^([a-zA-Z]+[\s-]?)*[a-zA-Z]+$">
                                    <!--Question-1 Part 1 : Write Regex in line above accordingly-->
                                </div>
                            </div>
                        </div>
                        <!--Question-2 Part 2 : Write CSS code in line below accordingly-->
                        <div class="col-md-6 col-md-6 col-xl-4">
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" placeholder="Registration Number"
                                           name="student_reg" id="student_reg" required onkeyup="check_student(this.value)"
                                           pattern="^(L|l)1([fF]|[sS])(\d{2})([a-zA-Z]{4})(\d{4})$"><br>
                                    <!--Question-1 Part 2 : Write Regex in line above accordingly-->
                                    <div id="hint"></div>
                                </div>
                            </div>
                        </div>
                        <!--Question-2 Part 2 : Write CSS code in line below accordingly-->
                        <div class="col-md-6 col-xl-4">
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <input type="text"
                                           class="form-control" placeholder="cgpa"
                                           id="student_cgpa" name="student_cgpa" required
                                           pattern="^(([0-4]{1})|([0-3]{1}\.\d{1,2}))|[4]\.[0]{1,2}$">
                                    <!--Question-1 Part 6 : Write Regex in line above accordingly-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-danger d-none" id="alert">
                        Student Already Registered
                    </div>
                    <input type="submit" value="Apply" id="apply" name="apply" class="btn btn-info btn-block btn-lg">
                </form>
            </div>
            <!--Question-2 Part 1 : Write HTML code and CSS classes in line below accordingly-->
            <div class="col-lg-3 d-none d-lg-block align-self-center">
                <img src="img/UCP-Logo.gif" alt="FoIT" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<section id="showcase" class="py-5">
    <div class="primary-overlay text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center offset-lg-3">
                    <h4 class="display-4 mt-5 pt-5">
                        Students List
                    </h4>
                    <p class="lead"></p>
                    <table class="table table-hover table-responsive">
                        <thead>
                        <tr>
                            <td> Name </td>
                            <td> Reg# </td>
                            <td> CGPA </td>
                            <td> Scholarship %</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $select_students = "select * from students";
                        $run_select = mysqli_query($connection,$select_students);
                        while($row = mysqli_fetch_array($run_select)){
                            $name = $row['student_name'];
                            $reg = $row['student_reg'];
                            $cgpa = $row['student_cgpa'];
                            $scholarship = getScholarship($cgpa);
                            ?>
                            <tr>
                                <td><?php echo $name?></td>
                                <td><?php echo $reg?></td>
                                <td><?php echo $cgpa?></td>
                                <td><?php echo $scholarship?>%</td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<footer id="main-footer" class="py-3 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 ml-auto">
                <p class="lead">Copyright &copy; 2018</p>
            </div>
        </div>
    </div>
</footer>
<script>
    function check_student(reg){
        if(reg==''){
            document.getElementById('hint').innerHTML = "";
        }
        else {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('hint').innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "check_reg.php?reg="+reg);
            xhttp.send();
        }
    }
</script>
</body>
</html>