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

    function getBranchbyId($id){
        $sql = "select * from branch where Id = $id";
        return getArray($sql);
    }

    function getAllBranch(){
        $sql = "select * from branch";
        return getArray($sql);
    }
    function searchBranches($key,$key2){
        $sql = "select * from branch where $key2 like '%$key%'";
        return getArray($sql);
    }
    function getPhone($id){
        $sql = "select e.ContactNo as phone from employee as e, branch as b where b.Id = e.Branch_id and b.Id = '$id'";
        return getArray($sql);
    }
?>