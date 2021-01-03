<?php
$id = $_GET['id'];
include('db.user.php');
//include('table.php');
$object = new employee();

 	$object->delete($id);
 	
?>

