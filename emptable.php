<?php

session_start();
include('db.user.php');
$yes= new employee(); 
$data = $yes->All();

$name = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
	<style>
		.image{border:4px inset gray;
			display: block;
		 margin-left: auto;
  margin-right: auto;}

  .href{text-decoration: none;}

  .a{font-size: 22px;
  	background: yellow;}
  	.a:hover{background: red;
  		cursor: default;}
	</style>
	
	<title>Table</title>
</head>
<body>
	<h1>Welcome : <?php echo $name;?> </h1>

<table border="4px" class="table" align="center">
	
		<th class="a">Id</th>
		<th class="a">Name</th>
		<th class="a">Gender</th>
		<th class="a">Address</th>
		<th class="a">Education</th>
		<th class="a">Image</th>
		<th class="a"> Delete </th>
		<th class="a">View Detail</th>
		<th class="a"> Edit </th>
	
	</tr>
	<?php foreach($data as $d):?>
		
	<tr class="tr">
		<td><?php echo $d['id'];?></td>
		<td style="width:20%" align="center"><?php echo $d['name'];?></td>
		<td><?php echo $d['gender'];?></td>
		<td style="width:20%; color: violet" align="center"><?php echo $d['address'];?></td>
		<td style="width:20%; color: violet" align="center"><?php echo $d['education'];?></td>

		<td ><img class="image" src="uploads/<?php echo $d['image'];?>" width="100px"></td>
		<td><a class="href" href="delete.emp.php?id=<?php echo $d['id'];?>">Delete</a></td>
		<td align="center"><a class="href" href="empedit.php?id=<?php echo $d['id'];?>">VIEW DETAIL </a></td>
		<td><a class="href"><a href="edit.emp.php?id=<?php echo $d['id'];?>">Edit</a></td>
		
	</tr>
<?php endforeach;?>



	
</table><br><br>

<a href="user.php" style="text-decoration: none">Main page</a> <br><br>

<!-- <h2 style="text-decoration: underline; text-align: center">The Image you uploaded is: <br><br>
