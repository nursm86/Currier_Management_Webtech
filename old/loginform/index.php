<html>
	<head>
		<title>Login Form</title>
	</head>
	<body>
		<h1>Login Form</h1>
		<hr/>
		<form action="submitted_text.php" method="post">
			<table >
				<tr>
					<td>Username:</td>
					<td><input type="text"  name="uname" ></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td colspan="2" >
						<input type="submit" name="Login" value="Login">
					</td>
				</tr>
			</table>	
		</form>
	</body>
</html>