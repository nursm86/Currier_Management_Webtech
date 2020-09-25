<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include ('header.php');
    include ('adminnavbar.php');
	include ('adminsidebar.php');
	require_once 'controllers/BranchController.php';
?>
<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Add New Branch
            </h1>
		<form action="" method="post">
				<div class="form-group">
					<label>Branch Name:</label>
					<input type="text" class="form-control" name="B_name"value="">
				</div>
				<div class="form-group">
					<label>Address:</label>
					<input type="text" class="form-control" name="B_address"value="">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" name="addnewebranch" value="Add New Branch">
				</div>
		</form>
		</div>
    </div>
</div>
</div>
<?php include ('footer.php');  ?>