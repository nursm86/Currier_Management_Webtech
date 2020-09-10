<?php
	$servername = "localhost";
	$username = "root";
	$pass = "";
	$dbname = "web_tech";
			
	$conn = mysqli_connect($servername,$username,$pass,$dbname);
			
	$query = "SELECT * FROM users";
			
	$result = mysqli_query($conn,$query);
	
	while($var = mysqli_fetch_assoc($result)){
		echo $var["username"] ." " .$var["pass"]." ". $var["type"]."<br>";
	}
?>