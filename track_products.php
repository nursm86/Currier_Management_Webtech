<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include ('header.php');
    include ('customernavbar.php');
    include ('customersidebar.php');
    require_once 'controllers/ProductController.php';
    $pendingProducts = getPendingProducts($_SESSION['id']);
    $shippedProducts = getShippedProducts($_SESSION['id']);
?>

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Pending Products
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
                    foreach($pendingProducts as $pendingproduct){
                        echo "<tr>";
                        echo "<td>".$pendingproduct['sbName']."</td>";
                        echo "<td>".$pendingproduct['rbName']."</td>";
                        echo "<td>".$pendingproduct['date']."</td>";
                        echo "<td>".$pendingproduct['rname']."</td>";
                        echo "<td>".$pendingproduct['raddress']."</td>";
                        if($pendingproduct['state'] == 0){
                            echo "<td>"."Not Yet Received at the Branch"."</td>";
                        }
                        else{
                            echo "<td>"."Ready for Shipping"."</td>";
                        }
                        echo '<td><a href="canceldelivery.php?id='.$pendingproduct["id"].'" class="btn btn-danger">Cancel</a></td>';
                        echo "</tr>";
                    }
                
                ?>
                </tbody>
            </table>
            </div>
            </div>

            <br><br><h1 class="text-white bg-dark text-center">
    Shipped Products
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
                    foreach($shippedProducts as $shippedproduct){
                        echo "<tr>";
                        echo "<td>".$shippedproduct['sbName']."</td>";
                        echo "<td>".$shippedproduct['rbName']."</td>";
                        echo "<td>".$shippedproduct['date']."</td>";
                        echo "<td>".$shippedproduct['rname']."</td>";
                        echo "<td>".$shippedproduct['raddress']."</td>";
                        if($shippedproduct['state'] == 2){
                            echo "<td>"."Product is on the way now"."</td>";
                        }
                        else{
                            echo "<td>"."Product is ready to recived"."</td>";
                        }
                        echo "</tr>";
                    }
                
                ?>
                </tbody>
            </table>
            </div>
            </div>

<?php include 'footer.php'?>