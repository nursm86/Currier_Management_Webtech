<?php
	session_start();
	require_once 'models/db_connect.php';

	if(isset($_COOKIE['Loggedinuser'])){
		if($_COOKIE['type'] == "0"){
			$_SESSION["id"] = $_COOKIE['Loggedinuser'];
			header("Location: admin_home.php");	
		}
		else if($_COOKIE['type'] == "2"){
			$_SESSION["id"] = $_COOKIE['Loggedinuser'];
			header("Location: customer_home.php");
		}
		else if($_COOKIE['type'] == "1"){
			$_SESSION["id"] = $_COOKIE['Loggedinuser'];
			header("Location: employee_home.php");
		}
	}

	$uname = "";
	$err_uname="";
	$password = "";
	$err_password = "";
	$loginError="";
	$has_error=false;
	if(isset($_POST["login"])){
		if(empty($_POST["username"]))
		{
			$err_uname = "Username Required <br>";
			$has_error=true;
		}else{
			$uname=$_POST["username"];
		}
		if(empty($_POST["password"]))
		{
			$err_password= "Password Required <br>";
			$has_error=true;
		}else{
			$password=$_POST["password"];
		}
		if(!$has_error){
			$var = authenticate($uname,$password);
			if($var){
				if(isset($_POST['rememberme'])){
					setcookie("Loggedinuser",$var[0]['id'],time()+31536000000);
					setcookie("type",$var[0]["type"],time()+31536000000);
				}
				if($var[0]["type"] == "0"){
					$_SESSION["id"] = $var[0]['id'];
					header("Location: admin_home.php");
					
				}
				else if($var[0]["type"] == "2"){
					if($var[0]['isValid']){
						$_SESSION["id"] = $var[0]['id'];
						header("Location: customer_home.php");
						
					}
					else{
						$loginError = "You are not verfied yet!!!Please Wait";
					}
				}
				else if($var[0]["type"] == "1"){
					if($var[0]['isValid']){
						$_SESSION["id"] = $var[0]['id'];
						header("Location: employee_home.php");
						
					}
					else if($var[0]['Designation'] == 0){
						$_SESSION["id"] = $var[0]['id'];
						header("Location: updateDocument.php");
					}
				}
			}else{
				$loginError = "User name or password is Invalid";
			}
		}
	}
	function authenticate($username,$password){
		$query = "SELECT * from users WHERE userName='$username' and pass='$password'";
		$user=getArray($query);
		return $user;
	}

?>