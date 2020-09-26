<?php
	require_once 'controllers/CustomerController.php'
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
	<title>Registration</title>
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
                Registration
            </h1>
			<div class="form-group">
					<span><?php echo $success;?></span>
				</div>
		<form action="" method="post" onsubmit="return validateForm()" enctype ="multipart/form-data"> 
			<table>
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" id ="name" name="name"value="<?php echo $name;?>">
					<span id="err_name" style="color:red;"><?php echo $err_name;?></span>
				</div>
				<div class="form-group">
					<label>UserName:</label>
					<input type="text" class="form-control" id="uname" name="uname"value="<?php echo $uname;?>">
					<span id="err_uname" style="color:red;"><?php echo $err_uname;?></span>
				</div>
                <div class="form-group">
					<label>Password:</label>
					<input type="password" class="form-control" id="pass" name="password"value="<?php echo $pass;?>">
					<span id="err_pass" style="color:red;"><?php echo $err_pass;?></span>
				</div>
				<div class="form-group">
					<label>ConfirmPassword:</label>
					<input type="password" class="form-control" id="cpass" name="confirmPassword"value="<?php echo $cpass;?>">
					<span id="err_cpass" style="color:red;"><?php echo $err_cpass;?></span>
				</div>
                <div class="form-group">
					<label>Contact:</label>
					<input type="text" class="form-control" id="contact" name="contact" value="<?php echo $contact;?>">
					<span id="err_contact" style="color:red;"><?php echo $err_contact;?></span>
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control" id="email" name="email"value="<?php echo $email;?>">
					<span id="err_email" style="color:red;"><?php echo $err_email;?></span>
				</div>
                <div class="form-group">
					<label>Address:</label>
					<input type="textarea" class="form-control" id="address" name="address"value="<?php echo $address;?>">
					<span id="err_address" style="color:red;"><?php echo $err_address;?></span>
				</div>
				<div class="form-group">
					<label>Security Que:</label>
					<input type="text" class="form-control" id="sq" name="securityQue"value="<?php echo $sq;?>" placeholder = "Who is your best friend?">
					<span id="err_sq" style="color:red;"><?php echo $err_sq;?></span>
				</div>

				<div class="form-group">
                        <label for="image">Picture</label>
						<input type="file" name ="image" class="form-control" id="imagre">        
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

<script>
	function get(id){
		return document.getElementById(id);
	}
	function validateForm(){
		var name =get('name').value;
		var uname=get('uname').value;
		var pass=get('pass').value;
		var cpass=get('cpass').value;
    	var email = get('email').value;
		var contact= get('contact').value;
		var address=get('address').value;
		var sq=get('sq').value;
    
		var err_name = get('err_name');
		var err_uname=get('err_uname');
		var err_pass=get('err_pass');
		var err_cpass=get('err_cpass');
		var err_email = get('err_email');
		var err_contact = get('err_contact');
		var err_sq =get('err_sq');
		var err_address=get('err_address');
		var has_error=true;
		if(name=="")
		{
			err_name = "Name Required <br>";
			has_error=false;
		}

        if(uname =="")
		{
			err_uname = "Username Required <br>";
			has_error=false;
		}
        
		if(pass=="")
		{
			err_pass= "Password Required <br>";
			has_error=false;
		}
		if(cpass=="")
		{
			err_cpass= "Password Required <br>";
			has_error=false;
		}

        if(email=="")
		{
			err_email = "Email Required <br>";
			has_error=false;
		}

		if(contact=="")
		{
			err_contact= "contact No is Required <br>";
			has_error=false;
		}

		if(address=="")
		{
			err_address= "Address Required <br>";
			has_error=false;
		}

		if(securityQue=="")
		{
			err_sq= "Sequrity Que is Required <br>";
			has_error=false;
		}
		return has_error;
	}
</script>