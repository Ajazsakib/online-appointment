<?php include_once 'helpers/init.php' ?>
<?php 
  
    if(isset($_POST['submit']))
    {
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
        
    
        
        if($num > 0)
        {
            echo "This Mobile Number Registered";
        }
        else
        {
             $q = "insert into `patient_table`(patient_name , patient_password , patient_email , patient_dob , patient_address , username  , patient_contact) values('$patient_name' , '$patient_password' , '$patient_email' , '$patient_dob' , '$patient_address' , '$username' , $patient_contact);";
        
        
                $fire = query($q);

                if($fire)
                {
                    echo "Data Has been submitted";
                }
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/app.css" type="text/css" />

</head>

<body>

<?php subview('header.php'); ?>


<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="form-group">
                        <label>Patient Name</label>
                        <input type="text" class="form-control" name="patient_name" />
                    </div>
                    <div class="form-group">
                        <label>username</label>
                        <input type="text" class="form-control" name="username" />
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="password" class="form-control" name="patient_password" />
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" class="form-control" name="patient_email" />
                    </div>
                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="date" class="form-control" name="patient_dob" />
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="patient_address"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" class="form-control" name="patient_contact" />
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
                
                
            </div>
        </div>
    </div>
</div>

	
  
  <?php subview('footer.php'); ?>



</body>
</html>