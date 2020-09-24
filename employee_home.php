<?php
    session_start();
    include('header.php');
    include('employeenavbar.php');
    include('employeesidebar.php');
?>

<div class="patientprofile">
    <div class="row">
        <div class="col-md-4 box">
            <div class="well">
                <img src="<?php $image = "system_images/neymar.jpg"; echo $image; ?> " class="doc-img">
                <div class="btn-group">

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editimage"><i class="fa fa-picture-o"></i></button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editpass"><i class="fa fa-key"></i></button>
                </div>
                <h3><?php echo "Nur Islam"; ?></h3>
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

                        <td class="tdattribute">First Name</td>
                        <td>:</td>
                        <td><?php echo "Md.Nur"; ?></td>

                    </tr>
                    <tr>

                        <td class="tdattribute">Last Name</td>
                        <td>:</td>
                        <td><?php echo "Islam"; ?></td>

                    </tr>

                    <tr>

                        <td class="tdattribute">Date of Birth</td>
                        <td>:</td>
                        <td><?php echo "12/04/1998"; ?></td>

                    </tr>
                    <tr>

                        <td class="tdattribute">Blood Group</td>
                        <td>:</td>
                        <td><?php echo "A+"; ?></td>

                    </tr>
                    <tr>

                        <td class="tdattribute">Email</td>
                        <td>:</td>
                        <td><?php echo "nursm86@gmail.com"; ?></td>

                    </tr>

                    <tr>

                        <td class="tdattribute">Phone Number</td>
                        <td>:</td>
                        <td><?php echo "01622114901"; ?></td>

                    </tr>
                    <tr>

                        <td class="tdattribute">Department</td>
                        <td>:</td>
                        <td><?php echo "CSE"; ?></td>

                    </tr>
<!--                     <tr>

                        <td class="tdattribute">Qualification</td>
                        <td>:</td>
                        <td><?php echo "MSC"; ?></td>

                    </tr> -->
                    <tr>

                        <td class="tdattribute">Hospital</td>
                        <td>:</td>
                        <td><?php "Kola"; ?></td>

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
                            <label for="password">Current Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label for="nPassword">New Password</label>
                            <input type="password" class="form-control" name="nPassword">
                        </div>
                        <div class="form-group">
                            <label for="cPassword">Confirm Password</label>
                            <input type="password" class="form-control" name="cPassword">
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
                            <label>First Name</label>
                            <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>">
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control" name="dob" value="<?php echo $dob; ?>">
                        </div>
                        <div class="form-group">
                            <label>Blood Group</label>
                            <select class="form-control" name="bGroup">
                                <option value="a+" <?php if ($bGroup == "a+") echo "selected"; ?>>A+</option>
                                <option value="a-" <?php if ($bGroup == "a-") echo "selected"; ?>>A-</option>
                                <option value="b+" <?php if ($bGroup == "b+") echo "selected"; ?>>B+</option>
                                <option value="b-" <?php if ($bGroup == "b-") echo "selected"; ?>>B-</option>
                                <option value="ab+" <?php if ($bGroup == "ab+") echo "selected"; ?>>AB+</option>
                                <option value="ab-" <?php if ($bGroup == "ab-") echo "selected"; ?>>AB-</option>
                                <option value="o+" <?php if ($bGroup == "o+") echo "selected"; ?>>O+</option>
                                <option value="o-" <?php if ($bGroup == "o-") echo "selected"; ?>>O-</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="pNumber" value="<?php echo $pNumber; ?>">
                        </div>
                        <div class="form-group">
                            <label>Department</label>
                            <!-- <input type="text" class="form-control" name="dept" value="<?php echo $dept; ?>"> -->
                            <select class="form-control" name="dept">
                                <option value="DEPARTMENT OF EYE" <?php if ($dept == "DEPARTMENT OF EYE") echo "selected"; ?>>DEPARTMENT OF EYE</option>
                                <option value="DEPARTMENT OF CARDIOLOGY" <?php if ($dept == "DEPARTMENT OF CARDIOLOGY") echo "selected"; ?>>DEPARTMENT OF CARDIOLOGY</option>
                                <option value="DEPARTMENT OF SURGERY" <?php if ($dept == "DEPARTMENT OF SURGERY") echo "selected"; ?>>DEPARTMENT OF SURGERY</option>
                                <option value="DEPARTMENT OF CARDIO THORACIC" <?php if ($dept == "DEPARTMENT OF CARDIO THORACIC") echo "selected"; ?>>DEPARTMENT OF CARDIO THORACIC</option>
                                <option value="DEPARTMENT OF ANAESTHETIST" <?php if ($dept == "DEPARTMENT OF ANAESTHETIST") echo "selected"; ?>>DEPARTMENT OF ANAESTHETIST</option>
                                <option value="DEPARTMENT OF GENERAL MEDICINE & HEART" <?php if ($dept == "DEPARTMENT OF GENERAL MEDICINE & HEART") echo "selected"; ?>>DEPARTMENT OF GENERAL MEDICINE & HEART</option>
                                <option value="DEPARTMENT OF SKIN" <?php if ($dept == "DEPARTMENT OF SKIN") echo "selected"; ?>>DEPARTMENT OF SKIN</option>
                                <option value="DEPARTMENT OF DENTAL" <?php if ($dept == "DEPARTMENT OF DENTAL") echo "selected"; ?>>DEPARTMENT OF DENTAL</option>
                                <option value="DEPARTMENT OF ORTHOPAEDICS" <?php if ($dept == "DEPARTMENT OF ORTHOPAEDICS") echo "selected"; ?>>DEPARTMENT OF ORTHOPAEDICS</option>
                                <option value="DEPARTMENT OF NEPHROLOGY" <?php if ($dept == "DEPARTMENT OF NEPHROLOGY") echo "selected"; ?>>DEPARTMENT OF NEPHROLOGY</option>
                                <option value="DEPARTMENT OF NEUROLOGY" <?php if ($dept == "DEPARTMENT OF NEUROLOGY") echo "selected"; ?>>DEPARTMENT OF NEUROLOGY</option>
                                <option value="DEPARTMENT OF GYNAECOLOGY" <?php if ($dept == "DEPARTMENT OF GYNAECOLOGY") echo "selected"; ?>>DEPARTMENT OF GYNAECOLOGY</option>
                                <option value="DEPARTMENT OF GASTROENTEROLOGY" <?php if ($dept == "DEPARTMENT OF GASTROENTEROLOGY") echo "selected"; ?>>DEPARTMENT OF GASTROENTEROLOGY</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label>Qualification</label>
                            <input type="text" class="form-control" name="qualification" value="<?php echo $qualification; ?>">
                        </div> -->
                        <div class="form-group">
                            <label>Hospital</label>
                            <!-- <input type="text" class="form-control" name="hospital" value="<?php echo $hospital; ?>"> -->
                                <select class="form-control" name="hospital">
                                <option value="Square Hospital" <?php if ($hospital == "Square Hospital") echo "selected"; ?>>Square Hospital</option>
                                <option value="Apollo Hospital" <?php if ($hospital == "Apollo Hospital") echo "selected"; ?>>Apollo Hospital</option>
                                <option value="Labaid Hospital" <?php if ($hospital == "Labaid Hospital") echo "selected"; ?>>Labaid Hospital</option>
                                <option value="Ibn Sina Hospital" <?php if ($hospital == "Ibn Sina Hospital") echo "selected"; ?>>Ibn Sina Hospital</option>
                                <option value="Popular Hospital" <?php if ($hospital == "Popular Hospital") echo "selected"; ?>>Popular Hospital</option>
                                <option value="Birdem Hospital" <?php if ($hospital == "Birdem Hospital") echo "selected"; ?>>Birdem Hospital</option>
                                <option value="BSMMU Hospital" <?php if ($hospital == "BSMMU Hospital") echo "selected"; ?>>BSMMU Hospital</option>
                                <option value="Bangladesh Eye Hospital" <?php if ($hospital == "Bangladesh Eye Hospital") echo "selected"; ?>>Bangladesh Eye Hospital</option>
                                <option value="Basundhura Hospital" <?php if ($hospital == "Basundhura Hospital") echo "selected"; ?>>Basundhura Hospital</option>
                                <option value="Dhaka Medical College" <?php if ($hospital == "Dhaka Medical College") echo "selected"; ?>>Dhaka Medical College</option>
                            </select>
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

<?php include 'footer.php'; ?>