<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration</title>
</head>
<body>
<?php
if (!isset($_SESSION['username'])) { ?>
<h5>Registration</h5>
<?php
if (isset($_GET['register_action'])) {
if ($_GET['register_action'] == "success") { ?>
Successfully Registered!
<?php }
}
?>
<form method="post" action="register-action.php">
<label>Username:</label><br>
<input type="text" name="username" /><br>
<label>Password:</label><br>
<input type="password" name="password" /><br>
<label>Full Name:</label><br>
<input type="text" name="name" /><br>
<input type="submit" value="Register" />
</form>
Already a member? Click <a href="index.php">here</a> to login.
<?php } else { ?>
You already logged in. Click <a href="logout.php">here</a> to logout.
<?php }
?>
</body>
</html>