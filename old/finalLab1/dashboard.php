<?php
    session_start();
    require_once 'data_conn.php';
    if(!isset($_SESSION["loggedin"])){
        echo " You are not logged In!!!";
    }
?>
<html>
    <head><title>Dashboard</title></head>

    <body>
        <h1 style ="display:inline">Welcome To Webtech </h1>
        <img src = "logo.png" height = "80px" width = "80px"><br>
        <span>All User Data<Span>

        <table style ="float:center">
            <tr>
                <th>Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            <?php

                $sql = "SELECT * FROM users";

                $verify = getArray($sql);
                
                foreach($verify as $var){
                    echo "<tr>";
                    echo "<td>".$var['Name']."</td>";
                    
                    echo "<td>".$var['UserName']."</td>";
                    
                    echo "<td>".$var['Email']."</td>";
                    echo "<td>".$var['Phone']."</td>";
                    echo "</tr>";
                }
                
            ?>
    </body>
</html>