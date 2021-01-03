<?php
$id = $_GET['id'];
include('home.db.php');
//include('table.php');
$object = new homelogin();

 	$object->deletePost($id);
 	
?>