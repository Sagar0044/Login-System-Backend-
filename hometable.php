<?php

session_start();
if (
$username = $_SESSION['username'] &&
$password = $_SESSION['password']
//$password = $_SESSION['password'] 
){
include('home.db.php');

$yes= new homelogin(); 
$data = $yes->All();
$namee=$_SESSION['username'];
}	
else {
	header('location:loginbs.php');
echo "<br><br>";
}


?>

<!DOCTYPE html>
<html>
<head>

	<title>
		Table content of all users
	</title>
</head>
<body>
	<style>	
	body{background: url("3.jpg");
background-repeat: no-repeat;
background-size: cover;}
	table{border: 2px inset indigo;
		width: 90%;
		border-collapse: collapse;
		border-radius: 10px;}

		.th{border: 4px;
			font-size: 22px;
			margin-top: 2px;
			margin-left: 4px;
			font-weight: bold;
			background:lavenderblush;}
			.th:hover{background: url("5.jpg");}

			.td{font-size: 20px;
				text-align: center;
				color: black;}
				.td:hover{background: url("6.jpg");
				color: maroon;}

			.delete {text-decoration: none;
				text-align:center;
			color:black;
		font-size: 20px;
		color:maroon;}

				.edit{text-decoration: none;
					color:black;
				font-size: 20px;
			color:maroon;
			padding: 5px;
			margin:4px;}

				.detail{text-decoration: none;
				color:black;
				font-size: 20px;
			color:maroon;}

				a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: white;
    height: 50px;
    width:100px;
    text-align: center;
    margin:50px;
    line-height: 40px;
    background: black;
    border: 7px inset brown}

    a.button:hover{font-size: 20px;
    	background: red;
    	border-radius: 400px;}

    	.h1{margin: 50px;
    		font-size: 40px;
    		text-shadow: 2px 2px #ff0000; }

    		.logout {
    	text-decoration: none;
    color: white;
    height: 50px;
    width:100px;
    text-align: center;
    margin:10px;
    line-height: 40px;
    float:right;
    background: black;
    border: 7px inset brown}

    .logout:hover{
    	font-size: 20px;
    	background: red;
    	border-radius: 400px;
    }

    .last{background: url("4.jpg");}
}

.top{background: url("5.jpg");}
.td1{background: url("8.jpg");}
.td1:hover{color: red;}
		
	</style>


<div class="top">
	<h1 class="h1">Welcome  : <?php echo $namee;?>
 
	
	
 </h1> </div><br>

<table border="4px" class="table" align="center">
	<table border="4px" class="table" align="center">
	
		<label><th class="th">Id</th></label>
		<label><th class="th" >Username</th></label>
		<label><th class="th" >Email</th></label>
		
		<label><th class="th">Password</th></label>
		<label><th class="th">Gender</th></label>
		<label><th class="th"> Address </th></label>
		<label><th class="th">Birthday</th></label>
		<label><th class="th"> Image </th></label>
		<label><th class="th"> Delete </th></label>
		<label><th class="th"> Details </th></label>
		<label><th class="th"> Edit </th></label>


	</tr>
	<?php foreach($data as $d):?>
		
	<tr class="tr">
		<td class="td"><?php echo $d['id'];?></td>
		<td class="td"><?php echo $d['username'];?></td>
        <td class="td"><?php echo $d['email'];?></td>
        <td class="td"><?php echo $d['password'];?></td>
		<td class="td"><?php echo $d['gender'];?></td>
		<td class="td"><?php echo $d['address'];?></td>
		<td class="td"><?php echo $d['birthday'];?></td>

		<td ><img  src="uploads/<?php echo $d['image'];?>" width="100px"></td>
		<td class="td1"><a class="delete"  href="homedelete.php?id=<?php echo $d['id'];?>">Delete</a></td class="td1">
		<td  class="td1"><a class="detail" href="homedetail.php?id=<?php echo $d['id'];?>">VIEW DETAIL </a></td>
		<td class="td1"><a ><a class="edit" href="homeedit.php?id=<?php echo $d['id'];?>">Edit</a></td>
		
	</tr>
	<?php endforeach;?>
	</table><br><br>
	<div class="last">
	<a href="homelogin.php" class="button">Main page</a>

</body>
</html>
	
<a href="loginbs.php" class="logout">Logout</a> <br><br>
</div>