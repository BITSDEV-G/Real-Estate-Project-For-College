<?php 
include("config.php");
session_start(); // Start the session

// Remove the following check if you want to allow all users to access the contact page
// if (!isset($_SESSION['username'])) {
//     header("Location: login.php"); // Redirect to login page
//     exit(); // Terminate the script after redirecting
// }

$error = "";
$msg = "";
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($message)) {
        $sql = "INSERT INTO contact (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $msg = "<p class='alert alert-success'>Message Sent Successfully</p>";
        } else {
            $error = "<p class='alert alert-warning'>Message Not Sent Successfully</p>";
            error_log("SQL Error: " . mysqli_error($con)); // Log SQL error for debugging
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

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Custom Styles -->
<style>
    body {
        background-color: #001f3f; /* Dark blue background */
        color: white; /* White text for contrast */
    }
    .btn-primary {
        background-color: #007bff; /* Bootstrap primary button color */
        border: none;
    }
    .alert {
        border-radius: 5px; /* Rounded corners for alerts */
    }
    .breadcrumb-item a {
        color: #007bff; /* Bootstrap primary link color */
    }
    .breadcrumb-item.active {
        color: #ffffff; /* Active breadcrumb color */
    }
    .contact-info {
        background-color: #0056b3; /* Darker blue for contact info */
        padding: 20px;
        border-radius: 8px; /* Rounded corners */
    }
    .contact-info h3 {
        color: white;
    }
</style>

<!--	Title
	=========================================================-->
<title>Real Estate</title>
</head>
<body>

<!-- 	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner -->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Contact</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--	Banner -->
		
        <!--	Contact Information -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5">
                        <div class="contact-info">
                            <h3 class="mb-4 mt-4">Contacts</h3>
							
                            <ul>
                                <li class="d-flex mb-4"> <i class="fas fa-map-marker-alt text-white mr-2 font-13 mt-1"></i>
                                    <div class="contact-address">
                                        <h5 class="text-white">Address</h5>
                                        <span class="text-secondary">Nairobi, Kenya</span> 
										<span class="text-secondary">Kenya</span>
										</div>
                                </li>
                                <li class="d-flex mb-4"> <i class="fas fa-phone-alt text-white mr-2 font-13 mt-1"></i>
                                    <div class="contact-address">
                                        <h5 class="text-white">Call Us</h5>
                                        <span class="d-table text-secondary">+254 700 123 456</span>
										<span class="text-secondary">+254 700 123 457</span>
									</div>
                                </li>
                                <li class="d-flex mb-4"> <i class="fas fa-envelope text-white mr-2 font-13 mt-1"></i>
                                    <div class="contact-address">
                                        <h5 class="text-white">Email Address</h5>
										<span class="d-table text-secondary">helpline@homex.co.ke</span>
										<span class="text-secondary">info@dev.co.ke</span>
										</div>
                                </li>
                            </ul>
                        </div>
                    </div>
					<div class="col-lg-1"></div>
                    <div class="col-md-12 col-lg-7">
						<div class="container">
                        <div class="row">
							<div class="col-lg-12">
								<h2 class="text-secondary double-down-line text-center mb-5">Get In Touch</h2>
								<?php echo $msg; ?><?php echo $error; ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<form class="w-100" action="#" method="post">
									<div class="row">
										<div class="row mb-4">
											<div class="form-group col-lg-6">
												<input type="text"  name="name" class="form-control" placeholder="Your Name*" required>
											</div>
											<div class="form-group col-lg-6">
												<input type="email" name="email" class="form-control" placeholder="Email Address*" required>
											</div>
											<div class="form-group col-lg-6">
												<input type="text" name="phone" class="form-control" placeholder="Phone" maxlength="10" required>
											</div>
											<div class="form-group col-lg-6">
												<input type="text" name="subject" class="form-control" placeholder="Subject*" required>
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<textarea name="message" class="form-control" rows="5" placeholder="Type Comments..." required></textarea>
												</div>
											</div>
										</div>
										<button type="submit" value="send message" name="send" class="btn btn-primary">Send Message</button>
									</div>
								</form>
							</div>
						</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!--	Contact Information -->
        
        <!--	Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.1263923447026!2d36.82194631476951!3d-1.2920655353731674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11a4e13095b1%3A0x82851d06693bc6ec!2sKenya%20National%20Museum!5e0!3m2!1sen!2ske!4v1667281951648!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <!--	Map -->
        
        <!--	Footer -->
		<?php include("include/footer.php");?>
        <!--	Footer -->
    </div>
</div>

<!--	Script Link
	========================================================-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap-slider.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/layerslider.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
