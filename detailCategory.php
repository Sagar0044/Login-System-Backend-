<?php

session_start();
$namee=$_SESSION['username'];
if(!isset($namee)){
    header('location:loginbs.php');
}

$id = $_GET['id'];
include('home.db.php');
$obj = new homelogin();
$detail = $obj->detailCategory($id);
?>

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
			<h1>Description</h1><li><h3><?php echo $detail['description'];?><h3><br><br></li>
            </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>