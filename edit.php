
<?php
$id = $_GET['id'];
include('connect.user.php');
$obj = new connections();
$single = $obj->getSingle($id);

// $db=$obj->editDB($db);


 if (isset($_POST['submit']))
 {
 	$obj->editDB($id);
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
	Username: <input type="text" name="username" value="<?php echo $single['username'];?>"><br><br>
	Email-Id: <input type="text" name="email" value="<?php echo $single['email'];?>"><br><br>
	Password: <input type="password" name="password" value="<?php echo $single['password'];?>"><br><br>
	Address: <input type="text" name="address" value="<?php echo $single['address'];?>"><br><br>
	Phone number: <input type="number" name="phonenumber" value="<?php echo $single['phonenumber'];?>"><br><br>
	Country: <input type="text" name="country" value="<?php echo $single['country'];?>"><br><br>
	
	<input type="submit" name="submit">
	</form>

<a href="connect.php" style="text-decoration: none">Main page</a> <br><br>

	