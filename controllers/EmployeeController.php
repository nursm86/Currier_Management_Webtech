<?php
    require 'BranchController.php';
    $name ="";
	$uname="";
	$pass="";
	$cpass="";
    $email = "";
	$phone= "";
    $address="";
    $joiningDate = "";
    $dob = "";
    $salary = "";
    $bonus = "";
    $designation = "";
    $bid = "";
    $bgroup = "";
    $qualificaiton = "";
    $gender = "";
    
    $err_name = "";
	$err_uname="";
	$err_pass="";
	$err_cpass="";
    $err_email = "";
	$err_phone = "";
    $err_address="";
    $err_joiningDate = "";
    $err_dob = "";
    $err_salary = "";
    $err_bonus = "";
    $err_designation = "";
    $err_bid = "";
    $err_bgroup = "";
    $err_qualificaiton = "";
    $err_gender = "";
	$has_error=false;
	$success = "";
	$sql = "";
	if(isset($_POST["updateDocument"]))
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

		if(empty($_POST["dob"]))
		{
			$err_dob= "DOB Required <br>";
			$has_error=true;
		}else{
            $dob=$_POST["dob"];
		}

		if(empty($_POST["phone"]))
		{
			$err_phone= "contact No is Required <br>";
			$has_error=true;
		}else{
            $phone=$_POST["phone"];
            if(strlen($phone)!=11){
                $has_error = true;
                $err_phone = "contact Number Should be 11 in length.";
			}

		}

		if(empty($_POST["address"]))
		{
			$err_address= "Address Required <br>";
			$has_error=true;
		}else{
            $address=$_POST["address"];
		}

        $bgroup=$_POST["bgroup"];
		
        $gender=$_POST["gender"];

		if(empty($_POST["qualificaiton"]))
		{
			$err_qualificaiton= "qualification is Required <br>";
			$has_error=true;
		}else{
            $qualificaiton=$_POST["qualificaiton"];
		}

		if(!$has_error){
			$date = date('Y/m/d H:i:s');
			$id = $_SESSION['id'];
			$sql = "UPDATE `users` SET `updatedDate`='$date',`isValid`=TRUE WHERE id = $id";
			execute($sql);

			$sql ="UPDATE `employee` SET `Name`='$name',`JoiningDate`='$date',`DOB`='$dob',`ContactNo`='$phone',`Address`='$address',`UpdatedDate`='$date',`Blood_Group`='$bgroup',`Qualification`='$qualificaiton',`Gender`='$gender' WHERE userId = $id";
			execute($sql);
            $success= "Updated Successfully click here to <a href = 'login.php'>Login</a>";
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
		}

		if(empty($_POST["address"]))
		{
			$err_address= "Address Required <br>";
			$has_error=true;
		}else{
            $address=$_POST["address"];
        }
        $dob = $_POST['dob'];

		//echo "ki hoilo";
		if(!$has_error){
			$date = date('Y/m/d H:i:s');
			$sql = "UPDATE `employee` SET `Name`='$name',`ContactNo`='$contact',`Address`='$address',`DOB`='$dob',`updatedDate`= '$date' WHERE userId = $id";
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

	function getEmployee($id){
		$sql = "SELECT u.image as image, c.userId as id,c.Name as name,u.emailAddress as email,c.Branch_id as bid,c.Salary as salary,c.Bonus as bonus, c.ContactNo as phone,c.Address as address ,c.JoiningDate as jdate,c.DOB as dob,c.Designation as desig, c.Qualification as qualification from users as u, employee as c where u.id = c.userId and c.userId = $id";
		return getArray($sql);
	}

	function getBranch($id){
		$sql = "select Branch_id from employee where userId = $id";
		return getArray($sql);
	}

	$subject = "";
	$problem = "";
	$err_subject = "";
	$err_problem= "";
	if(isset($_POST["submitproblem"])){
		if(empty($_POST["subject"]))
		{
			$err_subject = "Subject Required <br>";
			$has_error=true;
		}else{
			$subject=$_POST["subject"];
		}
		if(empty($_POST["problem"]))
		{
			$err_problem= "You must write some problem <br>";
			$has_error=true;
		}else{
			$problem=$_POST["problem"];
		}
		if(!$has_error){
			setProblem($_SESSION['id'],$subject,$problem);
		}
	}

	function setProblem($id,$subject,$problem){
		$date = date('Y/m/d H:i:s');
		$result = getBranch($id);
		$bid = $result[0]['Branch_id'];

		$sql = "INSERT INTO `employee_problem` VALUES ($id,$bid,'$date','$problem','$subject')";
		execute($sql);
	}

	function getAllProblems(){
		$sql = "select ep.id as id,e.Name as name,b.Branch_Name as bname,ep.subject as subject, ep.Problem as problem, ep.UpdatedDate as date from employee_problem as ep, employee as e, Branch as b where e.Branch_id = b.Id";
		return getArray($sql);
	}

	function getAllEmployee(){
		$sql = "SELECT c.userId as id,c.Name as name,u.emailAddress as email, c.ContactNo as phone,c.Address as address ,c.JoiningDate as jdate,c.DOB as dob,c.Designation as desig, c.Qualification as qualification from users as u, employee as c where u.id = c.userId";
		return getArray($sql);
	}

	if(isset($_POST["newemployee"]))
	{
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
            if(strlen($pass)<8){
                $err_pass = "Password must be atleast 8 characters long";
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

        $designation=$_POST["desig"];

		if(empty($_POST["bid"]))
		{
			$err_bid= "Branch must be set Required <br>";
			$has_error=true;
		}else{
            $bid=$_POST["bid"];
		}

		if(empty($_POST["salary"]))
		{
			$err_salary= "Salary is Required <br>";
			$has_error=true;
		}else{
            $salary=$_POST["salary"];
		}

		if(!$has_error){
			$target_dir ="storage/profile_pic/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
			$date = date('Y/m/d H:i:s');
			$sql = "INSERT INTO users VALUES (NULL,'$uname','$email','$pass','$date',1,FALSE,'$target_file')";
			execute($sql);

			$sql ="SELECT id from users where userName = '$uname'";
			$result = getArray($sql);
			$id = $result[0]['id'];

			$sql ="INSERT INTO `employee` VALUES ($id,NULL,NULL,NULL,$salary,NULL,NULL,NULL,$designation,$bid,'$date',NULL,NULL,NULL)";
			execute($sql);
		}
	}

	function SearchWorker($key,$key2,$key3){
		$sql = "";
		if($key3 == "*"){
			$sql = "SELECT c.userId as id,c.Name as name,u.emailAddress as email, c.ContactNo as phone,c.Address as address ,c.JoiningDate as jdate,c.DOB as dob,c.Designation as desig, c.Qualification as qualification from users as u, employee as c where u.id = c.userId and $key2 like '%$key%'";
		}
		else{
			$sql = "SELECT c.userId as id,c.Name as name,u.emailAddress as email, c.ContactNo as phone,c.Address as address ,c.JoiningDate as jdate,c.DOB as dob,c.Designation as desig, c.Qualification as qualification from users as u, employee as c where u.id = c.userId and $key2 like '%$key%' and c.Designation = $key3";
		}
		if(empty($key)){
			getAllEmployee();
		}
		
		return getArray($sql);
	}

?>