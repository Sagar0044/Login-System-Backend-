<?php
session_start();
$namee=$_SESSION['username'];
if(!isset($namee)){
    header('location:loginbs.php');
}
include('home.db.php');

$yes= new homelogin(); 
$cat = $yes->getAllCategory();


?>

<?php include('header.php');?>

<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

    <a href="add_category.php"><strong><span class="fa fa-user-plus"></span> Add New</strong></a>
    <hr>
    <div class="col-md-12">

      <table class="table table-striped table-dark">
  <thead>

    
        <label class="bs"><th class="th">ID</th></label>
        
        <label><th class="th"> Title </th></label>
        <label><th class="th"> Description </th></label>
        <label><th class="th"> Status </th></label>
        <label><th class="th"> Options </th></label>


    </tr>
    <?php foreach($cat as $d):?>

        <form method="post" action="">
    <tr class="tr">
        <td class="td"><?php echo $d['id'];?></td>
        
        <td class="td"><?php echo $d['title'];?> </td>

        <td class="td"><?php echo $d['description'];?> </td>

        <td ><?php echo $d['publish'];?></td>
        <td class="td1"><a input type="submit" name="submit1" class="btn btn-danger primary" href="categorydelete.php?id=<?php echo $d['id'];?>" onClick="return confirm('Are you sure?')"><!-- <a class="btn btn-danger primary"   href="categorydelete.php?id=<?php echo $d['id'];?>"> -->DELETE</a>
        <a class="btn btn-primary  primary"  href="detailCategory.php?id=<?php echo $d['id'];?>">VIEW DETAIL </a>
        <a class="btn btn-secondary btn-success"  href="edit_category.php?id=<?php echo $d['id'];?>">EDIT</a></td>
        
        
    </tr>
</form>

    <?php endforeach;?>
    </table><br><br>

  </tbody>
</table>
   <?php include('footer.php');?>


   <?php
   /*if(isset($_POST['submit1']))
{   
  alert('yes');
}*/

?>
<script>
    // alert('yes');
</script>



        