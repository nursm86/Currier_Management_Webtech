<?php
    require 'data_conn.php';
    $name ="";
	$uname="";
    $password="";
    $email = "";
    $phone = "";
    
    $err_name = "";
	$err_uname="";
    $err_password="";
    $err_email = "";
    $err_phone = "";
	$has_error=false;
	if(isset($_POST["Register"]))
	{
		if(empty($_POST["name"]))
		{
			$err_name = "Name Required <br>";
			$has_error=true;
		}else{
            $name=$_POST["name"];
            $arr = str_split($name);
            foreach($arr as $char){
                if($char >='0' and $char<='9'){
                    $has_error = true;
                    $err_name = "Name can not contain Numbers";
                    $name = "";
                    break;
                }
            }
        }

        if(empty($_POST["uname"]))
		{
			$err_uname = "Username Required <br>";
			$has_error=true;
		}else{
            $uname=$_POST["uname"];
            if(strlen($uname)<6){
                $err_uname = "User Name must be at least 6 character long!!!";
                $has_error = true;
                $uname = "";
            }
            $arr = str_split($uname);
            foreach($arr as $char){
                if($char ==" "){
                    $has_error = true;
                    $err_uname = "UserName cannot contain White Space";
                    $uname = "";
                }
            }

            $sql = "SELECT * FROM users where UserName = '$uname'";
        }
        
		if(empty($_POST["password"]))
		{
			$err_password= "Password Required <br>";
			$has_error=true;
		}else{
            $password=$_POST["password"];
            if(strlen($password)<8){
                $err_password = "Password must be atleast 8 characters long";
                $has_error = true;
            }
        }

        if(empty($_POST["email"]))
		{
			$err_email = "Email Required <br>";
			$has_error=true;
		}else{
            
		}
		if(empty($_POST["phone"]))
		{
			$err_phone= "Phone No is Required <br>";
			$has_error=true;
		}else{
            $phone=$_POST["phone"];
            if(strlen($phone)!=11){
                $has_error = true;
                $err_phone = "Phone Number Should be 11 in length.";
            }
		}

		if(!$has_error){
            $sql = "INSERT INTO users(Name, UserName, Password, Email, Phone) VALUES ('$name','$uname','$password','$email','$phone')";
            echo "Registration Successfull click here to <a href = 'index.php'>Login</a>";
		}
	}
?>
<html>
	<head>
		<title>RegistrationFrom</title>
	</head>
	<body>
		<h2>Registration Form</h2>
		<form action="" method="post">
			<table>
				<tr>
					<td><span>Name:</span></td>
					<td><input type="text" name="name"value="<?php echo $name; ?>"> <?php echo $err_name; ?> </td>
				</tr>
				<tr>
					<td><span>UserName:</span></td>
					<td><input type="text" name="uname"value="<?php echo $uname; ?>"> <?php echo $err_uname; ?> </td>
				</tr>
				<tr>
					<td><span>Password:</span></td>
					<td><input type="password" name="password"value="<?php echo $password; ?>"> <?php echo $err_password; ?> </td>
				</tr>
                <tr>
					<td><span>Email:</span></td>
					<td><input type="text" name="email"value="<?php echo $email; ?>"> <?php echo $err_email; ?> </td>
				</tr>
                <tr>
					<td><span>Phone:</span></td>
					<td><input type="text" name="phone"value="<?php echo $phone; ?>"> <?php echo $err_phone; ?> </td>
				</tr>
				<tr>
					<td><input type="submit" name="Register" value="Register"></td>
				</tr>
			</table>
		</form>
	</body>
</html>