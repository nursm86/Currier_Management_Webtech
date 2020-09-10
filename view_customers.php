<html>
    <head>
        <title>View Customers</title>
    </head>
    <body>
            <table>
                <tr>
                    <td><img src = "logo.png" alt="Logo" width = 40px length = 40px></td>
                    <td><a href = "employee_home.php">Dashboard</a></td>
                    <td bgcolor = "lightgreen"><a href = "view_customers.php" >View Customers</a></td>
                    <td><a href = "receive_products.php">Receive Products</a></td>
					<td><a href = "add_new_customer.php">Add new customer</a></td>
                    <td><a href = "verify_customers.php">verify customers</a></td>
					<td><a href = "ship_products.php">Ship products</a></td>
					<td><a href = "release_products.php">Release products</a></td>
					<td><a href = "helpline.php">Helpline</a></td>
					<td><a href = "service_history.php">Service History</a></td>
					<td><a href = "e_profile.php">profile</a></td>
                    <td><a href = "index.php">Logout</a></td>
                </tr>
            </table>
            <span>All verified Customers</span><br><br>

            <input type = "text" placeholder = "Search Customers"><input type="button" value="Search"><br><br>
            <table style ="float:center" border="1px">
            <tr>
                <td>Name</td>
                <td>Gender</td>
                <td>Contact No</td>
                <td>Address</td>
            </tr>
            <?php
                $servername = "localhost";
                $username = "root";
                $pass = "";
                $dbname = "web_tech";
                    
                $conn = mysqli_connect($servername,$username,$pass,$dbname);

                $sql = "SELECT * FROM customers";

                $verify = mysqli_query($conn, $sql);
                
                while($var = mysqli_fetch_assoc($verify)){
                    echo "<tr>";
                    echo "<td>".$var['Name']."</td>";
                    if($var['Gender'] == 0){
                        echo "<td>"."Male"."</td>";
                    }
                    else{
                        echo "<td>"."Male"."</td>";
                    }
                    echo "<td>".$var['ContactNo']."</td>";
                    echo "<td>".$var['Address']."</td>";
                    echo "</tr>";
                }
                
            ?>
            </table>
    </body>
</html>
