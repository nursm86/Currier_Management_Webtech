<?php
    session_start();
    include ('header.php');
    include ('customernavbar.php');
    include ('customersidebar.php')
?>
            Welcome <?php echo $_COOKIE["Loggedinuser"]; ?>(Customer)
<?php include 'footer.php'?>