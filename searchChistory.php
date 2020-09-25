<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
	require_once 'controllers/ProductController.php';
    $key = $_GET["key"];
    $key2 = $_GET["key2"];
    $id = $_SESSION['id'];
	$products = ChistorySearch($id,$key,$key2);
	
	foreach($products as $product){
        echo "<tr>";
        echo "<td>".$product['sbName']."</td>";
        echo "<td>".$product['rbName']."</td>";
        echo "<td>".$product['date']."</td>";
        echo "<td>".$product['rname']."</td>";
        echo "<td>".$product['raddress']."</td>";
        echo "<td>".$product['rdate']."</td>";
        echo "</tr>";
	}
	
?>