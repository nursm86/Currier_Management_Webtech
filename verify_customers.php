<?php
    session_start();
    include('header.php');
    include('employeenavbar.php');
    include('employeesidebar.php');
?>
    <div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Verify Customers
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
                        $servername = "localhost";
                        $username = "root";
                        $pass = "";
                        $dbname = "web_tech";
                            
                        $conn = mysqli_connect($servername,$username,$pass,$dbname);

                        $sql = "SELECT * FROM customers";

                        $verify = mysqli_query($conn, $sql);
                        
                        while($var = mysqli_fetch_assoc($verify)){
                            echo "<tr>";
                            echo "<td>".$var['Name']."</td>";
                            if($var['Gender'] == 0){
                                echo "<td>"."Male"."</td>";
                            }
                            else{
                                echo "<td>"."Male"."</td>";
                            }
                            echo "<td>".$var['ContactNo']."</td>";
                            echo "<td>".$var['Address']."</td>";
                            echo '<td><input type="submit" class="btn btn-success" value="Accept" name="accept" id=""></td>';
                            echo '<td><input type="submit" class="btn btn-danger" value="Delete" name="delete" id=""></td>';
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            </div>
</div>
<?php include 'footer.php';?>