<?php
session_start();
$namee=$_SESSION['username'];
if(!isset($namee)){
    header('location:loginbs.php');
}

// include('add_post.php');
include('home.db.php');

$yes= new homelogin(); 
// $post = $yes->getAllPost();
$post = $yes->getAllPostJoined();
// $joined = $yes->getAllPostJoined();
// print_r($joined); exit;

?>

<?php include('header.php');?>

<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
    
    <a href="add_post.php"><strong><span class="fa fa-user-plus"></span> Add New</strong></a>
    <hr>
    <div class="col-md-12">

      <table class="table table-striped table-dark">
  <thead>
    
        <label><th class="th"> ID </th></label>
        <label><th class="th"> TITLE </th></label>
        <!-- <label><th class="th"> DESCRIPTION </th></label> -->
        <label><th class="th"> Image </th></label>
        <label><th class="th"> STATUS </th></label>
        <label><th class="th"> Category </th></label>
        
        <label><th class="th"> OPTIONS </th></label>



    </tr>
    <?php foreach($post as $d):?>
        
    <tr class="tr">
        <td class="td"><?php echo $d['id'];?></td>
        
        <td class="td"><?php echo $d['title'];?></td>
        <!-- <td class="td"><?php echo substr($d['description'],0,50);?>...</td> -->
        <td><img class="imm" style="border: 2px inset brown"  src="uploads/<?php echo $d['image'];?>"></td>
        <td class="td"><?php echo $d['publish'];?></td>
        <td class="td"><?php echo $d['catTitle'];?></td>
        
        

        
        
        <td class="td1"><a class="btn btn-danger primary"   href="postdelete.php?id=<?php echo $d['id'];?>" onClick="return confirm('Are you sure?')">DELETE</a>
        <a class="btn btn-primary  primary"  href="detailPost.php?id=<?php echo $d['id'];?>">VIEW DETAIL </a>
        <a class="btn btn-secondary btn-success"  href="edit_post.php?id=<?php echo $d['id'];?>">EDIT</a></td>
        
        
    </tr>
    <?php endforeach;?>
    </table><br><br>

  </tbody>
</table>
   <?php include('footer.php');?>

   <style>
       .imm{

max-height: 120px;
max-width: 120px;
width: 120px;
height: 120px;}
   <!-- </style> 