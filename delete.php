<?php
$id = $_GET['id'];
include('connect.user.php');
//include('table.php');
$object = new connections();

 	$object->delete($id);
 	
?>

