<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include('header.php');
    include('employeenavbar.php');
    include('employeesidebar.php');
    require_once 'controllers/CustomerController.php';
    $customers = getUnVerifiedCustomers();
?>
    <div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Verify Customers
    </h1><br>
            <div class="row ">

            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Gender</td>
                        <td>Contact No</td>
                        <td>Address</td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead> 
                <tbody>
                    <div class="col-md-8">
                    <?php
                        foreach($customers as $customer){
                            echo "<tr>";
                            echo "<td>".$customer['name']."</td>";
                            echo "<td>".$customer['email']."</td>";
                            echo "<td>".$customer['phone']."</td>";
                            echo "<td>".$customer['address']."</td>";
                            echo '<td><a href="verifyCustomer.php?id='.$customer["id"].'" class="btn btn-warning">View</a></td>';
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            </div>
</div>
<?php include 'footer.php';?>