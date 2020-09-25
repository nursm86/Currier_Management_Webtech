<?php
    session_start();
    include('header.php');
    include('employeenavbar.php');
    include('employeesidebar.php');
    require_once 'controllers/ProductController.php';
    $shipableProducts = getShipableProducts($_SESSION['id']);
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
                    <td>Reciever Contact</td>
                    <td></td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                    <div class="col-md-8">
                <?php
                    foreach($shipableProducts as $shipableProduct){
                        echo "<tr>";
                        echo "<td>".$shipableProduct['sbName']."</td>";
                        echo "<td>".$shipableProduct['rbName']."</td>";
                        echo "<td>".$shipableProduct['date']."</td>";
                        echo "<td>".$shipableProduct['rname']."</td>";
                        echo "<td>".$shipableProduct['raddress']."</td>";
                        echo "<td>".$shipableProduct['phone']."</td>";
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