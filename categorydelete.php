<?php
$id = $_GET['id'];
include('home.db.php');
//include('table.php');
$object = new homelogin();

 	$object->deleteCategory($id);
 
 
?>
<script>
window.alert(5 + 6);
</script>;
