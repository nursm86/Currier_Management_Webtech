<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include('header.php');
    include('employeenavbar.php');
    include('employeesidebar.php');
    require_once 'controllers/ProductController.php';
    $sentProducts = getsentBy($_SESSION['id']);
    $receivedProducts = getReceivedBy($_SESSION['id']);
?>

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Sent products
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
                </tr>
                </thead>
                <tbody>
                    <div class="col-md-8">
                <?php
                    foreach($sentProducts as $sentProduct){
                        echo "<tr>";
                        echo "<td>".$sentProduct['sbName']."</td>";
                        echo "<td>".$sentProduct['rbName']."</td>";
                        echo "<td>".$sentProduct['date']."</td>";
                        echo "<td>".$sentProduct['rname']."</td>";
                        echo "<td>".$sentProduct['raddress']."</td>";
                        if($sentProduct['state'] == 0){
                            echo "<td>"."Not Yet Received at the Branch"."</td>";
                        }
                        else{
                            echo "<td>"."Ready for Shipping"."</td>";
                        }
                        if($sentProduct['state'] == 0 || $sentProduct['state'] == 0){
                            echo '<td><a href="canceldelivery.php?id='.$sentProduct["id"].'" class="btn btn-danger">Cancel</a></td>';
                        }
                        
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
                   foreach($receivedProducts as $receivedproduct){
                    echo "<tr>";
                    echo "<td>".$receivedproduct['sbName']."</td>";
                    echo "<td>".$receivedproduct['rbName']."</td>";
                    echo "<td>".$receivedproduct['date']."</td>";
                    echo "<td>".$receivedproduct['rname']."</td>";
                    echo "<td>".$receivedproduct['raddress']."</td>";
                    if($receivedproduct['state'] == 0){
                        echo "<td>"."Not Yet Received at the Branch"."</td>";
                    }
                    else{
                        echo "<td>"."Ready for Shipping"."</td>";
                    }
                    echo "</tr>";
                }
                
                ?>
                </tbody>
            </table>
            </div>
            </div>

<?php include 'footer.php';?>
