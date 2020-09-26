<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: login.php");
    }
    include ('header.php');
    include ('adminnavbar.php');
    include ('adminsidebar.php');
    require 'controllers/AdminController.php';
    $admin = getAdmin($_SESSION['id']);
?>

<div class="patientprofile">
                <div class="row">
                    <div class="col-md-4 box">
                        <div class="well">
                            <img src="<?php echo $admin[0]['image']?>" class="doc-img">
                            <div class="btn-group">
                                
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editimage"><i class="fa fa-picture-o"></i></button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editpass"><i class="fa fa-key"></i></button>
                            </div>
                            <h3><?php echo $admin[0]['userName']; ?></h3>
                            <p></p>
                        </div>
                    </div>
                
               
                    <div class="col-md-8 box">
                        <h1>Personal Information</h1>
                        <table class="table">
                            
                            <tbody>
                                <tr>
                                
                                    <td>Username</td>
                                    <td><?php echo $admin[0]['userName'];  ?></td>
                               
                                </tr>
                                <tr>
                                
                                    <td>Email</td>
                                    <td><?php echo $admin[0]['emailAddress'];  ?></td>
                               
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="modal fade" id="editimage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change Picture</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Picture</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>

                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="imgUpdate">Upload</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>

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
                            <input type="password" class="form-control" name="pass" >  
                        </div>
                        <div class="form-group">
                            <label for="npassw">New Password</label>
                            <input type="password" class="form-control" name="npass" >
                        </div>
                        <div class="form-group">
                            <label for="cPass">Confirm Password</label>
                            <input type="password" class="form-control" name="cPass">
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
            </div>
 <?php include ('footer.php');  ?>