<?php
include('connect.user.php');
$yes= new connections();
if (isset($_POST['submit']))
{
	$yes->insert();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Connection to DB
	</title>	
</head>
<body><br><br>
	<form method="post" action="" autocomplete="off">
	Username: <input type="text" name="username"><br><br>
	Email-Id: <input type="email" name="email"><br><br>
	Password: <input type="password" name="password"><br><br>
	Address: <input type="text" name="address"><br><br>
	Phone number: <input type="number" name="phonenumber"><br><br>
	Country: <input type="text" name="country"><br><br>
	<input type="submit" name="submit">
	</form>

</body>
</html>