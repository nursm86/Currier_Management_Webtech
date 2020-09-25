<?php
    session_start();
    include ('header.php');
    include ('customernavbar.php');
    include ('customersidebar.php');
    require_once 'controllers/ProductController.php';
    $releasedProducts = getReleasedProducts($_SESSION['id']);
    
?>

<h1 class="text-white bg-dark text-center">
    All released Products
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
                    <td>Released Date</td>
                </tr>
                </thead>
                <tbody>
                    <div class="col-md-8">
                <?php
                    foreach($releasedProducts as $releasedProduct){
                        echo "<tr>";
                        echo "<td>".$releasedProduct['sbName']."</td>";
                        echo "<td>".$releasedProduct['rbName']."</td>";
                        echo "<td>".$releasedProduct['date']."</td>";
                        echo "<td>".$releasedProduct['rname']."</td>";
                        echo "<td>".$releasedProduct['raddress']."</td>";
                        echo "<td>".$releasedProduct['rdate']."</td>";
                        echo "</tr>";
                    }
                
                ?>
                </tbody>
            </table>
            </div>
            </div>

<?php include 'footer.php'?>