<?php //include_once 'helpers/init.php' ?>
<?php
    // Code for store user detail in database
    // if(isset($_POST['submit'])) {
    //      $patient_name = $_POST['patient_name'];
    //     $patient_contact = $_POST['patient_contact'];
    //     $patient_dob = $_POST['patient_dob'];
    //     $department_name = $_POST['department_name'];
    //     $doctor_name = $_POST['doctor_name'];
    //     $appointment_date = $_POST['appointment_date'];
    //     $appointment_time = $_POST['appointment_time'];
        
        
        
    //     $q1 = "select * from patient_table where patient_contact = '$patient_contact' ";
        
        
        
    //     $fire1 = query($q1);
        
    //     $num = mysqli_num_rows($fire1);
        
    //     if($num == 0)
    //     {
    //         echo "<h2>You Are Not Registered</h2>";
    //     }
    //     else
    //     {
    //          echo "<script>alert('your appointment has been booked.');</script>";
            
    //         $q2 = "insert into `patient_appointment1`(patient_name , patient_contact , patient_dob , department_name , doctor_name , appointment_date , appointment_time) values('$patient_name' , '$patient_contact' , '$patient_dob' , '$department_name' , '$doctor_name' , '$appointment_date' , '$appointment_time') ";
            
    //         $fire2 = query($q2);
            
    //     }
        
           
    // }
       
        
    
    
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

<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Appoinments</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Report</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Feaures
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
        
        <li class="nav-item">
        <a class="nav-link" href="login.php">Sign in</a>
      </li>
        
        <li class="nav-item">
        <a class="nav-link btn btn-primary btn-green" href="patient_registration.php">Sign up</a>
      </li>
      
    </ul>
    
  </div>
                </div>
</nav>
    </div>
    
    <div class="row banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 banner-text">
            <h2>Practice Management is now simple</h2>
            <p>We know you work really hard to grow your practice. kulcare Practice Management Solution is a perfect tool for all your needs. We take care of your workflow, billing & network while you focus to deliver a great patient experience. All this and more, at Zero Cost.</p>
        </div>
        <div class="col-md-6 banner-image">
            <img src="assets/images/banner-img.png" class="img-fluid">
        </div>
            </div>
        </div>
        
    </div><!-- end of row banner -->
    
    <div class="row about-us">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                     <h2>About Us</h2>
        <p>We know you work really hard to grow your practice. kulcare Practice Management Solution is a perfect tool for all your needs. We take care of your workflow, billing & network while you focus to deliver a great patient experience. All this and more, at Zero Cost</p>
                </div>
               
            </div>
        </div>
        
    </div><!-- end of row about us -->
    
    <div class="row appointment-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Book Your Appointment Here</h2>
                    <form class="row" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-group col-md-3">
                            <label>Name</label>
                            <input type="text" class="form-control" name="patient_name">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Contact No</label>
                            <input type="text" class="form-control" name="patient_contact">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Date Of Birth</label>
                            <input type="date" class="form-control" name="patient_dob" />
                        </div>
                        <div class="form-group col-md-3">
                            <label>Choose your Dept</label>
                            <select class="form-control" name="department_name">
                                <option value="eye">eye</option>
                                <option value="ortho">ortho</option>
                                <option value="gastro">gastro</option>
                                <option value="general">general</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Choose your doctor</label>
                            <select class="form-control" name="doctor_name">
                                <option value="dr.eye">dr.eye</option>
                                <option value="dr.ortho">dr.ortho</option>
                                <option value="dr.gastro">dr.gastro</option>
                                <option value="dr.general">dr.general</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Appoint Date </label>
                            <input type="date" class="form-control" name="appointment_date" />
                        </div>
                        <div class="form-group col-md-3">
                            <label>Appointment Time</label>
                            <input type="time" class="form-control" name="appointment_time" />
                        </div>
                        <div class="form-group col-md-3">
                            
                        </div>
                        <button type="submit" class="btn btn-primary btn-submit" name="submit">Submit</button>
                        <button type="submit" class="btn btn-primary btn-submit" name="submit">Submit</button>
                       
                        
                    </form>
               
            </div>
        </div>
    </div><!-- end of ro appointment -->
</div><!-- end of container fluid -->


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>