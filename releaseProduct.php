<?php
    include ('header.php');
    include ('employeenavbar.php');
    require_once 'controllers/ProductController.php';
    $id = $_GET['id'];
    $product = getProduct($id);

    if(isset($_POST['cancel'])){
        header("Location: release_products.php");
    }
    if(isset($_POST['yes'])){
        $pid = $_GET['id'];
        $mid = $_SESSION['id'];
        $date = date('Y/m/d H:i:s');

        $sql = "UPDATE product SET Product_State= 4,Release_Date = '$date' WHERE Id = $pid";

        execute($sql);
        header("Location: release_products.php");
    }
    include ('employeesidebar.php');
?>
<div class="d-flex justify-content-center align-items-center container ">
<div class="col-md-8 box">
            <h1 class="text-white bg-dark text-center">
                product's Information

            </h1>
            <table class="table">

                <tbody>
                    <tr>

                        <td class="tdattribute">Sent to</td>
                        <td>:</td>
                        <td><?php echo $product[0]['rbName']; ?></td>

                    </tr>

                    <tr>

                        <td class="tdattribute">Reciever Name</td>
                        <td>:</td>
                        <td><?php echo $product[0]['rname']; ?></td>

                    </tr>

                    <tr>

                        <td class="tdattribute">releaser Address</td>
                        <td>:</td>
                        <td><?php echo $product[0]['raddress'];?></td>

                    </tr>
                    <tr>
                        <td class="tdattribute">Recieved Date</td>
                        <td>:</td>
                        <td><?php echo $product[0]['date']; ?></td>

                    </tr>
                </tbody>
            </table>
		<form action="" method="post">
				<div class="form-group">
					<label class="text-white bg-dark text-center">release the Product?</label>
				</div>
				<div class="form-group">
                    <input type="submit" class="btn btn-warning" value="Cancel" name="cancel" id="">
                    <td><input type="submit" class="btn btn-success" value="yes" name="yes" id="">
				</div>
		</form>
		</div>
    </div>
</div>
</div>
</div>
