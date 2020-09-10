<!DOCTYPE html>
<html>
    <head>
	    <title>Form Table</title>
    </head>
    <body>
		<form action = "submitted.php" method="get" >
			<table width="100%" border="1">
				<tr height = "100px">
				    <td colspan="3" align="center">PERSON PROFILE</td>
				</tr>
				<tr>
				    <td width="20%">Name</td>
					<td><input type="text" name="name" value="" placeholder="">
					</td>
					<td width="15%"></td>
				</tr>
				<tr>
				    <td width="20%">Email</td>
					<td>
						<input type="email" name="email" value="" placeholder="">
					</td>
					<td width="15%"></td>
				</tr>
				<tr>
				    <td width="20%">Gender</td>
					<td>
					    <input type="radio" name="gender" value="" > Male 
				        <input type="radio" name="gender" value="" > Female
				        <input type="radio" name="gender" value="" > Other
				    </td>
					<td width="15%"></td>
				</tr>
				<tr>
				    <td width="20%">Date of Birth</td>
					<td>
					    <input type="text" name="day" size="2">/
					    <input type="text" name="month" size="2">/
					    <input type="text" name="year" size="4">(dd/mm/yyyy)
					</td>
					<td width="15%"></td>
				</tr>
				<tr>
				    <td width="20%">Blood Group</td>
					<td>
					    <select>
				            <option value="">A+</option>
				            <option value="">A-</option>
				            <option value="">B+</option>
				            <option value="">B-</option>
							<option value="">O+</option>
				            <option value="">O-</option>
				            <option value="">AB+</option>
				            <option value="">AB-</option>
			            </select>
					</td>
					<td width="15%"></td>
				</tr>
				<tr>
				    <td width="20%">Degree</td>
					<td>
					    <input type="checkbox" name=""> SSC
					    <input type="checkbox" name=""> HSC
					    <input type="checkbox" name=""> BSc.
					    <input type="checkbox" name=""> MSc.
					</td>
					<td width="15%"></td>
				</tr>
				<tr>
				    <td width="20%">Photo</td>
					<td colspan="2">
						<input type="file" name="">
					</td>
				</tr>
				<tr width="100%" height="20px">
				    <td colspan="3"></td>
				</tr>
				<tr>
				    <td colspan="3" align="right">
			            <input type="submit" name="submit"> 
			            <input type="reset" name="" value="Reset"> 
					</td>
				</tr>
			</table>
		</form>
    </body>
</html>

