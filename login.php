<?php
	$uname="";
	$password="";
	$err_uname="";
	$err_password="";
	$has_error=false;
	if(isset($_POST["Login"]))
	{
        $uname=$_POST["uname"];
        $password=$_POST["password"];
		
		$servername = "localhost";
		$username = "root";
		$pass = "";
		$dbname = "web_tech";
			
		$conn = mysqli_connect($servername,$username,$pass,$dbname);
			
		$query = "SELECT * FROM users WHERE username='$uname' and pass='$password'";
			
		$result = mysqli_query($conn,$query);
			
		if(mysqli_num_rows($result)){
			$var = mysqli_fetch_assoc($result);
				
			if($var["type"] == "admin"){
				header("Location: admin_home.php");
			}
			else if($var["type"] == "user"){
				header("Location: user_home.php");
				setcookie("Loggedinuser",$uname,time()+60);
				setcookie("type",$var["type"],time()+60);
            }
            else if($var["type"] == "employee"){
				header("Location: emoployee_home.php");
				setcookie("Loggedinuser",$uname,time()+60);
				setcookie("type",$var["type"],time()+60);
			}
			else{
				echo " Unknown Users Cannot Login";
			}
		}
		else{
			echo "User Name or Password is Wrong";
		}
		
	}
?>
<html>
	<head>
		<title>LoginFrom</title>
	</head>
	<body>
		<h2>Login Form</h2>
		<form action="" method="post">
			<table>
				<tr>
					<td><span>Username:</span></td>
					<td><input type="text" name="uname"value="<?php echo $uname; ?>" required> <?php echo $err_uname; ?> </td>
				</tr>
				<tr>
					<td><span>Password:</span></td>
					<td><input type="text" name="password"value="<?php echo $password; ?>" required> <?php echo $err_password; ?> </td>
				</tr>
				<tr>
					<td><label style= "color:red"><a href = "forgotpass.php">Forgot password?</a></label></td>
					<td><input type="submit" name="Login" value="Login"></td>
				</tr>
			</table>
		</form>
	</body>
</html>