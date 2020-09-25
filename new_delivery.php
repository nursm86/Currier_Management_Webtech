<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include ('header.php');
    include ('customernavbar.php');
    require_once 'controllers/ProductController.php';
    include ('customersidebar.php');
    $allBranch = getAllBranch();
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
                    
                        <select class="form-control" name = "category">
                            <option selected hidden>Select a Category</option>
                            <option value="0">Electronics</option>
                            <option value="1">Mobiles</option>
                            <option value="2">Accessories</option>
                            <option value="3">Papers</option>
                        </select><br>
                    
                    
                        <input type = "textarea" class="form-control" name = "description" placeholder = "Describe the product" required><br>
                    

					
                        <input type = "text" class="form-control" name = "quantity" placeholder = "Quantity" required><br>
                    
					
                        <select class="form-control" name="pmethod">
                            <option selected hidden>Select Payment Method</option>
                            <option value="0">Bkash</option>
                            <option value="1">Rocket</option>
                            <option value="2">Nexus</option>
                            <option value="3">Cash on deliver</option>
                        </select><br>
					
                        <select class="form-control" name = "size">
                            <option selected hidden>Select size</option>
                            <option value="0">Extra Large</option>
                            <option value="1">Large</option>
                            <option value="2">Medium</option>
                            <option value="3">Small</option>
                        </select><br>
                    
					
                        <select class="form-control" name = "sbid">
                            <option selected hidden>Select Sending Branch</option>
                            <?php
                                foreach($allBranch as $branch){
                                    echo "<option value = '".$branch['Id']."'>".$branch["Branch_Name"]."</option>";
                                }
                            ?>
                        </select><br>

                    <h2>Receiver Information</h2>

					
                        <input type = "text" class="form-control" name = "rname"; placeholder = "Full Name" required><br>
                    


					
                        <input type = "text" class="form-control" name = "rcontact" placeholder = "Contact Number" required><br>
                    


                    
                        <input type = "text" class="form-control" name = "email" placeholder = "Email"><br>
                    


                    
                        <input type = "text" class="form-control" name = "raddress" placeholder = "Address" required><br>

                
                    
                        <select class="form-control" name = "rbid">
                            <option selected hidden>Select Receiving Branch</option>
                            <?php
                                foreach($allBranch as $branch){
                                    echo "<option value = '".$branch['Id']."'>".$branch["Branch_Name"]."</option>";
                                }
                            ?>
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