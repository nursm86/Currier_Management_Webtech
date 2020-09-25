<?php
    session_start();
    include('header.php');
    include('employeenavbar.php');
    include('employeesidebar.php');
    require_once 'controllers/ProductController.php';
    $releaseableProducts = getReleaseableProducts($_SESSION['id']);
?>


<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Release Products
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
                    <td></td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                    <div class="col-md-8">
                <?php
                    foreach($releaseableProducts as $releaseableProduct){
                        echo "<tr>";
                        echo "<td>".$releaseableProduct['sbName']."</td>";
                        echo "<td>".$releaseableProduct['rbName']."</td>";
                        echo "<td>".$releaseableProduct['date']."</td>";
                        echo "<td>".$releaseableProduct['rname']."</td>";
                        echo "<td>".$releaseableProduct['raddress']."</td>";
                        echo "<td>".$releaseableProduct['phone']."</td>";
                        echo '<td><input type="submit" class="btn btn-success" value="Relelase" name="relelase" id=""></td>';
                        echo '<td><input type="submit" class="btn btn-danger" value="Cancel" name="cancel" id=""></td>';
                        echo "</tr>";
                    }
                
                ?>
                </tbody>
            </table>
            </div>
            </div>
<?php include 'footer.php';?>