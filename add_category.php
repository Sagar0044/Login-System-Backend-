<?php

session_start();

$namee=$_SESSION['username'];
if(!isset($namee)){
    header('location:loginbs.php');
}

include('home.db.php');
$cat = new homelogin(); 


if (isset($_POST['submit1']))
{
    $cat->addCategory();

}
?>



<html>
<head>
    <title> Add User</title>
    <body>
        <style>
            .navbar-inverse
{
    background:#00796B;
    border-bottom-color: #004D40;
}
.navbar-inverse .navbar-nav>li>a,.navbar-inverse .navbar-brand,.navbar-inverse .navbar-nav>.dropdown>a .caret
{
    color: #fff;
}
.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus,
.navbar-nav>li>.dropdown-menu
{
    background:#4DB6AC;
}
.nav-pills>li>a,
{
    color: #303F9F;
}

.nav>li>a:hover, .nav>li>a:focus
{
    background-color: #EEEEEE;
}
        </style>



<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="fa fa-user-circle"></i> <?php echo $namee;?> <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-user-secret"></i> My Profile</a></li>
                    </ul>
                </li>
                <li><a href="homelogout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    
</div>

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

    <ul class="nav nav-pills nav-stacked" style="border-right:1px solid black">
        <li><a href="homelogin.php"><i class="fa fa-eye"></i> First Page</a></li>
        
        <li><a href="signup_users.php"><i class="fa fa-user"></i> Signed Up Users</a></li>
        <li><a href="table2.php"><i class="fa fa-shopping-bag"></i> Table Of Content</a></li>
        <li><a href="category.php"><i class="fa fa-th"></i> Category</a></li>
                <li><a href="post.php"><i class="fa fa-book"></i> Post</a></li>
 
        </ul>
        </div>
<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
    

    <a href="#"><strong><span class="fa fa-dashboard"></span> Category</strong></a>
    <hr>
    <form method="post" action="">
    <div class="col-md-6">
      <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="title">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
       <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea  name="description" style="width: 100%; height: 200px;" placeholder="   Please give a short description about yourself."></textarea>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="publish" value="1">
        <label class="form-check-label" for="exampleCheck1">Publish</label>
      </div>
      <input type="submit" class="btn btn-primary" name="submit1">
  </div>
     
      
    </form>
    </div>
</body>
</head>
</html>