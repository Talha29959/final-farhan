<?php
session_start();
include 'db_connection.php';
$error_msg = '';
if(isset($_POST['login'])){
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];
    $sel_user = "select * from users where user_name='$user_name' AND user_pass='$user_pass'";
    $run_user = mysqli_query($connection, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg = 'Username or Password is wrong, try again';
    }
    else{
        $_SESSION['user_name'] = $user_name;
        if(!empty($_POST['remember'])) {
            setcookie('user_name', $user_name, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('user_pass', $user_pass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('user_name','' );
            setcookie('user_pass', '');
        }
        header('location:index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
</head>
<body class="text-center">
<form class="login_form" action="login.php" method="post">
    <h2 class="text-danger"><?php echo @$_GET['not_admin']?></h2>
    <h2 class="text-primary"><?php echo @$_GET['logged_out']?></h2>
    <h3 class="m-3">Admin Login </h3>
    <div><?php echo $error_msg;?></div>
    <input type="text" id="user_name" name="user_name"
           value="<?php echo @$_COOKIE['user_name']?>" class="form-control" placeholder="Email address" required autofocus>
    <input type="password" id="user_pass" name="user_pass"
           value="<?php echo @$_COOKIE['user_pass']?>" class="form-control" placeholder="Password" required><br>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="remember" name="remember">
        <label class="form-check-label" for="remember">Remember me</label>
    </div>
    <input class="btn btn-lg btn-primary mt-3" type="submit" name="login" value="Sign in">
</form>
</body>
</html>



