<?php


$id = $_GET['id'];
//$img = $_GET['id'];
include('db.user.php');
$obj = new employee();
$single = $obj->getSingle($id);
//$imag= $obj->upload($img);
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
	<h2>Your name is: <?php echo $single['name'];?><br><br>
	Your Gender is:<?php echo $single['gender'];?><br><br>
	Your education is:<?php echo $single['education'];?><br><br>
	
	The photo you uploaded is <br><img src="uploads/<?php echo $single['image'];?>" width="250px" height="320px" border="3px"><br><br>
	You live in: <?php echo $single['address'];?></h2>
	
	
	</form>


<a href="user.php" style="text-decoration: none">Main page</a> <br><br>


