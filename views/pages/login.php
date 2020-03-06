<?php include_once 'helpers/init.php' ?>
<?php 
  
    if(isset($_POST['submit']))
    {
        $patient_login_contact = $_POST['patient_login_contact'];
        $patient_login_password = $_POST['patient_login_password'];
        
        $q1 = "select * from patient_table where patient_contact = '$patient_login_contact' and patient_password = '$patient_login_password' ";
        
        $fire1 = query($q1);
        
        $num = mysqli_num_rows($fire1);
        
        if($num == 0)
        {
            echo "<h2>You Are Not Registered</h2>";
        }
        else
        {
            header("location:user-dashboard/user-dashboard.php");
        }
    }
    // this is dummy text
?>

<?php 
    
     if(isset($_POST['submit']))
    {
        $doctor_login_contact = $_POST['doctor_login_contact'];
        $doctor_login_password = $_POST['doctor_login_password'];
        
        $q1 = "select * from  doctor_registration where doctor_contact = '$doctor_login_contact' and docto_password = '$doctor_login_password' ";
        
        $fire1 = query($q1);
        
        $num = mysqli_num_rows($fire1);
        
        if($num == 0)
        {
            echo "<h2>You Are Not Registered</h2>";
        }
        else
        {
            header("location:doctor-dashboard/doctor-dashboard.php");
        }
    }

?>

<?php

  if(isset($_POST['submit']))
    {
        $admin_login_dob = $_POST['admin_login_dob'];
        $admin_login_password = $_POST['admin_login_password'];
      
        $q1 = "select * from admin where admin_dob = '$admin_login_dob' and admin_password = '$admin_login_password' ";
      
        $fire1 = query($q1);
      
        $num = mysqli_num_rows($fire1);
      
      if($num == 0)
        {
            echo "<script>alert('You are not registered');</script>";
        }
        else
        {
            header("location:admin-dashboard/admin-dashboard.php");
        }
        
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Website</title>
    <link rel="stylesheet" href="assets/css/app.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

<?// php subview('header.php'); ?>

    <div class="container-fluid">
        <div class="row login_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h2 class="text-center">Login</h2>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Patient</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Doctor</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Admin</a>
                              </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">      <form action="/user-dashboard" method="POST">
                                <div class="form-group">
                                    <label>Enter Register No</label>
                                    <input type="text" class="form-control" name="patient_login_contact">
                                </div>
                                <div class="form-group">
                                    <label>Enter Password</label>
                                    <input type="password" class="form-control" name="patient_login_password">
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Login</button>
                              </form>
                            </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="/doctor-dashboard" method="POST">
                                <div class="form-group">
                                    <label>Doctor's Phone No</label>
                                    <input type="text" class="form-control" name="doctor_login_contact">
                                </div>
                                <div class="form-group">
                                    <label>Enter Password</label>
                                    <input type="password" class="form-control" name="doctor_login_password">
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Login</button>
                              </form>  
                          </div>
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <form action="/admin-dashboard" method="POST">
                                <div class="form-group">
                                    <label>Enter DOB</label>
                                    <input type="text" class="form-control" name="admin_login_dob">
                                </div>
                                <div class="form-group">
                                    <label>Enter Password</label>
                                    <input type="password" class="form-control" name="admin_login_password">
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Login</button>
                              </form>  
                          </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div><!-- end of login bg -->
    </div><!-- end of container-fluid -->
  
<?// php subview('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>