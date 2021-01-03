<?php
include('connect.user.php');
$yes= new connections(); //also defining connections class in this php file..
$data = $yes->showAll();


?>
<!DOCTYPE html>
<html>
<head>
	<h2 class="h2"> Please note your ID number before deleting your data from the Database..<br>
		You'll need it later.
		<br> Thank you!!</h2>
	<title>Table</title>
</head>
<body>
	

<table border="4px" class="table" align="center">
	
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>password</th>
		<th>address</th>
		<th>country</th>
		
		<th colspan="2">Option</th>
	</tr>
	<?php foreach($data as $d):?>
	<tr class="tr">
		<td><?php echo $d['id'];?></td>
		<td style="width:20%" align="center"><?php echo $d['username'];?></td>
		<td><?php echo $d['email'];?></td>
		<td><?php echo $d['password'];?></td>
		<td style="width:20%; color: violet" align="center"><?php echo $d['address'];?></td>
		<td style="width:20%; color: maroon" align="center"><?php echo $d['country'];?></td>
		
		<td><a href="edit.php?id=<?php echo $d['id'];?>">Edit </a></td>
		<td><a href="delete.php?id=<?php echo $d['id'];?>">Delete</a></td>
	</tr>
<?php endforeach;?>

	<tr class="tr2">
</table>


<br>


<button class="b"><a href="connect.php" class="a">Main page</a></button>

<style>

	.h2{text-align: center;
		margin-top: 60px;}

	.table{text-align: center;
		width: 95%;
		margin-top: 30px;
		border: 3px groove purple;
		border-collapse: collapse;
		line-height: 50px;
	     }

	/*body{background: gray;}*/

	.a{text-decoration: none;
	   font-size-adjust: 
	   color:black;
	   ;
       }

	 .b{width: 10%;
	  margin-left: 30px;
	  text-align: center;
	  font-weight: bold;
	  
	  background: green;
	  border:2px outset olive;
	  color: black;
	  height: 50px;
	  font-size: 20px;}

	  .tr{font-size: 22px;}

	  .tr2{font-size: 24px;}


</style>
</body>
</html>