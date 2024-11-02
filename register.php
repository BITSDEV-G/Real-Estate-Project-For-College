<?php 
include("config.php");
$error = "";
$msg = "";
if (isset($_REQUEST['reg'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $pass = $_REQUEST['pass'];
    $utype = $_REQUEST['utype'];
    
    $uimage = $_FILES['uimage']['name'];
    $temp_name1 = $_FILES['uimage']['tmp_name'];
    
    $query = "SELECT * FROM user WHERE uemail='$email'";
    $res = mysqli_query($con, $query);
    $num = mysqli_num_rows($res);
    
    if ($num == 1) {
        $error = "<p class='alert alert-warning'>Email Id already Exist</p>";
    } else {
        if (!empty($name) && !empty($email) && !empty($phone) && !empty($pass) && !empty($uimage)) {
            $sql = "INSERT INTO user (uname, uemail, uphone, upass, utype, uimage) VALUES ('$name', '$email', '$phone', '$pass', '$utype', '$uimage')";
            $result = mysqli_query($con, $sql);
            move_uploaded_file($temp_name1, "admin/user/$uimage");
            if ($result) {
                $msg = "<p class='alert alert-success'>Register Successfully</p>";
            } else {
                $error = "<p class='alert alert-warning'>Register Not Successfully</p>";
            }
        } else {
            $error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!-- CSS Link -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Title -->
    <title>Real Estate Registration</title>

    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }

        .page-wrappers {
            padding: 60px 0; /* Adjusted padding to avoid header overlap */
        }

        .loginbox {
            background: linear-gradient(145deg, #ffffff, #e6e6e6);
            border-radius: 20px;
            box-shadow: 20px 20px 60px #d1d1d1, -20px -20px 60px #ffffff;
            padding: 40px;
        }

        .login-wrapper h1 {
            color: #003366; /* Dark blue */
        }

        .form-control {
            border: 1px solid #003366; /* Dark blue border */
            border-radius: 10px;
            box-shadow: inset 5px 5px 10px #d1d1d1, inset -5px -5px 10px #ffffff;
        }

        .form-control:focus {
            border-color: #0066cc; /* Lighter blue on focus */
            box-shadow: 0 0 5px rgba(0, 102, 204, 0.5);
        }

        .btn-primary {
            background-color: #003366; /* Dark blue */
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #00509e; /* Lighter blue on hover */
        }

        .dont-have a {
            color: #003366; /* Dark blue for links */
        }

        .dont-have a:hover {
            text-decoration: underline;
        }

        .breadcrumb-item a {
            color: #ffffff; /* White */
        }

        .breadcrumb-item.active {
            color: #ffffff; /* White */
        }

        .banner-full-row {
            padding: 60px 0;
            text-align: center;
        }
    </style>
</head>

<body>

<div id="page-wrapper">
    <div class="row">
        <!-- Header start -->
        <?php include("include/header.php"); ?>
        <!-- Header end -->
        
        <!-- Banner -->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Register</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Register</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
                <div class="container">
                    <div class="loginbox">
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <h1>Secure Register</h1>
                                <p class="account-subtitle">Welcome to Your Dashboard</p>
                                <?php echo $error; ?><?php echo $msg; ?>
                                <!-- Form -->
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Your Email*" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Your Phone*" maxlength="10" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" class="form-control" placeholder="Your Password*" required>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="utype" value="user" checked>User
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="utype" value="agent">Agent
                                        </label>
                                    </div>
                                    <div class="form-check-inline disabled">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="utype" value="builder">Builder
                                        </label>
                                    </div> 
                                    
                                    <div class="form-group">
                                        <label class="col-form-label"><b>User Image</b></label>
                                        <input class="form-control" name="uimage" type="file" required>
                                    </div>
                                    
                                    <button class="btn btn-primary" name="reg" value="Register" type="submit">Register</button>
                                </form>
                                
                                <div class="text-center dont-have">Already have an account? <a href="login.php">Login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer start -->
		<?php include("include/footer.php"); ?>
        <!-- Footer end -->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>
