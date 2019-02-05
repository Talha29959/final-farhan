<html>
<head>
<title>Patient Management System</title>
</head>
<body>
<center><h1>Patient Management System </h1></center>
</body>
<br><br><br>
<form method="post" action="login_action.php">
User Name : <br><input type="text" name="user" value="<?php if(isset($_COOKIE["user"])) echo $_COOKIE["user"]; ?>" /> <br>
Password : <br><input type="password" name="pass" value="<?php  if(isset($_COOKIE["password"])) echo $_COOKIE["password"]; ?>"/> <br>
<input type="submit" value="Sign In" />
OR <a href="signup.php"><input type="button" value="Sign UP" /></a>
</form>

</html>