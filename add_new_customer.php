<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include('header.php');
    include('employeenavbar.php');
	include('employeesidebar.php');
	require_once 'controllers/CustomerController.php'
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
					<input type="text" class="form-control" name="name"value="<?php echo $name;?>" required>
					<span style="color:red;"><?php echo $err_name;?></span>
				</div>
				<div class="form-group">
					<label>UserName:</label>
					<input type="text" class="form-control" name="uname"value="<?php echo $uname;?>" required>
					<span style="color:red;"><?php echo $err_uname;?></span>
				</div>
                <div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" name="password"value="<?php echo $pass;?>" required>
					<span style="color:red;"><?php echo $err_pass;?></span>
				</div>
				<div class="form-group">
					<label>ConfirmPassword:</label>
					<input type="password" class="form-control" name="confirmPassword"value="<?php echo $cpass;?>" required>
					<span style="color:red;"><?php echo $err_cpass;?></span>
				</div>
                <div class="form-group">
					<label>Contact:</label>
					<input type="text" class="form-control" name="contact"value="<?php echo $contact;?>" required>
					<span style="color:red;"><?php echo $err_contact;?></span>
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" class="form-control" name="email"value="<?php echo $email;?>" required>
					<span style="color:red;"><?php echo $err_email;?></span>
				</div>
                <div class="form-group">
					<label>Address:</label>
					<input type="textarea" class="form-control" name="address"value="<?php echo $address;?>" required>
					<span style="color:red;"><?php echo $err_address;?></span>
				</div>
				<div class="form-group">
					<label>Security Que:</label>
					<input type="text" class="form-control" name="securityQue"value="<?php echo $sq;?>" placeholder = "Who is your best friend?" required>
					<span style="color:red;"><?php echo $err_sq;?></span>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" name="addCustomer" value="Add Customer">
				</div>
			</table>
		</form>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php';?>
