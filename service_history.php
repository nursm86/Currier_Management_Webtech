<?php
    session_start();
    include('header.php');
    include('employeenavbar.php');
    include('employeesidebar.php');
?>


<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Sent products
    </h1><br>

    <div class="row">
        <div class="col-md-2">
            <div class="form-group">

                <select class="form-control" name="accountType" id="drpdwnorgan" onchange="organSearch()">
                <option value="" disabled selected>Search By</option>
                        <option value="Name" >Name</option>
                        <option value="Contact" >Contact</option>
                        <option value="Address" >Address</option>
                </select>
            </div>
        </div>
        <div class="col-md-8 donor">
        <input type="text" name="" id="myInput" placeholder="Search Customers " onkeyup="searchFun()">
        </div>
    </div><br>

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
                    <td>Decission</td>
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
                        echo '<td><input type="submit" class="btn btn-warning" value="Cancel" name="cancel" id=""></td>';
                        echo "</tr>";
                    }
                
                ?>
                </tbody>
            </table>
            </div>
            </div>

            <br><br><h1 class="text-white bg-dark text-center">
    Recieved Products
    </h1><br>

    <div class="row">
        <div class="col-md-2">
            <div class="form-group">

                <select class="form-control" name="accountType" id="drpdwnorgan" onchange="organSearch()">
                <option value="" disabled selected>Search By</option>
                        <option value="Name" >Name</option>
                        <option value="Contact" >Contact</option>
                        <option value="Address" >Address</option>
                </select>
            </div>
        </div>
        <div class="col-md-8 donor">
        <input type="text" name="" id="myInput" placeholder="Search Customers " onkeyup="searchFun()">
        </div>
    </div><br>

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
                </tbody>
            </table>
            </div>
            </div>

<?php include 'footer.php';?>