<?php
    include ('header.php');
    include ('employeenavbar.php');
    require_once 'controllers/CustomerController.php';
    $id = $_GET['id'];
    $customer = getCustomer($id);

    if(isset($_POST['cancel'])){
        header("Location: verify_customers.php");
    }
    if(isset($_POST['no'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM customers WHERE userId= $id";
        execute($sql);
        $sql = "DELETE FROM users WHERE id= $id";
        execute($sql);
        header("Location: verify_customers.php");
    }
    if(isset($_POST['yes'])){
        $sql = "UPDATE `users` SET `isValid`=TRUE WHERE id = $id";
        execute($sql);
        header("Location: verify_customers.php");
    }
    include ('employeesidebar.php');
?>
<div class="d-flex justify-content-center align-items-center container ">
<div class="col-md-8 box">
            <h1 class="text-white bg-dark text-center">
                Customer's Information

            </h1>
            <table class="table">

                <tbody>
                    <tr>

                        <td class="tdattribute">Name</td>
                        <td>:</td>
                        <td><?php echo $customer[0]['name']; ?></td>

                    </tr>

                    <tr>

                        <td class="tdattribute">Email</td>
                        <td>:</td>
                        <td><?php echo $customer[0]['email']; ?></td>

                    </tr>

                    <tr>

                        <td class="tdattribute">Phone Number</td>
                        <td>:</td>
                        <td><?php echo $customer[0]['phone'];?></td>

                    </tr>
                    <tr>
                        <td class="tdattribute">Address</td>
                        <td>:</td>
                        <td><?php echo $customer[0]['address']; ?></td>

                    </tr>
                </tbody>
            </table>
		<form action="" method="post">
				<div class="form-group">
					<label class="text-white bg-dark text-center">Verify The customer?</label>
				</div>
				<div class="form-group">
                    <input type="submit" class="btn btn-warning" value="Cancel" name="cancel" id="">
                    <input type="submit" class="btn btn-danger" value="No" name="no" id="">
                    <td><input type="submit" class="btn btn-success" value="yes" name="yes" id="">
				</div>
		</form>
		</div>
    </div>
</div>
</div>
</div>
