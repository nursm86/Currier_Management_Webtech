<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include ('header.php');
    include ('customernavbar.php');
    include ('customersidebar.php');
    require_once 'controllers/CustomerController.php';
    $customer = getCustomer($_SESSION["id"]);
?>

<div class="patientprofile">
    <div class="row">
        <div class="col-md-4 box">
            <div class="well">
                <img src="<?php echo $customer[0]['image']?> " class="doc-img">
                <div class="btn-group">

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editimage"><i class="fa fa-picture-o"></i></button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editpass"><i class="fa fa-key"></i></button>
                </div>
                <h3><?php echo $customer[0]['name']; ?></h3>
                <p></p>
            </div>
        </div>


        <div class="col-md-8 box">
            <h1 class="text-white bg-dark text-center">
                Personal Information

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

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editmodal"><i class="fa fa-pencil-square-o"></i></button>
        </div>
    </div>
    <!-- ---------------------------------------editimage------------------------------------------------- -->
    <div class="modal fadeInDown" id="editimage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group ">
                            <!-- <img src="../images/placeholder.png" onclick="triggerClick()" id="profileDisplay"><br> -->
                            <label for="file">Image</label>
                            <input type="file" name="file" id="file" value="<?php echo $file; ?>" class="form-control">

                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <input type="submit" class="btn btn-primary" name="imgUpdate" value="Update"></button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- -----------------------------editpass--------------------------------------------------- -->
    <div class="modal fade" id="editpass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <label for="pass">Current Password</label>
                            <input type="password" class="form-control" name="pass">
                            <span style="color:red;"><?php echo $err_pass;?></span>
                        </div>
                        <div class="form-group">
                            <label for="npass">New Password</label>
                            <input type="password" class="form-control" name="npass">
                            <span style="color:red;"><?php echo $err_npass;?></span>
                        </div>
                        <div class="form-group">
                            <label for="cPass">Confirm Password</label>
                            <input type="password" class="form-control" name="cPass">
                            <span style="color:red;"><?php echo $err_cpass;?></span>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="passUpdate">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Editmodal-------------------------------------------------------------------------------- -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $customer[0]['name']; ?>">
                            <span style="color:red;"><?php echo $err_name;?></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $customer[0]['email'];  ?>">
                            <span style="color:red;"><?php echo $err_email;?></span>
                        </div>
                        <div class="form-group">
                            <label>Phone No:</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo $customer[0]['phone'];  ?>">
                            <span style="color:red;"><?php echo $err_contact;?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="<?php echo $customer[0]['address']; ?>">
                            <span style="color:red;"><?php echo $err_address;?></span>
                        </div>
                        <div class="form-group">
                            <label>Security Que</label>
                            <input type="text" class="form-control" name="sq" value="<?php echo $customer[0]['sq']; ?>">
                            <span style="color:red;"><?php echo $err_sq;?></span>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="infoUpdate" value="Update">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<script type="text/javascript">
    $('.clockpicker').clockpicker({
        placement: 'top',
        align: 'left',
        donetext: 'Done'
    });
</script>

<?php include 'footer.php'?>