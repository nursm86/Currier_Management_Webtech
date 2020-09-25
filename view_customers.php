<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include('header.php');
    include('employeenavbar.php');
    include('employeesidebar.php');
    require_once 'controllers/CustomerController.php';
    $customers = getAllCustomers();
?>
<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    All verified Customers
    </h1><br>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">

                <select class="form-control" name="accountType" id="searchBy">
                <option value="" disabled selected>Search By</option>
                        <option value="Name" >Name</option>
                        <option value="ContactNo" >Contact</option>
                        <option value="Address" >Address</option>
                </select>
            </div>
        </div>
        <div class="col-md-8 donor">
        <input type="text" name="" id="search_text" placeholder="Search Customers " onkeyup="search()">
        </div>
    </div><br>

            <div class="row ">


            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Email Address</td>
                        <td>Contact No</td>
                        <td>Address</td>
                    </tr>
                </thead> 
                <tbody id = "suggestion">
                    <div class="col-md-8">
                    <?php
                        foreach($customers as $customer){
                            echo "<tr>";
                            echo "<td>".$customer['name']."</td>";
                            echo "<td>".$customer['email']."</td>";
                            echo "<td>".$customer['phone']."</td>";
                            echo "<td>".$customer['address']."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            </div>
</div>

<?php include 'footer.php';?>

<script>
	function get(id){
		return document.getElementById(id);
	}
	function search(){
		var text = get("search_text").value;
        var text2 = get("searchBy").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("suggestion").innerHTML = this.responseText;
			}
		};
		if(text){
			xhttp.open("GET","searchCustomer.php?key="+text+"&key2="+text2,true);
			xhttp.send();
		}
		else{
			document.getElementById("suggestion").innerHTML="";
		}
	}
</script>
