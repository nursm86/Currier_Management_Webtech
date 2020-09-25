<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include ('header.php');
    include ('customernavbar.php');
    include ('customersidebar.php');
    require_once 'controllers/ProductController.php';
    $releasedProducts = getReleasedProducts($_SESSION['id']);
    
?>

<h1 class="text-white bg-dark text-center">
    All released Products
    </h1><br>

    <div class="row">
        <div class="col-md-2">
            <div class="form-group">

                <select class="form-control" name="accountType" id="searchBy">
                <option value="" disabled selected>Search By</option>
                        <option value="ReceiverName" >Name</option>
                        <option value="ReceiverContact" >Contact</option>
                        <option value="ReceiverAddress" >Address</option>
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
                    <td>Sending Branch</td>
                    <td>Receiving Branch</td>
                    <td>Sending Date</td>
                    <td>Reciever Name</td>
                    <td>Address</td>
                    <td>Released Date</td>
                </tr>
                </thead>
                <tbody id="suggestion">
                    <div class="col-md-8">
                <?php
                    foreach($releasedProducts as $releasedProduct){
                        echo "<tr>";
                        echo "<td>".$releasedProduct['sbName']."</td>";
                        echo "<td>".$releasedProduct['rbName']."</td>";
                        echo "<td>".$releasedProduct['date']."</td>";
                        echo "<td>".$releasedProduct['rname']."</td>";
                        echo "<td>".$releasedProduct['raddress']."</td>";
                        echo "<td>".$releasedProduct['rdate']."</td>";
                        echo "</tr>";
                    }
                
                ?>
                </tbody>
            </table>
            </div>
            </div>

<?php include 'footer.php'?>

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
			xhttp.open("GET","searchChistory.php?key="+text+"&key2="+text2,true);
			xhttp.send();
		}
		else{
			document.getElementById("suggestion").innerHTML="";
		}
	}
</script>