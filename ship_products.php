<?php
    session_start();
    include('header.php');
    include('employeenavbar.php');
    include('employeesidebar.php');
?>

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Ship Products
    </h1><br>

    <div class="row ">

            <table class="table" id="myTable">
                <thead>
                <tr>
                    <td>Sending Branch</td>
                    <td>Receiving Branch</td>
                    <td>Sending Date</td>
                    <td>Reciever Name</td>
                    <td>Address</td>
                    <td>Product State</td>
                    <td></td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                    <div class="col-md-8">
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
                        echo '<td><input type="submit" class="btn btn-success" value="Ship" name="ship" id=""></td>';
                        echo '<td><input type="submit" class="btn btn-danger" value="Delete" name="delete" id=""></td>';
                        echo "</tr>";
                    }
                
                ?>
                </tbody>
            </table>
            </div>
            </div>
<?php include 'footer.php';?>