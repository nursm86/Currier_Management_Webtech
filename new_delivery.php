<html>
    <head>
        <title>New Delivery</title>
    </head>
    <body>
            <table>
                <tr>
                    <td><img src = "logo.png" alt="Logo" width = 40px length = 40px></td>
                    <td><a href = "customer_home.php">Dashboard</a></td>
                    <td><a href = "c_service_history.php">Service History</a></td>
                    <td bgcolor = "lightgreen"><a href = "new_delivery.php">New Delivery</a></td>
					<td><a href = "track_products.php">Track Products</a></td>
                    <td><a href = "c_profile.php">Edit profile</a></td>
					<td><a href = "c_helpline.php">Helpline</a></td>
                    <td>Delete Account</td>
                    <td><a href = "index.php">Logout</a></td>
                </tr>
            </table>

            <span><strong>Deliver Form</strong></span><br><br>

            <span><strong> Product Information</strong></span><br>

            <form action="" method="post">
			<table>
                <tr>
                    <td>
                        <select style="border-radius: 5px;">
                            <option selected hidden>Select a Category</option>
                            <option value="0">Manager</option>
                            <option value="1">Worker</option>
                            <option value="2">Driver</option>
                            <option value="3">Delivery Boy</option>
                        </select>
                    </td>
                    <td>
                        <input type = "textarea" placeholder = "Describe the product" required>
                    </td>
                </tr>

				<tr>
					<td>
                        <input type = "text" placeholder = "Quantity" required>
                    </td>
					<td>
                        <select style="border-radius: 5px;">
                            <option selected hidden>Select Payment Method</option>
                            <option value="0">Bkash</option>
                            <option value="1">Rocket</option>
                            <option value="2">Nexus</option>
                            <option value="3">Cash on deliver</option>
                        </select>
                    </td>
				</tr>

				<tr>
					<td>
                        <select style="border-radius: 5px;">
                            <option selected hidden>Select size</option>
                            <option value="0">Extra Large</option>
                            <option value="1">Large</option>
                            <option value="2">Medium</option>
                            <option value="3">Small</option>
                        </select>
                    </td>
					<td>
                        <select style="border-radius: 5px;">
                            <option selected hidden>Select Sending Branch</option>
                            <option value="0">Motijhil</option>
                            <option value="1">Jatrabari</option>
                            <option value="2">Khulna</option>
                            <option value="3">Cumilla</option>
                        </select>
                    </td>
				</tr>

                <tr>
                </tr>
                <tr>
                    <td bgcolor = "skyblue"><span><strong> Receiver Information</strong></span></td>
                </tr>
                <tr>
                </tr>
                <tr>
					<td>
                        <input type = "text" placeholder = "Full Name" required>
                    </td>
				</tr>

				<tr>
					<td>
                        <input type = "text" placeholder = "Contact Number" required>
                    </td>
				</tr>

                <tr>
                    <td>
                        <input type = "text" placeholder = "Email">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type = "text" placeholder = "Address" required>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <select style="border-radius: 5px;">
                            <option selected hidden>Select Sending Branch</option>
                            <option value="0">Motijhil</option>
                            <option value="1">Jatrabari</option>
                            <option value="2">Khulna</option>
                            <option value="3">Cumilla</option>
                        </select>
                    </td>
				</tr>
				<tr>
					<td colspan = "2" style="text-align: center;"><input type="submit" name="newdelivery" value="Confirm Delivery"></td>
				</tr>
			</table>
		</form>

    </body>
</html>