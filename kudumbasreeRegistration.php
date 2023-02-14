<!doctype html>

<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kudumbasree Register</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendor/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendor/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,500,600,700' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                
                <div class="login-form">
                    <form action="kudumbasreeRegisterAction.php" method="post"> 
                        <div class="form-group">
                            <label><b>KUDUMBASREE NAME</b></label>
                            <input type="text" name="kudumbasreeName" class="form-control" placeholder="Enter Your Kudumbasree Name..." id="">
                        </div>
                         
                         <div class="form-group">
                                <label><b>KUDUMBASREE ADDRESS</b></label>
                                <input type="text" name="kudumbasreeAddress" class="form-control" placeholder="Enter Your Kudumbasree Address..." id="">
                        </div>
						<div class="form-group">
                                <label><b>REGISTER NUMBER</b></label>
                                <input type="text" name="kudumbasreeRegno" class="form-control" placeholder="Enter Your Register Number..." id="">
                        </div>
						 <div class="form-group">
                                <label><b>SECRETARY</b></label>
                                <input type="text" name="secretary" class="form-control" placeholder=" Enter Your Secretary Name...">
                        </div>
                        <div class="form-group">
                                <label><b>PANCHAYATH</b></label>
                                <input type="text" name="panchayath" class="form-control" placeholder=" Enter Your Panchayath...">
                        </div>
						<div class="form-group">
                                <label><b>WARD</b></label>
                                <input type="text" name="ward" class="form-control" placeholder=" Enter Your Ward...">
                        </div>
                                <div class="form-group">
                                    <label><b>PASSWORD</b></label>
                                    <input type="password" class="form-control" placeholder="Enter Your Password..." name="kudumbasreePassword">
                        </div>
						 <div class="form-group">
                                    <label><b>CONFIRM PASSWORD</b></label>
                                    <input type="password" class="form-control" placeholder="Confirm Your Password..." name="confirmPassword">
                        </div>
						
                        <div class="form-group">
                                    <label><b>PHONE</b></label>
                                    <input type="text" class="form-control" placeholder="Enter Your Phone Number..." name="kudumbasreePhone">
                        </div>
                                    
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                    <div class="social-login-content">
                                    
                                    <div class="register-link m-t-15 text-center">
                                        <p>Already have account ? <a href="kudumbasreeLogin.php"> Sign in</a></p>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendor/jquery/dist/jquery.min.js"></script>
    <script src="vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/mains.js"></script>


</body>

</html>
