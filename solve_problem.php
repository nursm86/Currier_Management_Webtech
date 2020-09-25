<?php
    session_start();
    include ('header.php');
    include ('adminnavbar.php');
    include ('adminsidebar.php');
    require_once 'controllers/EmployeeController.php';
    $problems = getAllProblems();
?>

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Worker's Problem
    </h1><br>
    <div class="col-md-8 donor">
        <div class="form-group">

        <input type="text" name="" class="form-control" id="myInput" placeholder="Search Workers" onkeyup="searchFun()">
        </div>
    </div>
    </div><br>

            <div class="row ">

            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <td>Employee Name</td>
                        <td>Branch</td>
                        <td>Subject</td>
                        <td>Problem</td>
                        <td>Updated Date</td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead> 
                <tbody>
                    <div class="col-md-8">
                    <?php
                        foreach($problems as $problem){
                            echo "<tr>";
                            echo "<td>".$problem['name']."</td>";
                            echo "<td>".$problem['bname']."</td>";
                            echo "<td>".$problem['subject']."</td>";
                            echo "<td>".$problem['problem']."</td>";
                            echo "<td>".$problem['date']."</td>";
                            echo '<td><input type="submit" class="btn btn-success" value="Solve" name="solve" id=""></td>';
                            echo '<td><input type="submit" class="btn btn-danger" value="Delete" name="delete" id=""></td>';
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            </div>
</div>

<?php include ('footer.php');  ?>