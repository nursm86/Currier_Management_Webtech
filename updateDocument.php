<?php
	session_start();
	if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
	require_once 'controllers/EmployeeController.php'
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
	<title>Update Document</title>
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
                Update Document
            </h1>
			<div class="form-group">
					<span><?php echo $success;?></span>
				</div>
		<form action="" method="post">
			<table>
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" name="name"value="<?php echo $name;?>">
					<span style="color:red;"><?php echo $err_name;?></span>
				</div>
				<div class="form-group">
					<label>Date of Birth:</label>
					<input type="date" class="form-control" name="dob" value="<?php echo $dob;?>">
					<span style="color:red;"><?php echo $err_dob;?></span>
				</div>
                <div class="form-group">
					<label>Contact No:</label>
					<input type="text" class="form-control" name="phone" value="<?php echo $phone;?>">
					<span style="color:red;"><?php echo $err_phone;?></span>
				</div>
				<div class="form-group">
					<label>Address:</label>
					<input type="text" class="form-control" name="address" value="<?php echo $address;?>">
					<span style="color:red;"><?php echo $err_address;?></span>
				</div>

                <div class="form-group">
					<label>bloodgroup:</label>
                        <select style="border-radius: 5px;" class="form-control" name ="bgroup" value = "<?php echo $bgroup;?>">
                            <option selected hidden>Select Blood Group</option>
                            <option value="A(+ve)">A(+ve)</option>
                            <option value="A(-ve)">A(-ve)</option>
                            <option value="B(+ve)">B(+ve)</option>
                            <option value="B(-ve)">B(-ve)</option>
                            <option value="AB(+ve)">AB(+ve)</option>
                            <option value="AB(-ve)">AB(-ve)</option>
                            <option value="O(+ve)">O(+ve)</option>
                            <option value="O(-ve)">O(-ve)</option>
                        </select>
                        <span style="color:red;"><?php echo $err_designation;?></span>
				</div>

                <div class="form-group">
					<label>Qualification:</label>
					<input type="text" class="form-control" name="qualificaiton" value="<?php echo $qualificaiton;?>">
					<span style="color:red;"><?php echo $err_qualificaiton;?></span>
				</div>

				<div class="form-group">
					<label>Gender :</label>
					<input type="radio" name="gender" value = "Male"> Male
                    <input type="radio" name="gender" value = "Female"> Female
                    <input type="radio" name="gender" value = "Other"> Other
					<span style="color:red;"><?php echo $err_gender;?></span>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" name="updateDocument" value="Update Document">
				</div>
			</table>
		</form>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php'?>