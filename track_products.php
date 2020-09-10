<html>
    <head>
        <title>Track Products</title>
    </head>
    <body>
            <table>
                <tr>
                    <td><img src = "logo.png" alt="Logo" width = 40px length = 40px></td>
                    <td><a href = "customer_home.php">Dashboard</a></td>
                    <td><a href = "c_service_history.php">Service History</a></td>
                    <td><a href = "new_delivery.php">New Delivery</a></td>
					<td bgcolor = "lightgreen"><a href = "track_products.php">Track Products</a></td>
                    <td><a href = "c_profile.php">Edit profile</a></td>
					<td><a href = "c_helpline.php">Helpline</a></td>
                    <td>Delete Account</td>
                    <td><a href = "index.php">Logout</a></td>
                </tr>
            </table>

            <span><strong>Pending Products</strong></span><br><br>

            <table style ="float:center" border="1px">
                <strong><tr>
                    <td>Sending Branch</td>
                    <td>Receiving Branch</td>
                    <td>Sending Date</td>
                    <td>Reciever Name</td>
                    <td>Address</td>
                    <td>Product State</td>
                </tr></strong>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $pass = "";
                    $dbname = "web_tech";
                        
                    $conn = mysqli_connect($servername,$username,$pass,$dbname);

                    $sql = "SELECT * FROM product where customer_Id = '1' and (Product_State = '0' or Product_State = '1')";

                    $verify = mysqli_query($conn, $sql);
                    
                    while($var = mysqli_fetch_assoc($verify)){
                        echo "<tr>";
                        if($var['Sending_B_id'] == 0){
                            echo "<td>"."Motijhil"."</td>";
                        }
                        else if($var['Sending_B_id'] == 1){
                            echo "<td>"."Jatrabari"."</td>";
                        }
                        else if($var['Sending_B_id'] == 2){
                            echo "<td>"."Khulna"."</td>";
                        }
                        else{
                            echo "<td>"."Cumilla"."</td>";
                        }


                        if($var['Receiving_B_id'] == 0){
                            echo "<td>"."Motijhil"."</td>";
                        }
                        else if($var['Receiving_B_id'] == 1){
                            echo "<td>"."Jatrabari"."</td>";
                        }
                        else if($var['Receiving_B_id'] == 2){
                            echo "<td>"."Khulna"."</td>";
                        }
                        else{
                            echo "<td>"."Cumilla"."</td>";
                        }


                        echo "<td>".$var['Received_Date']."</td>";

                        echo "<td>".$var['ReceiverName']."</td>";
                        
                        
                        echo "<td>".$var['ReceiverAddress']."</td>";
                        if($var['Product_State'] == 0){
                            echo "<td>"."Not Yet Received at the Branch"."</td>";
                        }
                        else{
                            echo "<td>"."Ready for Shipping"."</td>";
                        }
                        echo "</tr>";
                    }
                
                ?>
            </table>

            <span><strong>Shipped Products</strong></span><br><br>

            <table style ="float:center" border="1px">
                <tr>
                    <td>Sending Branch</td>
                    <td>Receiving Branch</td>
                    <td>Sending Date</td>
                    <td>Reciever Name</td>
                    <td>Address</td>
                    <td>Product State</td>
                </tr>
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $pass = "";
                    $dbname = "web_tech";
                        
                    $conn = mysqli_connect($servername,$username,$pass,$dbname);

                    $sql = "SELECT * FROM product where customer_Id = '1' and (Product_State = '2' or Product_State = '3')";

                    $verify = mysqli_query($conn, $sql);
                    
                    while($var = mysqli_fetch_assoc($verify)){
                        echo "<tr>";
                        if($var['Sending_B_id'] == 0){
                            echo "<td>"."Motijhil"."</td>";
                        }
                        else if($var['Sending_B_id'] == 1){
                            echo "<td>"."Jatrabari"."</td>";
                        }
                        else if($var['Sending_B_id'] == 2){
                            echo "<td>"."Khulna"."</td>";
                        }
                        else{
                            echo "<td>"."Cumilla"."</td>";
                        }

                        if($var['Receiving_B_id'] == 0){
                            echo "<td>"."Motijhil"."</td>";
                        }
                        else if($var['Receiving_B_id'] == 1){
                            echo "<td>"."Jatrabari"."</td>";
                        }
                        else if($var['Receiving_B_id'] == 2){
                            echo "<td>"."Khulna"."</td>";
                        }
                        else{
                            echo "<td>"."Cumilla"."</td>";
                        }


                        echo "<td>".$var['Received_Date']."</td>";
                        echo "<td>".$var['ReceiverName']."</td>";
                        
                        
                        echo "<td>".$var['ReceiverAddress']."</td>";
                        if($var['Product_State'] == 2){
                            echo "<td>"."Shipped on the way to destination"."</td>";
                        }
                        else{
                            echo "<td>"."Reached to Destination Branch"."</td>";
                        }
                        echo "</tr>";
                    }
                
                ?>
            </table>
    </body>
</html>