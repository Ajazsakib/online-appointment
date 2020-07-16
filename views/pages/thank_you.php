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
    <?php include_once(VIEW_PATH.'/elements/header.php'); ?>
    
    <h1 class="text-center">Form Registered</h1>
    
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
