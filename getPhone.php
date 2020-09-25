<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
	require_once 'controllers/BranchController.php';
    $key = $_GET["key"];
    $phone = getPhone($key);
    
    echo $phone[0]['phone'];
?>