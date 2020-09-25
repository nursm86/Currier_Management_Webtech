<?php
    session_start();
    include ('header.php');
    include ('adminnavbar.php');
    include ('adminsidebar.php');
    require_once 'controllers/EmployeeController.php';
    $employees = getAllEmployee();
?>

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    All Worker
    </h1><br>
    <div class="row">

    <div class="col-md-2">
            <div class="form-group">

                <select class="form-control" name="accountType" id="drpdwnbg" onchange="bgSearch()">
                    <option value="" disabled selected>Show</option>
                    <option value="*">All</option>
                    <option value="0">Manager</option>
                    <option value="1">Driver</option>
                    <option value="2">Delivery boy</option>
                    <option value="3">Worker</option>
                </select>
            </div>
        </div>

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
                        <td>Name</td>
                        <td>Email Address</td>
                        <td>Contact No</td>
                        <td>Address</td>
                        <td>Designation</td>
                        <td>Qualification</td>
                        <td></td>
                    </tr>
                </thead> 
                <tbody>
                    <div class="col-md-8">
                    <?php
                        foreach($employees as $employee){
                            echo "<tr>";
                            echo "<td>".$employee['name']."</td>";
                            echo "<td>".$employee['email']."</td>";
                            echo "<td>".$employee['address']."</td>";
                            echo "<td>".$employee['email']."</td>";
                            if($employee['desig'] == 0){
                                echo "<td>Manager</td>";
                            }
                            else if($employee['desig'] == 1){
                                echo "<td>Worker</td>";
                            }
                            else if($employee['desig'] == 2){
                                echo "<td>Delivery Boy</td>";
                            }
                            else if($employee['desig'] == 1){
                                echo "<td>Driver</td>";
                            }
                            echo "<td>".$employee['qualification']."</td>";
                            echo '<td><input type="submit" class="btn btn-success" value="Edit" name="edit" id=""></td>';
                            echo '<td><input type="submit" class="btn btn-danger" value="Delete" name="delete" id=""></td>';
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            </div>
</div>

<?php include ('footer.php');  ?>