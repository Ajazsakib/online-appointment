<?php

namespace Mvc\Controller;

class AppController {
	public function home() {
		include PAGE_PATH.'/home.php';
		die;
	}

	public function register() {
		include PAGE_PATH.'/register.php';
		die;
	}

	public function about() {
		include PAGE_PATH . '/about_us.php';
		die;
	}

	public function form_validation($data) {
        if(empty($data)) return;
            $patient_name_err = $username_err = $patient_password_err = $patient_contact_err = "";
            $patient_name = $patient_password = $username = "";
//        $patient_name = $data['patient_name'];
        $username = $data['username'];
//        $patient_password = $data['patient_password'];
        $patient_email = $data['patient_email'];
        $patient_dob = $data['patient_dob'];
        $patient_address = $data['patient_address'];
        $patient_contact = $data['patient_contact'];
        
        if(empty($data['patient_name'])) {
            $patient_name_err = "Patient name Missing";
            echo $patient_name_err;
            return false;
             include PAGE_PATH.'/thank_you.php';
           
        }else {
            $patient_name = $data['patient_name'];
        }
        if(empty($data['username'])) {
            $username_err = "Username Missing";
            echo $username_err;
            return false;
           
        }else {
            $username = $data['username'];
        }
        if(empty($data['patient_password'])) {
            $patient_password_err = "Password Missing";
            echo $patient_password_err;
            return false;
           
        }else {
            $patient_password = $data['patient_password'];
        }
        
        $q1 = "select * from patient_table where patient_contact = '$patient_contact' ";
        $fire1 = query($q1);
        $num = mysqli_num_rows($fire1);
        if($num > 0){
            echo "<h2>You Are Not Registered</h2>";
        }
        else{
             $q2 = "insert into `patient_table`(patient_name , patient_password , patient_email , patient_dob , patient_address , username , patient_contact) values('$patient_name' , '$patient_password' , '$patient_email' , '$patient_dob' , '$patient_address' , '$username' , '$patient_contact'); ";
            $fire2 = query($q2);

             include PAGE_PATH.'/thank_you.php';
        }
        
		die;
	}
    
    public function login() {
		include PAGE_PATH.'/login.php';
		die;
	}
    public function user_dashboard() {
		include PAGE_PATH.'/user_dashboard.php';
		die;
	}
     public function doctor_dashboard() {
		include PAGE_PATH.'/doctor_dashboard.php';
		die;
	}
     public function admin_dashboard() {
		include PAGE_PATH.'/admin_dashboard.php';
		die;
	}
    
   
}
