<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include('header.php');
    include('employeenavbar.php');
    require_once 'controllers/ProductController.php';
    $rfromCs = getfromCustomer($_SESSION['id']);
    $rfromOBs = getfromBranch($_SESSION['id']);
    include('employeesidebar.php');
?>


<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Receive From Customers
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
                   foreach($rfromCs as $rfromC){
                        echo "<tr>";
                        echo "<td>".$rfromC['sbName']."</td>";
                        echo "<td>".$rfromC['rbName']."</td>";
                        echo "<td>".$rfromC['date']."</td>";
                        echo "<td>".$rfromC['rname']."</td>";
                        echo "<td>".$rfromC['raddress']."</td>";
                        echo "<td>".$rfromC['phone']."</td>";
                        echo '<td><a href="receivefromCustomer.php?id='.$rfromC["id"].'" class="btn btn-warning">View</a></td>';
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
            </div>
            </div>

            <br><br><h1 class="text-white bg-dark text-center">
    Recieved From other Branch
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
                    <td>Contact Number</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                    <div class="col-md-8">
                <?php
                    
                    foreach($rfromOBs as $rfromOB){
                        echo "<tr>";
                        echo "<td>".$rfromOB['sbName']."</td>";
                        echo "<td>".$rfromOB['rbName']."</td>";
                        echo "<td>".$rfromOB['date']."</td>";
                        echo "<td>".$rfromOB['rname']."</td>";
                        echo "<td>".$rfromOB['raddress']."</td>";
                        echo "<td>".$rfromOB['phone']."</td>";
                        echo '<td><a href="receivefromBranch.php?id='.$rfromOB["id"].'" class="btn btn-warning">View</a></td>';
                        echo "</tr>";
                    }
                
                ?>
                </tbody>
            </table>
            </div>
            </div>
<?php include 'footer.php';?>