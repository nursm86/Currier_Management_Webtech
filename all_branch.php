<?php
    session_start();
    include ('header.php');
    include ('adminnavbar.php');
    include ('adminsidebar.php');
    require_once 'controllers/BranchController.php';
    $branches = getAllBranch();
?>

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    All Branches
    </h1><br>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">

                <select class="form-control" name="accountType" id="drpdwnorgan" onchange="organSearch()">
                <option value="" disabled selected>Search By</option>
                        <option value="Name" >Name</option>
                        <option value="Address" >Address</option>
                </select>
            </div>
        </div>
        <div class="col-md-8 donor">
        <input type="text" name="" id="myInput" placeholder="Search Branchhes" onkeyup="searchFun()">
        </div>
    </div><br>

            <div class="row ">

            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <td>Branchh Name</td>
                        <td>Address</td>
                        <td>Updated Date</td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead> 
                <tbody>
                    <div class="col-md-8">
                    <?php
                        foreach($branches as $branch){
                            echo "<tr>";
                            echo "<td>".$branch['Branch_Name']."</td>";
                            echo "<td>".$branch['Address']."</td>";
                            echo "<td>".$branch['UpdatedDate']."</td>";
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