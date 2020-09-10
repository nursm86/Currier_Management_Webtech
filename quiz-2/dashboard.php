<?php include 'admin_header.php';?>
<!--dashboard starts -->
<div>
	<table  align="center">
		<tr>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>
					100
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>
					100
				</span>
				</div>
			</td>
			<td>
				<div class="card">
				<span class="text-white"> Total Products <br>
					100
				</span>
				</div>
			</td>
		</tr>
	</table>
</div>
<div class="center">
	<input type="text" placeholder="type your search ..." id="search_text" onkeyup="search()" class="form-control">
</div>
<table class="table table-striped center" id="suggestion">

	
</table>

<div class="center">
	<h3 class="text">Recent Sales</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Sales Qty</th>
			<th>Sales Date</th>
		</thead>
		<tbody>
			<td>1</td>
			<td>Onion</td>
			<td>100</td>
			<td>10</td>
			<td>10.2.2020</td>
		</tbody>
	</table>
</div>

<script>
	function get(id){
		return document.getElementById(id);
	}
	function fill_suggest(td){
		get("search_text").value= td.innerHTML;
		
	}
	function search(){
		var text = get("search_text").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("suggestion").innerHTML = this.responseText;
			}
		};
		if(text){
			xhttp.open("GET","searchcategory.php?key="+text,true);
			xhttp.send();
		}
		else{
			document.getElementById("suggestion").innerHTML="";
		}
		
	}
</script>
<!--dashboard ends -->
<?php include 'admin_footer.php';?>