<?php
    require 'models/db_connect.php';
    $name ="";
	$uname="";
	$pass="";
	$cpass="";
    $email = "";
	$contact= "";
	$address="";
	$sq="";
    
    $err_name = "";
	$err_uname="";
	$err_pass="";
	$err_cpass="";
    $err_email = "";
	$err_contact = "";
	$err_sq ="";
	$err_address="";
	$has_error=false;
	$success = "";
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

			$sql = "SELECT * FROM users where userName = '$uname'";
			if(getArray($sql)){
                $has_error = true;
                $err_uname = "UserName is already taken!!!Please choose different one";
                $uname = "";
            }
        }
        
		if(empty($_POST["password"]))
		{
			$err_pass= "Password Required <br>";
			$has_error=true;
		}else{
			$pass=$_POST["password"];
			$cpass=$_POST["confirmPassword"];
			if($pass !=$cpass){
				$err_pass = "Password doesn't Match";
				$has_error = true;
			}
            if(strlen($pass)<8){
                $err_pass = "Password must be atleast 8 characters long";
                $has_error = true;
            }
		}
		if(empty($_POST["confirmPassword"]))
		{
			$err_cpass= "Password Required <br>";
			$has_error=true;
		}else{
			$pass=$_POST["password"];
			$cpass=$_POST["confirmPassword"];
			if($pass !=$cpass){
				$err_pass = "Password doesn't Match";
				$has_error = true;
			}
            if(strlen($cpass)<8){
                $err_cpass = "Password must be atleast 8 characters long";
                $has_error = true;
            }
        }

        if(empty($_POST["email"]))
		{
			$err_email = "Email Required <br>";
			$has_error=true;
		}else{
            $email=$_POST["email"];
            $Cemail = str_split($email);
            $at = 0;
            $dot = 0;
            $i = 0;
            $atC = 0;
            foreach($Cemail as $char){
                if($char == "@"){
                    $at = $i;
                    $atC++;
                }

                if($char == "."){
                    $dot = $i;
                }

                if($atC > 1){
                    $at = 0;
                    $dot = 0;
                    break;
                }
                $i++;
            }
            if($at > ($dot-2) || $dot== 0){
                $has_error = true;
                $err_email = "This is not a valid Email Address";
			}
			$sql = "SELECT * FROM users where emailAddress = '$email'";
			if(getArray($sql)){
                $has_error = true;
                $err_email = "Email is already used!!! try different email";
                $email = "";
            }	
		}

		if(empty($_POST["contact"]))
		{
			$err_contact= "contact No is Required <br>";
			$has_error=true;
		}else{
            $contact=$_POST["contact"];
            if(strlen($contact)!=11){
                $has_error = true;
                $err_contact = "contact Number Should be 11 in length.";
			}
		}

		if(empty($_POST["address"]))
		{
			$err_address= "Address Required <br>";
			$has_error=true;
		}else{
            $address=$_POST["address"];
		}

		if(empty($_POST["securityQue"]))
		{
			$err_sq= "Sequrity Que is Required <br>";
			$has_error=true;
		}else{
            $sq=$_POST["securityQue"];
		}

		if(!$has_error){
			$target_dir ="storage/profile_pic/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
			$date = date('Y/m/d H:i:s');
			$sql = "INSERT INTO users VALUES (NULL,'$uname','$email','$pass','$date',2,FALSE,'$target_file')";
			execute($sql);

			$sql ="SELECT id from users where userName = '$uname'";
			$result = getArray($sql);
			$id = $result[0]['id'];

			$sql ="INSERT INTO customers VALUES($id,'$name','$contact','$address','$sq','$date')";
			execute($sql);
            $success= "Registration Successfull click here to <a href = 'login.php'>Login</a>";
		}
	}

	if(isset($_POST["addCustomer"]))
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

			$sql = "SELECT * FROM users where userName = '$uname'";
			if(getArray($sql)){
                $has_error = true;
                $err_uname = "UserName is already taken!!!Please choose different one";
                $uname = "";
            }
        }
        
		if(empty($_POST["password"]))
		{
			$err_pass= "Password Required <br>";
			$has_error=true;
		}else{
			$pass=$_POST["password"];
			$cpass=$_POST["confirmPassword"];
			if($pass !=$cpass){
				$err_pass = "Password doesn't Match";
				$has_error = true;
			}
            if(strlen($pass)<8){
                $err_pass = "Password must be atleast 8 characters long";
                $has_error = true;
            }
		}
		if(empty($_POST["confirmPassword"]))
		{
			$err_cpass= "Password Required <br>";
			$has_error=true;
		}else{
			$pass=$_POST["password"];
			$cpass=$_POST["confirmPassword"];
			if($pass !=$cpass){
				$err_pass = "Password doesn't Match";
				$has_error = true;
			}
            if(strlen($cpass)<8){
                $err_cpass = "Password must be atleast 8 characters long";
                $has_error = true;
            }
        }

        if(empty($_POST["email"]))
		{
			$err_email = "Email Required <br>";
			$has_error=true;
		}else{
            $email=$_POST["email"];
            $Cemail = str_split($email);
            $at = 0;
            $dot = 0;
            $i = 0;
            $atC = 0;
            foreach($Cemail as $char){
                if($char == "@"){
                    $at = $i;
                    $atC++;
                }

                if($char == "."){
                    $dot = $i;
                }

                if($atC > 1){
                    $at = 0;
                    $dot = 0;
                    break;
                }
                $i++;
            }
            if($at > ($dot-2) || $dot== 0){
                $has_error = true;
                $err_email = "This is not a valid Email Address";
			}
			$sql = "SELECT * FROM users where emailAddress = '$email'";
			if(getArray($sql)){
                $has_error = true;
                $err_email = "Email is already used!!! try different email";
                $email = "";
            }	
		}

		if(empty($_POST["contact"]))
		{
			$err_contact= "contact No is Required <br>";
			$has_error=true;
		}else{
            $contact=$_POST["contact"];
            if(strlen($contact)!=11){
                $has_error = true;
                $err_contact = "contact Number Should be 11 in length.";
			}
			
			/*$sql = "SELECT * FROM users where emailAddress = '$email'";
			if(getArray($sql)){
                $has_error = true;
                $err_email = "Email is already used!!! try different email";
                $email = "";
            }*/
		}

		if(empty($_POST["address"]))
		{
			$err_address= "Address Required <br>";
			$has_error=true;
		}else{
            $address=$_POST["address"];
		}

		if(empty($_POST["securityQue"]))
		{
			$err_sq= "Sequrity Que is Required <br>";
			$has_error=true;
		}else{
            $sq=$_POST["securityQue"];
		}

		if(!$has_error){
			$date = date('Y/m/d H:i:s');
			$sql = "INSERT INTO users VALUES (NULL,'$uname','$email','$pass','$date',2,TRUE)";
			execute($sql);

			$sql ="SELECT id from users where userName = '$uname'";
			$result = getArray($sql);
			$id = $result[0]['id'];

			$sql ="INSERT INTO customers VALUES($id,'$name','$contact','$address','$sq','$date')";
			execute($sql);
            $success= "Registration Successfull click here to <a href = 'login.php'>Login</a>";
		}
	}

	if(isset($_POST['infoUpdate'])){
		$id = $_SESSION["id"];
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

        if(empty($_POST["email"]))
		{
			$err_email = "Email Required <br>";
			$has_error=true;
		}else{
            $email=$_POST["email"];
            $Cemail = str_split($email);
            $at = 0;
            $dot = 0;
            $i = 0;
            $atC = 0;
            foreach($Cemail as $char){
                if($char == "@"){
                    $at = $i;
                    $atC++;
                }

                if($char == "."){
                    $dot = $i;
                }

                if($atC > 1){
                    $at = 0;
                    $dot = 0;
                    break;
                }
                $i++;
            }
            if($at > ($dot-2) || $dot== 0){
                $has_error = true;
                $err_email = "This is not a valid Email Address";
			}	
		}

		if(empty($_POST["phone"]))
		{
			$err_contact= "contact No is Required <br>";
			$has_error=true;
		}else{
            $contact=$_POST["phone"];
            if(strlen($contact)!=11){
                $has_error = true;
                $err_contact = "contact Number Should be 11 in length.";
			}
			
			/*$sql = "SELECT * FROM users where emailAddress = '$email'";
			if(getArray($sql)){
                $has_error = true;
                $err_email = "Email is already used!!! try different email";
                $email = "";
            }*/
		}

		if(empty($_POST["address"]))
		{
			$err_address= "Address Required <br>";
			$has_error=true;
		}else{
            $address=$_POST["address"];
		}

		if(empty($_POST["sq"]))
		{
			$err_sq= "Sequrity Que is Required <br>";
			$has_error=true;
		}else{
            $sq=$_POST["sq"];
		}

		//echo "ki hoilo";
		if(!$has_error){
			$date = date('Y/m/d H:i:s');
			$sql = "UPDATE `customers` SET `Name`='$name',`ContactNo`='$contact',`Address`='$address',`Sequrity_Que`='$sq',`updatedDate`= '$date' WHERE userId = $id";
			execute($sql);

			$sql = "UPDATE `users` SET emailAddress = '$email',`updatedDate`= '$date' WHERE id = $id";
			execute($sql);
		}
		
	}
	$err_npass = "";
	$npass = "";
	if(isset($_POST['passUpdate'])){

		if(empty($_POST['pass'])){
			$err_pass = "Password Required<br>";
			$has_error = true;
		}
		else{
			$id = $_SESSION['id'];
			$pass = $_POST['pass'];
			$sql = "select * from users where id = $id and pass = '$pass'";
			if(getResult($sql)){
				if(empty($_POST["npass"]))
				{
					$err_npass= "Password Required <br>";
					$has_error=true;
				}else{
					$npass=$_POST["npass"];
					$cpass=$_POST["cPass"];
					if($npass !=$cpass){
						$err_npass = "Password doesn't Match";
						$has_error = true;
					}
					if(strlen($npass)<8){
						$err_npass = "Password must be atleast 8 characters long";
						$has_error = true;
					}
				}
				if(empty($_POST["cPass"]))
				{
					$err_cpass= "Password Required <br>";
					$has_error=true;
				}else{
					$npass=$_POST["npass"];
					$cpass=$_POST["cPass"];
					if($npass !=$cpass){
						$err_pass = "Password doesn't Match";
						$has_error = true;
					}
					if(strlen($cpass)<8){
						$err_cpass = "Password must be atleast 8 characters long";
						$has_error = true;
					}
				}
				
				if(!$has_error){
					$date = date('Y/m/d H:i:s');
					$sql = "UPDATE `users` SET pass = '$npass',`updatedDate`= '$date' WHERE id = $id";
					execute($sql);
				}

			}
			else{
				$err_pass = "Password is not Correct!!!";
			}
			}
		}

	function CustomerSearch($key,$key2){
		$sql = "SELECT c.Name as name,u.emailAddress as email, c.ContactNo as phone,c.Address as address from users as u, customers as c where u.id = c.userId and c.$key2 like '%$key%'";
		return getArray($sql);
	}


	function getCustomer($id){
		$sql = "SELECT u.image as image, c.Name as name,u.emailAddress as email, c.ContactNo as phone,c.Address as address,c.sequrity_Que as sq from users as u, customers as c where u.id = c.userId and c.userId = $id";
		return getArray($sql);
	}

	function getUnVerifiedCustomers(){
		$sql = "SELECT u.id as id, c.Name as name,u.emailAddress as email, c.ContactNo as phone,c.Address as address from users as u, customers as c where u.id = c.userId and u.isValid = FALSE";
		return getArray($sql);
	}

	function getAllCustomers(){
		$sql = "SELECT c.Name as name,u.emailAddress as email, c.ContactNo as phone,c.Address as address from users as u, customers as c where u.id = c.userId";
		return getArray($sql);
	}
?>