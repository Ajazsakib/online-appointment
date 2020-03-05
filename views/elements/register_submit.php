<?php

echo '<pre>'; print_r($_POST['patient_name']); debug('hello'); die;
if(isset($_POST['submit'])) {
  $patient_name = $_POST['patient_name'];
  $username = $_POST['username'];
  $patient_password = $_POST['patient_password'];
  $patient_email = $_POST['patient_email'];
  $patient_address = $_POST['patient_address'];
  $patient_dob = $_POST['patient_dob'];
  $patient_contact = $_POST['patient_contact'];
  
  $q1 = "select * from patient_table where patient_contact = '$patient_contact' ";
  $fire1 = query($q1);
  $num = mysqli_num_rows($fire1);
    
  if($num > 0) {
    echo "This Mobile Number Registered";
  } else {
    $q = "insert into `patient_table`(patient_name , patient_password , patient_email , patient_dob , patient_address , username  , patient_contact) values('$patient_name' , '$patient_password' , '$patient_email' , '$patient_dob' , '$patient_address' , '$username' , $patient_contact);";
    
    $fire = query($q);
    if($fire) {
      echo "Thank you for registration with us";
    }
  }
}