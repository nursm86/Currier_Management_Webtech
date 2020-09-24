<?php
    session_start();
    include ('header.php');
    include ('customernavbar.php');
    include ('customersidebar.php')
?>
<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Delivery Form
            </h1>

            <h2> Product Information</h2><br>

            <form action="" method="post">
			<table>
                    
                        <select class="form-control">
                            <option selected hidden>Select a Category</option>
                            <option value="0">Manager</option>
                            <option value="1">Worker</option>
                            <option value="2">Driver</option>
                            <option value="3">Delivery Boy</option>
                        </select><br>
                    
                    
                        <input type = "textarea" class="form-control" placeholder = "Describe the product" required><br>
                    

					
                        <input type = "text" class="form-control" placeholder = "Quantity" required><br>
                    
					
                        <select class="form-control">
                            <option selected hidden>Select Payment Method</option>
                            <option value="0">Bkash</option>
                            <option value="1">Rocket</option>
                            <option value="2">Nexus</option>
                            <option value="3">Cash on deliver</option>
                        </select><br>
                    


					
                        <select class="form-control">
                            <option selected hidden>Select size</option>
                            <option value="0">Extra Large</option>
                            <option value="1">Large</option>
                            <option value="2">Medium</option>
                            <option value="3">Small</option>
                        </select><br>
                    
					
                        <select class="form-control">
                            <option selected hidden>Select Sending Branch</option>
                            <option value="0">Motijhil</option>
                            <option value="1">Jatrabari</option>
                            <option value="2">Khulna</option>
                            <option value="3">Cumilla</option>
                        </select><br>

                    <h2>Receiver Information</h2>

					
                        <input type = "text" class="form-control" placeholder = "Full Name" required><br>
                    


					
                        <input type = "text" class="form-control" placeholder = "Contact Number" required><br>
                    


                    
                        <input type = "text" class="form-control" placeholder = "Email"><br>
                    


                    
                        <input type = "text" class="form-control" placeholder = "Address" required><br>

                
                    
                        <select class="form-control">
                            <option selected hidden>Select Sending Branch</option>
                            <option value="0">Motijhil</option>
                            <option value="1">Jatrabari</option>
                            <option value="2">Khulna</option>
                            <option value="3">Cumilla</option>
                        </select><br>
                    
					<input type="submit" class="btn btn-primary" name="newdelivery" value="Confirm Delivery">
				</div>
			</table>
		</form>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php'?>