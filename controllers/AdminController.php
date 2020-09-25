<?php
    require_once 'models/db_connect.php';
    $pass = "";
    $npass = "";
    $cPass ="";
    $err_pass = "";
    $err_npass = "";
    $err_cPass = "";
    $has_error = false;
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

    function getAdmin($id){
        $sql = "select * from users where id = $id";
        return getArray($sql);
    }
?>