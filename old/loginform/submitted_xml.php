<?php
	$username = $_POST["uname"];
	$pass = $_POST["pass"];
    $flag = false;
    $xml = simplexml_load_file("Users.xml");
    
    foreach($xml->user as $user){
        if(($user->username == $username) && ($user->pass == $pass)){
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
?>