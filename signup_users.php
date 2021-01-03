<?php

session_start();
$namee=$_SESSION['username'];
if(!isset($namee)){
    header('location:loginbs.php');
}
include('home.db.php');

$yes= new homelogin(); 
$cat = $yes->All();
?>

<?php include('header.php');?>


<p id="demo1" style="display:none"><?php
    echo "Hello!! $namee <br> Today is " . date("m/d/Y"). "<br>" ;?>
    <?php
echo "    The time is " . date("H:i:sa");
?></p>

<button type="button"  class="btn btn-primary" onclick="document.getElementById('demo1').style.display='none'">Hide</button>

<button type="button" class="btn btn-success" onclick="document.getElementById('demo1').style.display='block'">Show</button>

<script>
window.alert("Do you wish to proceed?");
</script>




<p id="demo1"></p>
<p id="demo2"></p>




<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
   
    <a href="add_category.php"><strong><span class="fa fa-user-plus"></span> Add New</strong></a>
    <hr>
    <div class="col-md-12">

      <table class="table table-striped table-dark">
  <thead>
        <label class="bs"><th class="th">ID</th></label>
        <label><th class="th"> USERNAME </th></label>
        <label><th class="th"> Email Address </th></label>
        <label><th class="th"> IMAGE </th></label>
        <label><th class="th"> OPTIONS </th></label>


    </tr>
    <?php foreach($cat as $d):?>
        
    <tr class="tr">
        <td class="td"><?php echo $d['id'];?></td>
        
        <td class="td"><?php echo $d['username'];?>
        <td class="td"><?php echo $d['email'];?>
        <td ><img class="ii" style="border: 2px inset brown"  src="uploads/<?php echo $d['image'];?>" width="100px"></td>
        <td><a class="td1"><a class="btn btn-danger primary"   href="homedelete.php?id=<?php echo $d['id'];?>" onClick="return confirm('Are you sure?')">DELETE</a>
        <a class="btn btn-primary  primary"  href="homedetail.php?id=<?php echo $d['id'];?>">VIEW DETAIL </a>
        <a class="btn btn-secondary btn-success"  href="edit_users.php?id=<?php echo $d['id'];?>">EDIT</a></td>
        
        
    </tr>
    <?php endforeach;?>
    </table><br><br>
    
  </tbody>
</table>
   <?php include('footer.php');?>


   <style>
       .ii{border: 2px inset brown;
max-height: 100px;
max-width: 100px;
width: 100px;
height: 100px;}
   </style>