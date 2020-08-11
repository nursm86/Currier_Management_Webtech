<?php
    $name="";
    $uname ="";
    $password="";
    $confirmPassword = "";
    $contact ="";
    $email ="";
    $address = "";
    $securityQue = "";
    
    
	/*if(isset($_POST["Login"]))
	{
        $uname=$_POST["uname"];
        $password=$_POST["password"];
		
		$servername = "localhost";
		$username = "root";
		$pass = "";
		$dbname = "web_tech";
			
		$conn = mysqli_connect($servername,$username,$pass,$dbname);
			
		$query = "SELECT * FROM users WHERE userName='$uname' and pass='$password'";
			
		$result = mysqli_query($conn,$query);
			
		if(mysqli_num_rows($result)){
			$var = mysqli_fetch_assoc($result);
				
			if($var["type"] == "admin"){
				header("Location: admin_home.php");
				setcookie("Loggedinuser",$uname,time()+60);
				setcookie("type",$var["type"],time()+60);
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
		
	}*/
?>
<html>
	<head>
		<title>User Registration</title>
	</head>
	<body>

		<table>
            <tr>
                <td><img src = "logo.png" alt="Logo" width = 40px length = 40px></td>
            	<td><a href = "index.php">Home</a></td>
                <td>Services</td>
                <td>Contact</td>
                <td><a href = "login.php">Login</a></td>
                <td><a href = "Registration.php">Singup</a></td>
            </tr>
        </table>

		<h2>User Registration</h2>
		<form action="" method="post">
			<table>
				<tr>
					<td><span>Name:</span></td>
					<td><input type="text" name="name"value="<?php echo $name; ?>" required></td>
				</tr>
				<tr>
					<td><span>UserName:</span></td>
					<td><input type="text" name="uname"value="<?php echo $uname; ?>" required></td>
				</tr>
                <tr>
					<td><span>Password:</span></td>
					<td><input type="password" name="password"value="<?php echo $password; ?>" required></td>
				</tr>
				<tr>
					<td><span>ConfirmPassword:</span></td>
					<td><input type="text" name="confirmPassword"value="<?php echo $confirmPassword; ?>" required></td>
				</tr>
                <tr>
					<td><span>Contact:</span></td>
					<td><input type="text" name="contact"value="<?php echo $contact; ?>" required></td>
				</tr>
				<tr>
					<td><span>Email:</span></td>
					<td><input type="email" name="email"value="<?php echo $email; ?>" required></td>
				</tr>
                <tr>
					<td><span>Address:</span></td>
					<td><input type="textarea" name="address"value="<?php echo $address; ?>" required></td>
				</tr>
				<tr>
					<td><span>Security Que:</span></td>
					<td><input type="text" name="securityQue"value="<?php echo $securityQue; ?>" placeholder = "Who is your best friend?" required></td>
				</tr>
				<tr>
					<td colspan = "2" style="text-align: center;"><input type="submit" name="Register" value="Register"></td>
				</tr>
			</table>
		</form>
	</body>
</html>