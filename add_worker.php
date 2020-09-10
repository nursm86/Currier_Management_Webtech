<html>
    <head>
        <title>Admin Home</title>
    </head>
    <body>
            <table>
                <tr>
                    <td><img src = "logo.png" alt="Logo" width = 40px length = 40px></td>
                    <td><a href = "admin_home.php">Dashboard</a></td>
                    <td><a href = "add_branch.php">Add Branch</a></td>
                    <td><a href = "all_branch.php">All Branch</a></td>
					<td><a href = "workerlist.php">worker List</a></td>
                    <td bgcolor = "lightgreen"><a href = "add_Worker.php">Add Worker</a></td>
					<td><a href = "solve_problem.php">solve worker problem</a></td>
                    <td><a href = "index.php">Logout</a></td>
                </tr>
            </table>

            <h2>Add New Worker</h2>
		<form action="" method="post">
			<table>
				<tr>
					<td><span>Name:</span></td>
					<td><input type="text" name="name"value="" required></td>
				</tr>
				<tr>
					<td><span>UserName:</span></td>
					<td><input type="text" name="uname"value="" required></td>
				</tr>
                <tr>
					<td><span>Password:</span></td>
					<td><input type="password" name="password"value="" required></td>
				</tr>
				<tr>
					<td><span>Email:</span></td>
					<td><input type="email" name="email"value="" required></td>
				</tr>
                <tr>
                    <td><span>Designation:</span></td>
                    <td>
                        <select style="border-radius: 5px;">
                            <option selected hidden>Select a Designation</option>
                            <option value="0">Manager</option>
                            <option value="1">Worker</option>
                            <option value="2">Driver</option>
                            <option value="3">Delivery Boy</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><span>Branch:</span></td>
                    <td>
                        <select style="border-radius: 5px;">
                            <option selected hidden>Select a Branch</option>
                            <option value="0">Motijhil</option>
                            <option value="1">Jatrabari</option>
                            <option value="2">Khulna</option>
                            <option value="3">cumilla</option>
                        </select>
                    </td>
                </tr>
                <tr>
					<td><span>Salary:</span></td>
					<td><input type="text" name="salary"value="" required></td>
				</tr>
				<tr>
					<td colspan = "2" style="text-align: center;"><input type="submit" name="newemployee" value="Add New Employee"></td>
				</tr>
			</table>
		</form>
    </body>
</html>