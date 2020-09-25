<?php
    require_once 'controllers/EmployeeController.php';

    if(isset($_POST['newdelivery'])){
        $category= $_POST["category"];
        $pdescription = $_POST["description"];
        $quantity = $_POST["quantity"];
        $paymethod = $_POST["pmethod"];
        $size = $_POST["size"];
        $sbid = $_POST["sbid"];
        $rname = $_POST["rname"];
        $rcontact = $_POST["rcontact"];
        $remail = $_POST["email"];
        $raddress = $_POST["raddress"];
        $rbid = $_POST["rbid"];
        $date = date('Y/m/d H:i:s');
        $id = $_SESSION['id'];
        $price = 100;
        
        newDelivery($category,$id,$rbid,$sbid,$price,$date,$paymethod,$remail,$rname,$rcontact,$raddress,$pdescription);
    }

    function getProduct($id){
        $sql = "SELECT p.Id as id,sb.Branch_Name as sbName,rb.Branch_Name as rbName ,p.Received_Date as date,p.ReceiverName as rname,p.ReceiverAddress as raddress, p.Product_State as state FROM product as p,Branch as sb,Branch as rb where p.Id = $id and p.Sending_B_id = sb.Id and p.Receiving_B_id = rb.Id";
        return getArray($sql);
    }

    function newDelivery($category,$id,$rbid,$sbid,$price,$date,$paymethod,$remail,$rname,$rcontact,$raddress,$pdescription){
        $sql = "INSERT INTO `product` VALUES (NULL,$category,$id,$rbid,$sbid,$price,NULL,NULL,'$date',$category,$paymethod,'$remail','$rname','$rcontact','$raddress','$pdescription',0,'$date')";
        execute($sql);
        header("Locaiton: track_product.php");
    }
    
    function getReceivedBy($id){
        $sql = "SELECT p.Id as id,sb.Branch_Name as sbName,rb.Branch_Name as rbName ,p.Received_Date as date,p.ReceiverName as rname,p.ReceiverAddress as raddress, p.Product_State as state FROM product as p,Branch as sb,Branch as rb where p.Receiving_M_id = $id and p.Sending_B_id = sb.Id and p.Receiving_B_id = rb.Id";
        return getArray($sql);
    }

    function getSentBy($id){
        $sql = "SELECT p.Id as id,sb.Branch_Name as sbName,rb.Branch_Name as rbName ,p.Received_Date as date,p.ReceiverName as rname,p.ReceiverAddress as raddress, p.Product_State as state FROM product as p,Branch as sb,Branch as rb where p.Sending_M_id = $id and p.Sending_B_id = sb.Id and p.Receiving_B_id = rb.Id";
        return getArray($sql);
    }
    function getPendingProducts($id){
        $sql = "SELECT p.Id as id,sb.Branch_Name as sbName,rb.Branch_Name as rbName ,p.Received_Date as date,p.ReceiverName as rname,p.ReceiverAddress as raddress, p.Product_State as state FROM product as p,Branch as sb,Branch as rb where customer_Id = $id and (Product_State = 0 or Product_State = 1) and p.Sending_B_id = sb.Id and p.Receiving_B_id = rb.Id";
        return getArray($sql);
    }

    function getShippedProducts($id){
        $sql = "SELECT p.Id as id,sb.Branch_Name as sbName,rb.Branch_Name as rbName ,p.Received_Date as date,p.ReceiverName as rname,p.ReceiverAddress as raddress, p.Product_State as state FROM product as p,Branch as sb,Branch as rb where customer_Id = $id and (Product_State = 2 or Product_State = 3) and p.Sending_B_id = sb.Id and p.Receiving_B_id = rb.Id";
        return getArray($sql);
    }

    function getReleasedProducts($id){
        $sql = "SELECT p.Id as id,sb.Branch_Name as sbName,rb.Branch_Name as rbName ,p.Received_Date as date,p.ReceiverName as rname,p.ReceiverAddress as raddress, p.Product_State as state,p.Release_Date as rdate FROM product as p,Branch as sb,Branch as rb where customer_Id = $id and Product_State = 4 and p.Sending_B_id = sb.Id and p.Receiving_B_id = rb.Id";
        return getArray($sql);
    }

    function getfromCustomer($id){
        $result = getBranch($id);
        $id = $result[0]['Branch_id'];
        $sql = "SELECT p.Id as id,sb.Branch_Name as sbName,rb.Branch_Name as rbName ,p.Received_Date as date,p.ReceiverName as rname,p.ReceiverAddress as raddress, p.Product_State as state,p.Release_Date as rdate, p.ReceiverContact as phone FROM product as p,Branch as sb,Branch as rb where Product_State = 0 and p.Sending_B_id = $id and p.Receiving_B_id = rb.Id and p.Sending_B_id = sb.Id";
        return getArray($sql);
    }

    function getfromBranch($id){
        $result = getBranch($id);
        $id = $result[0]['Branch_id'];
        $sql = "SELECT p.Id as id,sb.Branch_Name as sbName,rb.Branch_Name as rbName ,p.Received_Date as date,p.ReceiverName as rname,p.ReceiverAddress as raddress, p.Product_State as state,p.Release_Date as rdate, p.ReceiverContact as phone FROM product as p,Branch as sb,Branch as rb where Product_State = 2 and p.Receiving_B_id = $id and p.Receiving_B_id = rb.Id and p.Sending_B_id = sb.Id";
        return getArray($sql);
    }

    function getShipableProducts($id){
        $result = getBranch($id);
        $id = $result[0]['Branch_id'];
        $sql = "SELECT p.Id as id,sb.Branch_Name as sbName,rb.Branch_Name as rbName ,p.Received_Date as date,p.ReceiverName as rname,p.ReceiverAddress as raddress, p.Product_State as state,p.Release_Date as rdate, p.ReceiverContact as phone FROM product as p,Branch as sb,Branch as rb where Product_State = 1 and p.Sending_B_id = $id and p.Receiving_B_id = rb.Id and p.Sending_B_id = sb.Id";
        return getArray($sql);
    }

    function getReleaseableProducts($id){
        $result = getBranch($id);
        $id = $result[0]['Branch_id'];
        $sql = "SELECT p.Id as id,sb.Branch_Name as sbName,rb.Branch_Name as rbName ,p.Received_Date as date,p.ReceiverName as rname,p.ReceiverAddress as raddress, p.Product_State as state,p.Release_Date as rdate, p.ReceiverContact as phone FROM product as p,Branch as sb,Branch as rb where Product_State = 3 and p.Receiving_B_id = $id and p.Receiving_B_id = rb.Id and p.Sending_B_id = sb.Id";
        return getArray($sql);
    }

    function searchReleasedProduct($id,$key,$key2){
        $result = getBranch($id);
        $id = $result[0]['Branch_id'];
        $sql = "SELECT p.Id as id,sb.Branch_Name as sbName,rb.Branch_Name as rbName ,p.Received_Date as date,p.ReceiverName as rname,p.ReceiverAddress as raddress, p.Product_State as state,p.Release_Date as rdate, p.ReceiverContact as phone FROM product as p,Branch as sb,Branch as rb where Product_State = 3 and p.Receiving_B_id = $id and p.Receiving_B_id = rb.Id and p.Sending_B_id = sb.Id and p.$key2 LIKE '%$key%'";
        return getArray($sql);
    }

    function ChistorySearch($id,$key,$key2){
        $query = "SELECT p.Id as id,sb.Branch_Name as sbName,rb.Branch_Name as rbName ,p.Received_Date as date,p.ReceiverName as rname,p.ReceiverAddress as raddress, p.Product_State as state,p.Release_Date as rdate FROM product as p,Branch as sb,Branch as rb where customer_Id = $id and Product_State = 4 and p.Sending_B_id = sb.Id and p.Receiving_B_id = rb.Id and p.$key2 LIKE '%$key%'";
		$categories = getArray($query);
		return $categories;
	}

?>