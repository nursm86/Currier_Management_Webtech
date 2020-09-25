<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include ('header.php');
    include ('employeenavbar.php');
    include ('employeesidebar.php')
?>

<?php include 'footer.php'?>