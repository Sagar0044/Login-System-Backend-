<?php
//$id=$_GET['id'];
// include('db.user.php');
// $obj = new employee();
// $login = $obj->login($id);
// //$sagar=$_POST['username'];
// //include('logindb.php');	
// $obj = new employee();

include('db.user.php');
$obj = new employee();
if(isset($_POST['submit'])){
	$log=$obj->login();
}
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



