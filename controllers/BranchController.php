<?php
    require_once 'models/db_connect.php';

    $bname = "";
    $address = "";
    $err_bname = "";
    $err_address = "";
    $has_error = false;
    if(isset($_POST['addnewebranch'])){
        if(empty($_POST["B_name"]))
		{
			$err_bname = "BranchName Required <br>";
			$has_error=true;
		}else{
			$bname=$_POST["B_name"];
		}
		if(empty($_POST["B_address"]))
		{
			$err_address= "Address Required <br>";
			$has_error=true;
		}else{
			$address=$_POST["B_address"];
        }
        if(!$has_error){
            insertBranch($bname,$address);
        }
    }
    function insertBranch($bname,$address){
        $date = date('Y/m/d H:i:s');
        $sql = "insert into branch VALUES(NULL,'$bname','$address','$date')";
        execute($sql);
    }

    function getAllBranch(){
        $sql = "select * from branch";
        return getArray($sql);
    }
?>