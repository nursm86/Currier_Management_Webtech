<?php
    session_start();
    include ('header.php');
    include ('adminnavbar.php');
    include ('adminsidebar.php')
?>
<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Add New Worker
            </h1>
		<form action="" method="post">
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
					<label>Email:</label>
					<input type="email" class="form-control" name="email"value="" required>
				</div>
                <div class="form-group">
                    <label>Designation:</label>
                    
                        <select style="border-radius: 5px;" class="form-control">
                            <option selected hidden>Select a Designation</option>
                            <option value="0">Manager</option>
                            <option value="1">Worker</option>
                            <option value="2">Driver</option>
                            <option value="3">Delivery Boy</option>
                        </select>

                </div>
                <div class="form-group">
                    <label>Branch:</label>
                    
                        <select style="border-radius: 5px;" class="form-control">
                            <option selected hidden>Select a Branch</option>
                            <option value="0">Motijhil</option>
                            <option value="1">Jatrabari</option>
                            <option value="2">Khulna</option>
                            <option value="3">cumilla</option>
                        </select>
                    
                </div>
                <div class="form-group">
					<label>Salary:</label>
					<input type="text" class="form-control" name="salary"value="" required>
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