<?php
	session_start();
	if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include ('header.php');
    include ('customernavbar.php');
    include ('customersidebar.php');
    require_once 'controllers/BranchController.php';
    $allBranch = getAllBranch();
?>
<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Help Line(Select Branch to get managers phone no)
            </h1>
		<form action="" method="post">
				<div class="form-group">
                <select class="form-control"  id="sbid" onchange="fill()">
                    <option selected hidden>Select Branch</option>
                            <?php
                                foreach($allBranch as $branch){
                                    echo "<option value = '".$branch['Id']."'>".$branch["Branch_Name"]."</option>";
                                }
                            ?>
                        </select>
				</div>
				<div class="form-group">
					<label>Phone No</label>
					<input type="text" class="form-control" id="phone" value="" required>
				</div>
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
	function fill(){
		var text = get("sbid").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("phone").value = this.responseText;
			}
		};
		if(text){
			xhttp.open("GET","getPhone.php?key="+text,true);
			xhttp.send();
		}
		else{
			document.getElementById("phone").value="";
		}
	}
</script>