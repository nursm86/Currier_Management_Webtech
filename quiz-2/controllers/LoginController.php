<?php
	require_once 'models/db_connect.php';
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$hasError=false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$err_name = "Name required";
		}
		else
		{
			$name = $_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_username = "Username required";
		}
		else
		{
			$username = $_POST["username"];
		}
		if(!$hasError){
			insertUser($name,$username,$_POST["email"],$_POST["password"]);
		}
	}
	if(isset($_POST["login"])){
		//validation
		if(!$hasError){
			//authenticate
			if(authenticate($_POST["username"],$_POST["password"])){
				header("Location: dashboard.php");
			}else{
				echo "Username password invalid";
			}
		}
	}
	function insertUser($name,$username,$email,$password){
		$password = md5($password);
		$query = "INSERT INTO users VALUES('$name','$username','$email','$password')";
		execute($query);		
	}
	function authenticate($username,$password){
		$password = md5($password);
		$query = "SELECT username from users WHERE username='$username' and password='$password'";
		$user=getArray($query);
		return $user;
	}

?>