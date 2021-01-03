	
<?php
$id = $_GET['id'];
include('home.db.php');

$obj = new homelogin();
$detail = $obj->detail($id);


if (isset($_POST['submit']))
 {
 	$obj->homeedit($id);
 	
 }
  
?>



<!DOCTYPE html>
<html>
<head>
	<title>
		Connection to DB
	</title>	
</head>

<body>
	<style>
		body{background: ivory	}
	</style>

	<br><br>
	<form method="post" action="" autocomplete="off" enctype="multipart/form-data">
	Username: <input type="text" name="username" value="<?php echo $detail['username'];?>"><br><br>
		

 Male <input type="radio" name="gender"  value="male"<?php if($detail['gender']=='male'){?>checked="checked"<?php }?>><br>
 Female: <input type="radio" name="gender" value="female" <?php if($detail['gender']=='female'){?>checked="checked"<?php }?>><br><br>
 
	Address: <input type="text" name="address" value="<?php echo $detail['address'];?>"><br><br>
    Email: <input type="text" name="email" value="<?php echo $detail['email'];?>"><br><br>
    Password: <input type="text" name="password" value="<?php echo $detail['password'];?>"><br><br>
    Birthday: <input type="date" name="birthday" value="<?php echo $detail['birthday'];?>"><br><br>



	Current image : <img src="uploads/<?php echo $detail['image'];?>" width="100px"> <br>
	
	<input type="file" name="fileToUpload" <?php if($sdetail['image'] =""){?>value="<?php echo $single['image'];?>"<?php }?>><br>

 
	
	<input type="submit" name="submit"> 
	</form><br><br>	

	
	

	
<a href="homelogin.php" style="text-decoration: none">Main page</a> <br><br>


	