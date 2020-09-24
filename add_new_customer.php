<?php
    session_start();
    include('header.php');
    include('employeenavbar.php');
    include('employeesidebar.php');
?>
<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Add New Customer
            </h1>
		<form action="" method="post">
			<table>
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" name="name"value="" required>
				</div>
				<div class="form-group">
					<label>UserName:</label>
					<input type="text" class="form-control" name="uname"value="" required>
				</div>
                <div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" name="password"value="" required>
				</div>
				<div class="form-group">
					<label>ConfirmPassword:</label>
					<input type="text" class="form-control" name="confirmPassword"value="" required>
				</div>
                <div class="form-group">
					<label>Contact:</label>
					<input type="text" class="form-control" name="contact"value="" required>
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" class="form-control" name="email"value="" required>
				</div>
                <div class="form-group">
					<label>Address:</label>
					<input type="textarea" class="form-control" name="address"value="" required>
				</div>
				<div class="form-group">
					<label>Security Que:</label>
					<input type="text" class="form-control" name="securityQue"value="" placeholder = "Who is your best friend?" required>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" name="Register" value="Register">
				</div>
			</table>
		</form>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php';?>
