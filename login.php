<?php 
session_start();
include("config.php");
$error="";
$msg="";
if(isset($_REQUEST['login']))
{
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];

    if(!empty($email) && !empty($pass))
    {
        $sql = "SELECT * FROM user WHERE uemail='$email' AND upass='$pass'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        if($row){
            $_SESSION['uid'] = $row['uid'];
            $_SESSION['uemail'] = $email;
            header("location:index.php");
        }
        else {
            $error = "<p class='alert alert-warning'>Login Not Successful</p>";
        }
    } else {
        $error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
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
    <title>Real Estate Login</title>

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
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Login</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Login</li>
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
                                <h1>Secure Login</h1>
                                <p class="account-subtitle">Welcome Back</p>
                                <?php echo $error; ?><?php echo $msg; ?>
                                <!-- Form -->
                                <form method="post" onsubmit="return validateLogin()">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email*" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Your Password*" required>
                                    </div>
                                    
                                    <button class="btn btn-primary" name="login" value="Login" type="submit">Login</button>
                                </form>
                                
                                <div class="text-center dont-have">Don't have an account? <a href="register.php">Register</a></div>
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

<!-- Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/custom.js"></script>

<script>
function validateLogin() {
    var email = document.getElementById("email").value.trim();
    var pass = document.getElementById("pass").value.trim();

    if (email === "" || pass === "") {
        alert("Both email and password fields are required.");
        return false;
    }

    var emailPattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid Gmail address.");
        return false;
    }

    if (pass.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
    }

    return true; 
}
</script>

</body>
</html>
