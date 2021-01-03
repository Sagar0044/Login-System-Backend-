<?php
  //      $username=$_POST['username'];
		// $email = $_POST['email'];
		// $password = $_POST['password'];
		// $address= $_POST['address'];
		// $phonenumber=$_POST['phonenumber'];
		// $country = $_POST['country'];
class connections

{
	private $host="localhost";
	private $database="connection";
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
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$address= $_POST['address'];
		$phonenumber=$_POST['phonenumber'];
		$country = $_POST['country'];
		//$id = $_GET['id'];

		  $sql = "INSERT INTO connect (username,email,password,address,phonenumber,country) VALUES('$username','$email','$password','$address','$phonenumber','$country')"
		  ;

		 //$sql = "DELETE  FROM connect WHERE id=2";

		 // $sql = "UPDATE connect 
		 // SET username='sagars'
		 // WHERE id=1";

		if($this->mysqli->query($sql)){
			echo "<br>Your data have been submitted";
			header('location:table.php');
		}else{
			echo $this->mysqli->error;
		}
	}

	function showAll(){
		$sql = "SELECT * FROM connect";	
		$data = array();
		$res = $this->mysqli->query($sql);
		while($row = $res->fetch_array(MYSQLI_ASSOC)){
			$data[] = $row;
		}
		return $data;
	}

	function getSingle($id){
		$sql = "SELECT * FROM connect WHERE id='$id'";
		$res = $this->mysqli->query($sql);
		return $res->fetch_array(MYSQLI_ASSOC);
	}

	function deletAll(){
		$sql = "DELETE FROM connect";
		$this->mysqli->query($sql);
	}

	function editDB($id){

		 $username=$_POST['username'];
	     $email = $_POST['email'];
		 $password = $_POST['password'];
		 $address= $_POST['address'];
		 $phonenumber=$_POST['phonenumber'];
		 $country = $_POST['country'];
		$sql = "UPDATE connect SET username='$username', email='$email',password='$password', address='$address', phonenumber='$phonenumber', country='$country' WHERE id='$id'";
// echo $sql; exit;
		$this->mysqli->query($sql);
		header('location:table.php');

	}

	function delete($id){
	

		 $sql = "DELETE FROM connect WHERE id='$id'";
		 $this->mysqli->query($sql);
		header('location:table.php');
	}



}
?>
