<?php

session_start();
$namee=$_SESSION['username'];
if(!isset($namee)){
    header('location:loginbs.php');
}
include('home.db.php');

$yes= new homelogin(); 
$data = $yes->All();
?>

<html>
<head>
    <title> dashboard</title>
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
.sign{font-size: 22px;
display: inline-block;
color: skyblue;
margin-left: 22px;  
}

.imgg{border: 2px inset brown;
max-height: 150px;
max-width: 150px;
width: 120px;
height: 120px;}

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
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href=""><i class="fa fa-user-circle"></i> <?php echo $namee;?> <span class="caret">    </span></a>
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
        
      <li><a href="signup_users.php"><i class="fa fa-user"></i> Signed Up users</a></li>
      <li><a href="table2.php"><i class="fa fa-shopping-bag"></i> table of content</a></li>
        

        <li><a href="category.php"><i class="fa fa-th"></i> Category</a></li>
                <li><a href="post.php"><i class="fa fa-book"></i> Post</a></li>
                <br><br><br><br><br>
                <li><a href="team.php"><i class="fa fa-drupal"></i>Developers</a></li>

                </ul>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                    <p id="demo1" style="display:none"><?php
    echo "Hello!! $namee <br> Today is " . date("m/d/Y"). "<br>" ;?>
    <?php
echo "    The time is " . date("H:i:sa");
?></p>

<button type="button"  class="btn btn-primary" style="float: right; margin-left: 2px;" onclick="document.getElementById('demo1').style.display='none'">Hide</button>

<button type="button" style="float: right" class="btn btn-success" onclick="document.getElementById('demo1').style.display='block'">Show</button> <br>

                <a href="#"><strong><span class="fa fa-dashboard"></span> Category </strong></a> <label class="sign">All the Signed Up users..</label>


                <hr>


        
          <div class="col-md-12">

          <table class="table table-striped table-dark">
          <thead>
    
            <label><th class="th">Id</th></label>
            <label><th class="th" >Username</th></label>
            <label><th class="th" >Email</th></label>
            
            <label><th class="th">Password</th></label>
            <label><th class="th">Gender</th></label>
            <label><th class="th"> Address </th></label>
            <label><th class="th">Birthday</th></label>
            <label><th class="th"> Image </th></label>
          


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

        <td ><img class="imgg" src="uploads/<?php echo $d['image'];?>" width="100px"></td>
        
        </tr>
        <?php endforeach;?>
        </table><br><br>

      </tbody>
    </table>
        </div>
    </body>
    </head>
    </html>
