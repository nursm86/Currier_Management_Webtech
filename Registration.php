<?php
	require_once 'controllers/LoginController.php'
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/indexstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login</title>
</head>


<body>
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light ">
			<a class="navbar-brand" href="#"><img src="system_images/mlogo.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto" align="right">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home </a>
				</ul>
			</div>
		</nav>
	</section>
	<br><br>
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
				<div class="form-group">
					Already have a account?
					<a href="login.php">Click here to login</a>
				</div>
			</table>
		</form>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php'?>