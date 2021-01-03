<?php
  session_start();



include('home.db.php');
$log = new homelogin();
//$namee=$_SESSION['username'];
if (isset($_POST['submit2']) ) {
$username=$_POST['username'];
$password=$_POST['password'];


$_SESSION['username']=$username;
$_SESSION['password']=$password;
}


if (isset($_POST['submit1']))
{
	echo '<h1 class="yes">Congratulations!! Your data have been submitted!! </h1>';
		
	$log->input();
}





if(isset($_POST['submit2'])){
	$log->login();
}





?>









<!DOCTYPE html>
<html>
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<head>
	<title>
		Home Login
	</title>
</head>
<body>

<style>

body{background: url("ing.png");	}
	.login{float:right;
		font-size: 22px;}
	.signup{float:left;
		margin-left: 50px;}
	.f2{margin-right: 50px;}
	.signup2{margin-left: 50px;}
		.signup3{margin-left: 50px;
			font-size: 30px;}
			.ll{font-size: 22px;}
			.s{height: 50px;
				width: 100px;
				font-size: 22px;
				border:2px inset gray;}
				.s:hover{background: darkslategray;	
					border:2px inset black;
					font-size: 28px;
					border-radius: 4px;}

				.l{height: 50px;
				width: 100px;
				font-size: 22px;
                border:2px inset gray;}
				.l:hover{background: darkmagenta;
					font-size: 28px;
					border:2px outset black;
					border-radius: 4px;}

					.a{font-size: 22px;
						border: 2px solid black;}
						.a:focus{background: darkslategray;}
						.a:hover{border: 2px groove cadetblue;}

						.p{margin-top: 0px;
							font-size: 25px;
							/*color: midnightblue;
							font-weight: bold;*/}

							.yes{text-align: center;
								color: maroon;}

							/*.a:hover{color: darkmagenta;}*/


</style>



	<h2 class="signup2"> Please SignUP first, to create your account..</h2><br><br>
	<h3 class="signup3">Sign up form</h3>
	<div></div>
	<form action="" method="post" autocomplete="off" enctype="multipart/form-data" class="signup">
	<br><p class="p">Username :<input type="text" name="username" class="a"><br><br>
	Address:<input type="text" name="address" class="a"><br><br>
	Email address:<input type="text" name="email" class="a"><br><br>
	Password:<input type="password" name="password" class="a"><br><br>
	
	Birthday:<input type="date" name="birthday" class="a"><br><br>
	Male:<input type="radio" name="gender" value="male" class="a">
	Female :<input type="radio" name="gender" value="female" class="a"><br><br>
	Upload your image:<input type="file" name="fileToUpload" id="fileToUpload" ><br><br>
	<input type="submit" name="submit1" value="sign up" class="s"><br><br><br></p>
</form>
<div class="login" >
<h3  class="ll"> Login Form</h3>
<form method="post" action=""  class="f2">
	Username:<input type="text" name="username" ><br><br>
	Password:<input type="password" name="password"><br><br>
	<input type="submit" name="submit2" value="Login" class="l">
</form>
</div>




</body>
</html>