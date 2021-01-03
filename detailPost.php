<?php

session_start();
$namee=$_SESSION['username'];
if(!isset($namee)){
    header('location:loginbs.php');
}

$id = $_GET['id'];
include('home.db.php');
$obj = new homelogin();
$detail = $obj->detailPost($id);
?>


<style>
    .a{margin-left: 300px;
        font-style: italic;
        font-size: 16px}
    .b{margin-left: 300px;
        border: 2px inset brown;
        opacity: 0.8;
        max-height: 300px;
        max-width: 300px;
        width: 300px;
        height: 300px;
            }
    .b:hover{opacity: 1} 
    </style>


<?php include('header.php');?>


<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">


                    	
                    		
		<ul>
	<h1>Title</h1><li><h3> <?php echo $detail['title'];?></h3><br><br></li>
	<h1>Description</h1><li><h3 style="color: red; text-align: justify; border: 2px inset gray; padding: 4px;"  ><?php echo $detail['description'];?><h3><br><br></li>

		<label class="a"> The image you uploaded is:</label><br> <img class="b" style="border: 2px inset brown"  src="uploads/<?php echo $detail['image'];
        // if !$detail['image']{
        //     echo"You have no image";}
         ?>" width="250px">
</div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

