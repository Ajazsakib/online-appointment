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

<?php include_once(VIEW_PATH.'/elements/header.php'); ?>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="/register-form" method="POST">
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

<?php include_once(VIEW_PATH.'/elements/footer.php'); ?>

</body>
</html>