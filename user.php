<?php
//session_start();

include('db.user.php');
$yes= new employee();
	
if (isset($_POST['submit']))
{
	$yes->insert();
}

if(isset($_POST['submit2'])){
	//$log=$obj->login();
}

//nclude('db.user.php');
//$obj = new employee();
if(isset($_POST['submit'])){
	$log=$obj->login();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		employee form
	</title>
</head>
<body>
	<form method="post" action="" enctype="multipart/form-data">
	Input your name:<input type="text" name="name"><br><br>
	Password: <input type="password" name="password"><br><br>
	Please select your Education:<select  name="education">
		<option value="Below SLC">Below SLC</option>
		<option value="SLC">SLC</option>
		<option value="Above High School">Above High School</option> 
		<option value="Above Bachelors">Above Bachelors</option>
		<option value="Above Masters">Above Masters</option>
	</select><br><br>
	Please select your gender<br>
	Male:<input type="radio" name="gender" value="Male"><br>
	Female:<input type="radio" name="gender" value="Female"><br>
	Other:<input type="radio" name="gender" value="Other"><br><br>
	Address:<input type="text" name="address">	<br><br>
	
   <br><br> Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br><br>
	<input type="submit" name="submit">


	

	
</form>

<!--<img src="uploads/<?php //echo $_SESSION['image'];?>" width="300px">-->

</body>
</html>

<?php
//$id=$_GET['id'];
// include('db.user.php');
// $obj = new employee();
// $login = $obj->login($id);
// //$sagar=$_POST['username'];
// //include('logindb.php');	
// $obj = new employee();

// include('db.user.php');
// //$obj = new employee();
// if(isset($_POST['submit'])){
// 	$log=$obj->login();

// $loog = $obj->All();

// //$id = $_GET['id'];
// //$log = $obj->login($id);
// foreach ($loog as $logg) 
	




// if ($_POST['username']== 'sagar')	
// {
// header('location:emptable.php');
// }

?>


<form method="post" action="" enctype="multipart/form-data"> 
Name:<input type="text" name="username" ><br><br>
Password:<input type="password" name="password"><br><br>		

<input type="submit" name="submit" value="submit"><br>
</form>




