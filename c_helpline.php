<?php
    session_start();
    include ('header.php');
    include ('customernavbar.php');
    include ('customersidebar.php');
    require_once 'controllers/BranchController.php';
    $allBranch = getAllBranch();
?>
<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Help Line(Select Branch to get managers phone no)
            </h1>
		<form action="" method="post">
				<div class="form-group">
                <select class="form-control" name = "sbid">
                    <option selected hidden>Select Branch</option>
                            <?php
                                foreach($allBranch as $branch){
                                    echo "<option value = '".$branch['Id']."'>".$branch["Branch_Name"]."</option>";
                                }
                            ?>
                        </select>
				</div>
				<div class="form-group">
					<label>Phone No</label>
					<input type="text" class="form-control" name="B_address"value="<?php echo $phone;?>" required>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" name="newebranch" value="Get Phone Number">
				</div>
		</form>
		</div>
    </div>
</div>
</div>
<?php include 'footer.php'?>