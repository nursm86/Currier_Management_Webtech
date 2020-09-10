<?php
	$username = $_POST["uname"];
	$pass = $_POST["pass"];
	$file = fopen("Users.txt","r");
	$flag = false;
	while(!feof($file)){
		$line = fgets($file);
		$user = explode(" ",$line);
		if(trim($user[0]) == trim($username) && trim($user[1]) == trim($pass)){
			$flag = true;
			break;
		}

	}
	
	if($flag){
		echo "Login Successful";
	}
	else{
		echo "username of password is not correct!!!";
	}
	fclose($file);
?>