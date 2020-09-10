<html>
	<head><head>
	
	<body>
		
		<h2 style= "color:red""font-weight: bold;">Donor Information</h2>
		
		First Name : <?php echo $_POST["first_name"];?> <br>
		Last name:  <?php echo $_POST["last_name"];?> <br>
		Company:  <?php echo $_POST["company"];?> <br>
		Address 1:  <?php echo $_POST["address_1"];?> <br>
		Address 2:  <?php echo $_POST["address_2"];?> <br>
		City:  <?php echo $_POST["city"];?> <br>
		State:  <?php echo $_POST["state"];?> <br>
		Zip Code:  <?php echo $_POST["zip_code"];?> <br>
		Country:  <?php echo $_POST["country"];?> <br>
		Phone:  <?php echo $_POST["phone"];?> <br>
		Fax:  <?php echo $_POST["fax"];?> <br>
		Email:  <?php echo $_POST["email"];?> <br>
		
		Donation Amount:  
		<?php 
		if ($_POST["amount"] != "Other"){
			echo $_POST["amount"];
		}
		else{
			echo $_POST["other_amount"];
		}
		?> <br>
		
		<?php 
			if($_POST["recurr_dntion"] == "On"){
				echo "I am interested in giving on a regular basis";
				echo "Monthly credit card $: ".$_POST["credit"]."For".$_POST["months"]."Months";
			}
		?> <br>
		
		<h2 style="color:red""font-weight: bold;">Honorarioum ands Memorial Donation Information</h2>
		
		I would like to make this donation: <?php echo $_POST["option1"];?> <br>
		
		Name:<?php echo $_POST["dntion_name"];?> <br>
		Acknowledge Donation to:<?php echo $_POST["ack_dntion_to"];?> <br>
		Adress:<?php echo $_POST["address"];?> <br>
		City:<?php echo $_POST["dntion_city"];?> <br>
		State:  <?php echo $_POST["dntion_stat"];?> <br>
		Zip Code:  <?php echo $_POST["dntion_zip"];?> <br>
		
		<h3 style="color:red""font-weight: bold;">Additional Information</h3>
		
		Name:<?php echo $_POST["adtion_name"];?> <br>
		
		I would like my gift to ramin anonymous:
		<?php
			foreach($_POST["contact"] as $cont){
				echo $cont."<br>";
			}
		?>
		
		Feed Back:<?php echo $_POST["feedback"];?> <br>
		
		How to contact:
		<?php
			foreach($_POST["contact2"] as $cont){
				echo $cont."<br>";
			}
		?><br>
		
		I would like to receive newsletters and information about special events by:
		
		<?php
			foreach($_POST["newsletters"] as $cont){
				echo $cont."<br>";
			}
		?><br>
		
		<?php
			echo $_POST["volunteering"];
		?><br>
		
		
		
		
		
		
		
	</body>
</html>