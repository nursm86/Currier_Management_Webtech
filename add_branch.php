<html>
    <head>
        <title>Admin Home</title>
    </head>
    <body>
            <table>
                <tr>
                    <td><img src = "logo.png" alt="Logo" width = 40px length = 40px></td>
                    <td><a href = "admin_home.php">Dashboard</a></td>
                    <td bgcolor = "lightgreen"><a href = "add_branch.php">Add Branch</a></td>
                    <td><a href = "all_branch.php">All Branch</a></td>
					<td><a href = "workerlist.php">worker List</a></td>
                    <td><a href = "add_Worker.php">Add Worker</a></td>
					<td><a href = "solve_problem.php">solve worker problem</a></td>
                    <td><a href = "index.php">Logout</a></td>
                </tr>
            </table>

            <h2>Add New Worker</h2>
		<form action="" method="post">
			<table>
				<tr>
					<td><span>Branch Name:</span></td>
					<td><input type="text" name="B_name"value="" required></td>
				</tr>
				<tr>
					<td><span>Address:</span></td>
					<td><input type="text" name="B_address"value="" required></td>
				</tr>
				<tr>
					<td colspan = "2" style="text-align: center;"><input type="submit" name="newebranch" value="Add New Branch"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
    </body>
</html>