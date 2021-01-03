<?php

session_start();
$namee=$_SESSION['username'];
if(!isset($namee)){
    header('location:loginbs.php');
}	
$id = $_GET['id'];
include('home.db.php');

$obj = new homelogin();
$detail = $obj->postEdit($id);
$img=$obj->getAllPost($id);
$cat = $obj->getAllCategory();



if (isset($_POST['submit']))
 { 
 	$obj->poedit($id);
 	$detail = $obj->postEdit($id);

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
   	
   .submit_btn{
   	border-radius: 15px !important;
    background-color: #95c714 !important;
    border: 0 !important;
   }

   .a{margin-left: 150px;
   	border: 2px inset brown;
   	border-radius: 10px;
	 max-height: 150px;
	max-width: 200px;
	width: 120px;
	height: 120px;}

   	.a:hover{opacity: 0.8}

   	.input-group-prepend{height:200px;}
   	 .input-group-prepend1{height:1px;}


   	.mt-4{height: 200px;}

   	input.form-control{height: 200px;}

   	.input-group{height: 200px;}

   	input.image1{margin-top:40px;}
   	

   </style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!DOCTYPE html>
<html>
<head>
<title>Edit Form</title>
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
<img class="a" src="uploads/<?php echo $detail['image'];?>" width="100px"><br>				
				 	
				 Edit your Profile</h4>
			</div>
			<div class="card-body">
					<form method="post" action="" autocomplete="off" enctype="multipart/form-data">
					<div id="dynamic_container">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-user-graduate"></i></span>
							</div>
							<input type="text" name="title" value="<?php echo $detail['title'];?>"class="form-control"/>
						</div>
						<div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-image"></i></span>
							</div>

							<input type="file" class="form-control" class="image1" placeholder="upload your image" id="tbTekrarSifre" name="fileToUpload" >     
						</div>


						<div class="input-group mt-4">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-book"></i></span>
							</div>
							
							
							<input type="text" placeholder="Description" name="description" value="<?php echo $detail['description'];?>" class="form-control"/>
						</div>


						<div class="input-group mt-4">
							<div class="input-group-prepend1">
								<span class="input-group-text br-15"><i class="fas fa-book"></i></span>
							</div>
							
							
							<select name="addcate" class="form-control">
					          <?php foreach($cat as $d):?> 
					        <option value="<?php echo $d['id'];?>"> <?php echo $d['title']?> </option>
					        <?php endforeach;?>
					        </select>
						</div>


						<!-- <div class="input-group mt-4">
							<div class="input-group-prepend1">
								<span class="input-group-text br-15"><i class="fas fa-book"></i></span>
							</div>
							
							
							<select name="catenum" class="form-control">
					          <?php foreach($cat as $d):?> 
					        <option> <?php echo $d['id']?> </option>
					        <?php endforeach;?>
					        </select>
						</div> -->


						<br><br>	


						<input type="submit" name="submit" class="btn btn-success btn-sm float-left submit_btn" class="fas fa-arrow-alt-circle-right">

					</div>
				</form>
			</div>
			<div class="card-footer">

				
				<button class="btn btn-success btn-sm float-right submit_btn" > <a href="post.php" style="text-decoration: none"><i class="fas fa-arrow-alt-circle-right"></i>View your data </button></a>

				
			</div>
		</div>
	</div>
	</dvi>

</body>
</html>
<!-- <select name="addcate">
          <?php foreach($cat as $d):?> 
        <option> <?php echo $d['title']?> </option>
        <?php endforeach;?>
        </select> -->
