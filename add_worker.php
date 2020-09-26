<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include ('header.php');
    include ('adminnavbar.php');
    include ('adminsidebar.php');
    require 'controllers/EmployeeController.php';
    $allBranch = getAllBranch();
?>
<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Add New Worker
            </h1>
		<form action="" method="post" enctype ="multipart/form-data">
				<div class="form-group">
					<label>UserName:</label>
					<input type="text" class="form-control" name="uname" value="<?php echo $uname;?>" required>
                    <span style="color:red;"><?php echo $err_uname;?></span>
				</div>
                <div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" name="password" value="<?php echo $pass;?>" required>
                    <span style="color:red;"><?php echo $err_pass;?></span>
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" class="form-control" name="email" value="<?php echo $email;?>" required>
                    <span style="color:red;"><?php echo $err_email;?></span>
				</div>
                <div class="form-group" >
                    <label>Designation:</label>
                        <select style="border-radius: 5px;" class="form-control" name ="desig" value = "<?php echo $designation;?>">
                            <option selected hidden>Select a Designation</option>
                            <option value="0">Manager</option>
                            <option value="1">Worker</option>
                            <option value="2">Delivery Boy</option>
                            <option value="3">Driver</option>
                        </select>
                        <span style="color:red;"><?php echo $err_designation;?></span>

                </div>
                <div class="form-group">
                    <label>Branch:</label>
                    
                    <select class="form-control" name = "bid" value = "<?php echo $bid;?>">
                            <option selected hidden>Select Branch</option>
                            <?php
                                foreach($allBranch as $branch){
                                    echo "<option value = '".$branch['Id']."'>".$branch["Branch_Name"]."</option>";
                                }
                            ?>
                        </select><br>
                        <span style="color:red;"><?php echo $err_bid;?></span>
                </div>
                <div class="form-group">
					<label>Salary:</label>
					<input type="text" class="form-control" name="salary"value="<?php echo $salary;?>" required>
                    <span style="color:red;"><?php echo $err_salary;?></span>
				</div>
                <div class="form-group">
                        <label for="image">Picture</label>
						<input type="file" name ="image" class="form-control" id="imagre">        
                </div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" name="newemployee" value="Add New Employee">
				</div>
		</form>
        </div>
    </div>
</div>
</div>
<?php include ('footer.php');  ?>