<?php
//session_start();


class employee

{
	private $host="localhost";
	private $database="employee";
	private $username="root";
	private $password="";
	private $mysqli;	

	function __construct(){
	$this->mysqli = new MySQLi($this->host,$this->username,$this->password,$this->database);
		if($this->mysqli->error){
					echo $this->mysqli->error;
		}else{
				// echo "Welcome to Local DataBase";
		}
	}

	function insert(){
		$name = $_POST['name'];
		$address = $_POST['address'];
		$education= $_POST['education'];
		$gender = $_POST['gender'];
		$image = $this->upload();
		 $sql = "INSERT INTO empdb (name,gender,address,education,image,password) VALUES('$name','$gender','$address','$education','$image', '$password'	)";


if($this->mysqli->query($sql)){
			echo "<br>Your data have been submitted";
			header('location:user.php');
		}else{
			echo $this->mysqli->error;
		}
	}

	function All(){
		$sql = "SELECT * FROM empdb";		
		$data = array();
		$res = $this->mysqli->query($sql);
		while($row = $res->fetch_array(MYSQLI_ASSOC)){
			$data[] = $row;
		}
		return $data;
	}

	function getSingle($id){
		$sql = "SELECT * FROM empdb WHERE id='$id'";
		$res = $this->mysqli->query($sql);
		return $res->fetch_array(MYSQLI_ASSOC);
}

	function upload(){
 
	 	//	$sql = "SELECT * FROM empdb WHERE id='$id'";
	 	// 	$res = $this->mysqli->query($sql);
			// return $res->fetch_array(MYSQLI_ASSOC);

 
		$target_dir = "uploads/"; 
 
    $target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<br>File is not an image.";
        $uploadOk = 0;
    }


if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "<br>Sorry!! your file is too large.";
    $uploadOk = 0;
}



if ($uploadOk == 0) {
    echo "<br>Therefore, your file was not uploaded.";

} 


else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        return $_FILES["fileToUpload"]["name"];
    } else {
        echo "<br>Sorry, there was an error uploading your file.";
    }
}
    
}

// 	function upload(){
// 		$target_dir = "uploads/";
// 		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// 		$uploadOk = 1;
// 		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// 		// Check if image file is a actual image or fake image
// 		if(isset($_POST["submit"])) {
// 		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
// 		    if($check !== false) {
// 		        echo "File is an image - " . $check["mime"] . ".";
// 		        $uploadOk = 1;
// 		        return $_FILES['fileToUpload']['name'];
// 		    } 

// 		    else {
// 		        echo "File is not an image.";
// 		        $uploadOk = 0;
// 		    }
// }
	//}

    function delete($id){

		 $sql = "DELETE FROM empdb WHERE id='$id'";
		 $this->mysqli->query($sql);
		header('location:emptable.php');
	}

	
	function editDB($id){
		 $name=$_POST['name'];
	     $address= $_POST['address'];
		 $education = $_POST['education'];
		 $gender = $_POST['gender'];
		 if(empty($_FILES['fileToUpload']['name'])){
		 	$single = $this->getSingle($id);
		 	$image = $single['image'];
		 }else{
		 $image = $this->upload();
		}
		 // echo $image; exit;

		 $sql = "UPDATE empdb SET name='$name', address='$address',gender='$gender', education='$education', image='$image' WHERE id='$id'";
// echo $sql; exit;
		$this->mysqli->query($sql);
		header('location:emptable.php');

	}

	function login(){
		session_start();
		$name =  $_POST['username'];
		$password =  $_POST['password'];
		//echo md5($password); exit;
		$sql = "SELECT * FROM empdb WHERE name='$name' AND password='$password'";
		$result = $this->mysqli->query($sql);
		$singleUser = $result->fetch_array(MYSQLI_ASSOC);

		if($result->num_rows==1){
			$_SESSION['username'] = $singleUser['name'];
			header('location:emptable.php');
		}else{
			echo "Invalid Username or password";
		}
	}
		// function upadate_img($id);
		// $sql =""

	

	}


