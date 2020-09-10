<?php
	session_start();
	require_once 'data_conn.php';
	$uname="";
	$password="";
	$err_uname="";
	$err_password="";
	$has_error=false;
	if(isset($_POST["Login"]))
	{
		if(empty($_POST["uname"]))
		{
			$err_uname = "Username Required <br>";
			$has_error=true;
		}else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["password"]))
		{
			$err_password= "Password Required <br>";
			$has_error=true;
		}else{
			$password=$_POST["password"];
		}

		if(!$has_error){
			
			$query = "SELECT * FROM users WHERE UserName='$uname' and Password='$password'";
			
			if(getArray($query)){
				header("Location: dashboard.php");
				$_SESSION["loggedin"] = true;

			}
			else{
				echo "User Name or Password is Wrong";
			}
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
					<td><input type="text" name="uname"value="<?php echo $uname; ?>"> <?php echo $err_uname; ?> </td>
				</tr>
				<tr>
					<td><span>Password:</span></td>
					<td><input type="text" name="password"value="<?php echo $password; ?>"> <?php echo $err_password; ?> </td>
				</tr>
				<tr>
					<td><input type="submit" name="Login" value="Login"></td>
				</tr>
			</table>
		</form>
	</body>
</html>