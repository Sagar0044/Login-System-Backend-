<?php

session_start();

$namee=$_SESSION['username'];
if(!isset($namee)){
    header('location:loginbs.php');
}


include('home.db.php');
$post = new homelogin();
$cat = $post->getAllCategory();


$log = new homelogin();

if (isset($_POST['submit1']))
{

    // $log->getcatid();  
    $log->addPost();
    
    // echo $_POST['addcate']; 

}

?>

<?php   include('header.php');?>

<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
    <!-- Right -->

    <a href="add_post.php"><strong><span class="fa fa-user-plus"></span> Add New</strong></a>
    <hr>
    <form method="post" action="" enctype="multipart/form-data">
    <div class="col-md-6">
      <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="title">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>  
       <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea  name="description" style="width: 100%; height: 200px;" placeholder="Please give a short description about yourself."></textarea>
      </div>

        <div class="form-group">
         <label for="exampleInputPassword1">Add to Category</label> 
         <select name="addcate">
          <?php foreach($cat as $d):?> 
        <option value="<?php echo $d['id'];?>"> <?php echo $d['title']?> </option>
        <?php endforeach;?>
        </select>  



         <!-- <?php $a= $d['id'];
        echo $a; ?>  -->

<!--         <?php echo $d['id'];?>
 -->
        <!-- <?php global $name;
              $name = $a;
              // echo $a ?> -->

<!-- <?php echo $d['id'];?> -->



   </div>


   <!-- <div class="form-group">
         <label for="exampleInputPassword1">Add to Category</label> 
         <select name="catenum">
          <?php foreach($cat as $d):?> 
        <option> <?php echo $d['id']?> </option>
        <?php endforeach;?>
        </select>  
      </div> -->
<!-- <?php echo $d['id']?>
 -->
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="publish" value="1">
        <label class="form-check-label" for="exampleCheck1">Publish</label>
      </div>

       <div class="form-group form-check">
        
        <label class="form-check-label" for="exampleCheck1">Image</label>
        <input type="file" name="fileToUpload" class="form-check-input" id="exampleCheck1">
      </div> 

      <input type="submit" class="btn btn-primary" name="submit1">
  </div>
     
      
    </form>
    </div>
</body>
</head>
</html>

      
