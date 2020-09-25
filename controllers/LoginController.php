<?php
	session_start();
	require_once 'models/db_connect.php';
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
				if($var[0]["type"] == "0"){
					header("Location: admin_home.php");
					setcookie("Loggedinuser",$uname,time()+60);
					setcookie("type",$var["type"],time()+60);
					$_SESSION["id"] = $var[0]['id'];
				}
				else if($var[0]["type"] == "2"){
					if($var[0]['isValid']){
						header("Location: customer_home.php");
						setcookie("Loggedinuser",$uname,time()+60);
						setcookie("type",$var["type"],time()+60);
						$_SESSION["id"] = $var[0]['id'];
					}
					else{
						$loginError = "You are not verfied yet!!!Please Wait";
					}
				}
				else if($var[0]["type"] == "1"){
					header("Location: employee_home.php");
					setcookie("Loggedinuser",$uname,time()+60);
					setcookie("type",$var["type"],time()+60);
					$_SESSION["id"] = $var[0]['id'];
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