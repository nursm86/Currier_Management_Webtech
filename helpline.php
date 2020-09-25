<?php
	session_start();
	if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include('header.php');
    include('employeenavbar.php');
	include('employeesidebar.php');
	require_once 'controllers/EmployeeController.php';
    
?>

<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Help Line
            </h1>
		<form action="" method="post">
				<div class="form-group">
                <label>Subject</label>
					<input type="text" class="form-control" name="subject"value="">
					<span style="color:red;"><?php echo $err_subject;?></span>
				</div>
				<div class="form-group">
					<label>Problem</label>
					<input type="text" class="form-control" name="problem" value="">
					<span style="color:red;"><?php echo $err_problem;?></span>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" name="submitproblem" value="Submit Problem">
				</div>
		</form>
		</div>
    </div>
</div>
</div>
<?php include 'footer.php';?>