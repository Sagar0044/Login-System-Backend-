<?php
$id = $_GET['id'];
include('db.user.php');


// include('db.user.php');
// $yes= new employee();


$obj = new employee();
$single = $obj->getSingle($id);

// $upp= $obj->upload($id);
// $data = $yes->All();
 // $db=$obj->editDB($db);



 if (isset($_POST['submit']))
 {
 	$obj->editDB($id);
 	
 }
  //echo $single['gender']; exit
?>

<?//php foreach($data as $d):?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Connection to DB
	</title>	
</head>
<body><br><br>
	<form method="post" action="" autocomplete="off" enctype="multipart/form-data">
	name: <input type="text" name="name" value="<?php echo $single['name'];?>"><br><br>
		<!-- Gender: <input type="text" name="gender" value="<?php //echo $single['gender'];?>"><br><br>	
	 -->

 Male <input type="radio" name="gender"  value="Male"<?php if($single['gender']=='Male'){?>checked="checked"<?php }?>><br>
 Female: <input type="radio" name="gender" value="Female" <?php if($single['gender']=='Female'){?>checked="checked"<?php }?>><br>
 Other <input type="radio" name="gender" value="Other" <?php if($single['gender']=='Other'){?>checked="checked"<?php }?>><br><br>
	address: <input type="text" name="address" value="<?php echo $single['address'];?>"><br><br>
	education: <!-- <input type="text" name="education" value="<?php //echo $single['education'];?>"><br><br>
	 -->
	  <select  name="education">
		<option value="Below SLC" <?php if($single['education']=='Below SLC'){?>selected="selected"<?php }?>>Below SLC</option>
		<option value="SLC" <?php if($single['education']=='SLC'){?>selected="selected"<?php }?>>SLC</option>
		<option value="Above High School" <?php if($single['education']=='Above High School'){?>selected="selected"<?php }?> >Above High School</option> 
		<option value="Above Bachelors" <?php if($single['education']=='Above Bachelors'){?>selectd="selected"<?php }?>>Above Bachelors</option>
		<option value="Above Masters" <?php if($single['education']=='Above Masters'){?>selected="selected"<?php }?> >Above Masters</option>
	</select><br><br> 

	Current image : <img src="uploads/<?php echo $single['image'];?>" width="100px"> <br>
	<!-- <input type="file" name="fileToUpload" value="<?php //echo $single['image'];?>"><br><br> -->
	<input type="file" name="fileToUpload" <?php if($single['image'] =""){?>value="<?php echo $single['image'];?>"<?php }?>><br>

 
	
	<input type="submit" name="submit"> 
	</form><br><br>	

	<?php echo $single['gender'];  ?><br>
		<?php echo $single['education'];  ?><br>
		<?php echo $single['address'];  ?><br>
		<?php echo $single['name'];  ?><br>
		<?php echo $single['image']; exit ?>

	

	<?//	php endforeach;?>

<a href="user.php" style="text-decoration: none">Main page</a> <br><br>


	