<?php

session_start();
$namee=$_SESSION['username'];
if(!isset($namee)){
    header('location:loginbs.php');
}	
$id = $_GET['id'];
include('home.db.php');

$obj = new homelogin();
$detail = $obj->detail($id);


if (isset($_POST['submit']))
 { 
 	$obj->homeedit($id);
 	}
  
?>

<style>
	html,body{
			height: 100%;
			margin: 0;
			background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(149,199,20,1) 0%, rgba(0,212,255,1) 96%);
		
		}
   
   .myForm{
   	background-color: rgba(0,0,0,0.5) !important;
   	padding: 15px !important;
   border-radius: 15px !important;
   color: white;
   
   }

   input{
   	border-radius:0 15px 15px 0 !important;

   }
   input:focus{
       outline: none;
box-shadow:none !important;
border:1px solid #ccc !important;

   }

   .br-15{
   	border-radius: 15px 0 0 15px !important;
   }

   #add_more{
   	color: white !important;
   	background-color: #fa8231 !important;
   	border-radius: 15px !important;
   	border: 0 !important;

   }
   #remove_more{
   	color: white !important;
   	background-color: #fc5c65 !important;
   	border-radius: 15px !important;
   	border: 0 !important;
   	display: none;

   }
   	
   .submit_btn1{
   	border-radius: 15px !important;
    background-color: #95c714 !important;
    border: 0 !important;
   }

   .submit_btn{
   	border-radius: 15px !important;
    background-color: #95c714 !important;
    border: 0 !important;
   }

   .submit_btn1:hover{font-size: 20px;
   }

   </style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Form of Users</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>

<body>
	<dvi class="container h-100">
	<div class="d-flex justify-content-center">
		<div class="card mt-5 col-md-4 animated bounceInDown myForm">
			<div class="card-header">
				<h4>Edit your Profile</h4>
			</div>
			<div class="card-body">
				<!-- <form action="" method="post"> -->
					<form method="post" action="" autocomplete="off" enctype="multipart/form-data">
					<div id="dynamic_container">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-user-graduate"></i></span>
							</div>
							<input type="text" name="username" value="<?php echo $detail['username'];?>"class="form-control"/>
						</div>
						<div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-home"></i></span>
							</div>
							
							
							<input type="text" placeholder="Address" name="address" value="<?php echo $detail['address'];?>" class="form-control"/>
						</div>


						<div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-lock"></i></span>
							</div>
							
							
							<input type="password" placeholder="password" name="password" value="<?php echo $detail['password'];?>" class="form-control"/>
						</div>


						<div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-calendar"></i></span>
							</div>
							
							
							<input type="date" placeholder="Date of Birth" name="birthday" value="<?php echo $detail['birthday'];?>" class="form-control"/>
						</div>



						<div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-at"></i></span>
							</div>
							
							
							<input type="text" placeholder="Email Address" name="email" value="<?php echo $detail['email'];?>" class="form-control"/>
						</div>


                         Current image : <img src="uploads/<?php echo $detail['image'];?>" width="100px"> <br>
						<div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-image"></i></span>
							</div>
							<input type="file" placeholder="Upload image" name="fileToUpload" value="<?php echo $detail['image'];?>" class="form-control"/>
						</div><br>

						Male <input type="radio" name="gender"  value="male"<?php if($detail['gender']=='male'){?>checked="checked"<?php }?>>	
 Female: <input type="radio" name="gender" value="female" <?php if($detail['gender']=='female'){?>checked="checked"<?php }?>><br><br>

					</div>
					 <input type="submit" name="submit" class="btn btn-success btn-sm float-left submit_btn1" class="fas fa-arrow-alt-circle-right"> </a>
				</form>
			</div>
			<div class="card-footer">

				
				<button class="btn btn-success btn-sm float-right submit_btn" > <a href="table2.php" style="text-decoration: none"><i class="fas fa-arrow-alt-circle-right"></i>View your data </button></a>

				
				
			</div>
		</div>
	</div>
	</dvi>

</body>
</html>