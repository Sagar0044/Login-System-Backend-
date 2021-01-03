<?php

//session_start();

class homelogin
{
	private $host="localhost";
	private $database="homelogin";
	private $username="root";
	private $password="";
	private $mysqli;	

	function __construct(){
	$this->mysqli = new MySQLi($this->host,$this->username,$this->password,$this->database);
	
		if($this->mysqli->error){
					echo $this->mysqli->error;
		}else{
			// echo "here"; 
			}
	}	




	function input() {
		$username=  $_POST['username'];
		$address=  $_POST['address'];	
		$email=  $_POST['email'];
   		$password=  $_POST['password'];
		$birthday=  $_POST['birthday'];
		$gender=  $_POST['gender'];
			 
        $image = $this->upload();


    $sql = "INSERT INTO homelog (username,address,email,password,birthday,gender,image) VALUES('$username','$address','$email','$password','$birthday', '$gender','$image')";
	if($this->mysqli->query($sql)){
			 //echo "	Your data have been submitted";
			 header('location:loginbs.php');
			
		}else{
			echo $this->mysqli->error;
			header('location:signupbs.php');
		}
	}



function addcate() {
		$title=  $_POST['title'];
		$description=  $_POST['description'];
		$publish= $_POST['publish'];
		$image = $this->upload();
		 
	   	 $sql = "INSERT INTO category (title,description,image,publish,) VALUES('$title','$description','$image','$publish')";
		if($this->mysqli->query($sql)){
				 echo "Your data have been submitted";
				header('location:post.php');
				
			}

     }


    function addCategory() {
		$title=  $_POST['title'];
		$description=  $_POST['description'];	
		$publish=  $_POST['publish'];	
		 
	   	 $sql = "INSERT INTO category (title,description,publish) VALUES('$title','$description','$publish')";
		if($this->mysqli->query($sql)){
				 
				 header('location:category.php');
				
			}

			

			function editCategory($id){
		 $title=$_POST['title'];
	     $description= $_POST['description'];

		 $sql = "UPDATE category SET title='$title', description='$description' WHERE id='$id'";
		$this->mysqli->query($sql);
		header('location:category.php');

	}

     }

     function getAllCategory(){
		$sql = "SELECT * FROM category";		
		$data = array();
		$res = $this->mysqli->query($sql);
		while($row = $res->fetch_array(MYSQLI_ASSOC)){
			$data[] = $row;
		}
		return $data;
	}



	function deleteCategory($id){

		 $sql = "DELETE FROM category WHERE id='$id'";
		 $this->mysqli->query($sql);
		 " <script>
window.alert(5 + 6);
</script>";
		header('location:category.php');
	}


	function detailCategory($id){
		$sql = "SELECT * FROM category WHERE id='$id'";
		$res = $this->mysqli->query($sql);
		return $res->fetch_array(MYSQLI_ASSOC);
}


function catedit($id){
		 $title=$_POST['title'];
	     $description= $_POST['description'];
		 

		 $sql = "UPDATE category SET title='$title', description='$description' WHERE id='$id'";
// echo $sql; exit;
		$this->mysqli->query($sql);
		echo'<h1 class="a"> Congratulations!! your data has been updated..</h1>';

	}	




	function getAllPost(){
		$sql = "SELECT * FROM post";		
		$data = array();
		$res = $this->mysqli->query($sql);
		while($row = $res->fetch_array(MYSQLI_ASSOC)){
			$data[] = $row;
		}
		return $data;
	}

function getAllPostJoined(){
		$sql = "SELECT post.*, category.title as catTitle FROM post INNER JOIN category on category.id=post.category";		
		$data = array();
		$res = $this->mysqli->query($sql);
		while($row = $res->fetch_array(MYSQLI_ASSOC)){
			$data[] = $row;
		}
		return $data;
	}


	function deletePost($id){

		 $sql = "DELETE FROM post WHERE id='$id'";
		 $this->mysqli->query($sql);
		header('location:post.php');
	}



	function postEdit($id){
		$sql = "SELECT * FROM post  WHERE id='$id'";
		$res = $this->mysqli->query($sql);
		return $res->fetch_array(MYSQLI_ASSOC);


}


function editCategory($id){
		 $title=$_POST['title'];
	     $description= $_POST['description'];

		 $sql = "UPDATE category SET title='$title', description='$description' WHERE id='$id'";
		$this->mysqli->query($sql);
		header('location:category.php');

	}

	function detailPost($id){
			$sql = "SELECT * FROM post WHERE id='$id'";
		$res = $this->mysqli->query($sql);
		return $res->fetch_array(MYSQLI_ASSOC);
}


function poedit($id){
		 $title=$_POST['title'];
	     $description= $_POST['description'];
	     $addcate = $_POST['addcate'];
	     if(empty($_FILES['fileToUpload']['name'])){
		 	$single = $this->detailPost($id);
		 	$image = $single['image'];
		 }else{
		 $image = $this->upload();
		}
		 

		 $sql = "UPDATE post SET title='$title', description='$description',image='$image', category='$addcate'  WHERE id='$id'";
// echo $sql; exit;
		$this->mysqli->query($sql);
		 echo'<p1 class="a"> Congratulations!! your data has been updated..</p1>';

	}	


	// function getcatid()
	// {$catid = $_POST['addcate'];
	// $sql = "INSERT INTO post (category) VALUES ('$catid')";

	// }



     function addPost() {
		$title=  $_POST['title'];
		$description=  $_POST['description'];
		$publish= $_POST['publish'];
		$catid = $_POST['addcate'];
		$catnum = $_POST['catenum'];
		$image = $this->upload();
		 
	   	 $sql = "INSERT INTO post (title,description,image,publish,category) VALUES('$title','$description','$image','$publish','$catid')";
		if($this->mysqli->query($sql)){
				header('location:post.php');
				echo "Your data have been submitted";
				
			}
       

     }


	function login(){
		session_start();
		$username =  $_POST['username'];
		$password =  $_POST['password'];
		$sql = "SELECT * FROM homelog WHERE username='$username' AND password='$password'";
		$result = $this->mysqli->query($sql);
		$singleUser = $result->fetch_array(MYSQLI_ASSOC);
// print_r($result);
// exit;
		if($result->num_rows==1){
			 $_SESSION['username'] = $singleUser['username'];
			header('location:table2.php');
		}else{
			echo '<h1 class="error">Invalid Email or Password!!</h1>';
			//echo 	"Invalid Username or password";
		}	
	}


	function All(){
		$sql = "SELECT * FROM homelog";		
			$data = array();
		$res = $this->mysqli->query($sql);
		while($row = $res->fetch_array(MYSQLI_ASSOC)){
			$data[] = $row;
		}
		return $data;
	}




function upload(){
 
	$target_dir = "uploads/"; 
 
    $target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    

    // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    // if($check !== false) {
    //     $uploadOk = 1;
    // } else {
    //     echo "<br>File is not an image.";
    //     $uploadOk = 0;
    // }


if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "<br>Sorry!! your file is too large.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "<br>Therefore, your image was not uploaded.";

} 
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        return $_FILES["fileToUpload"]["name"];
    } else {
        echo "<br>Sorry, there was an error uploading your file.";
    }
}
    
}


function delete($id){

		 $sql = "DELETE FROM homelog WHERE id='$id'";
		 $this->mysqli->query($sql);
		 header('location:signup_users.php');
	}

	function detail($id){
		$sql = "SELECT * FROM homelog WHERE id='$id'";
		$res = $this->mysqli->query($sql);
		return $res->fetch_array(MYSQLI_ASSOC);
}



function categoryEdit($id){
		$sql = "SELECT * FROM category  WHERE id='$id'";
		$res = $this->mysqli->query($sql);
		return $res->fetch_array(MYSQLI_ASSOC);
}


function homeedit($id){
		 $username=$_POST['username'];
	     $address= $_POST['address'];
		 $email = $_POST['email'];
		 $password = $_POST['password'];
		 $gender = $_POST['gender'];
		 $birthday = $_POST['birthday'];


		 if(empty($_FILES['fileToUpload']['name'])){
		 	$single = $this->detail($id);
		 	$image = $single['image'];
		 }else{
		 $image = $this->upload();
		}
		 // echo $image; exit;

		 $sql = "UPDATE homelog SET username='$username', address='$address',gender='$gender', email='$email', image='$image', password='$password', birthday='$birthday' WHERE id='$id'";
// echo $sql; exit;
		$this->mysqli->query($sql);
		header('location:table2.php');

	}


}

?>

<style>
	.a{margin-top: 10px;
		margin-left: 220px;
		text-align: center;
		color:#CD5C5C;
		text-align: center;
		font-size: 22px;

	}
</style>

