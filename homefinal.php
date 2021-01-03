<?php
session_start();


include('home.db.php');
$obj = new homelogin();
if(isset($_POST['submit2'])){
	$log=$obj->login();
}

$name=$_POST['username'];

?>


<form method="post" action="" enctype="multipart/form-data"> 
Name:<input type="text" name="username" ><br><br>
Password:<input type="password" name="password"><br><br>		

<input type="submit" name="submit" value="submit"><br>
</form>



