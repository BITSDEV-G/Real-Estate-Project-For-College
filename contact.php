<?php 
include("config.php");
session_start(); // Start the session

$error = "";
$msg = "";
$show_response = false; // Flag to track whether the response should be shown

// Handle the form submission
if (isset($_POST['send'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    // Server-side validation
    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        $error = "<p class='alert alert-warning'>* Please fill in all fields</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/^[a-zA-Z0-9._%+-]+@gmail\.com$/', $email)) {
        $error = "<p class='alert alert-warning'>* Please enter a valid Gmail address</p>";
    } elseif (!preg_match('/^07[0-9]{8}$/', $phone)) {
        $error = "<p class='alert alert-warning'>* Please enter a valid Kenyan phone number starting with 07</p>";
    } else {
        // Insert the contact form data into the database
        $sql = "INSERT INTO contact (name, email, phone, subject, message) VALUES ('$name', '$email', '$phone', '$subject', '$message')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $msg = "<p class='alert alert-success'>Message sent successfully</p>";
            $show_response = true; // Set flag to true when message is sent successfully
        } else {
            $error = "<p class='alert alert-danger'>Message not sent. Please try again later.</p>";
            error_log("SQL Error: " . mysqli_error($con)); // Log SQL error for debugging
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

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!-- CSS Links -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Real-Estate</title>

    <style>
        body {
            font-family: 'Muli', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .banner-full-row {
            background: url('images/breadcromb.jpg') no-repeat center center/cover;
            padding: 60px 0;
        }
        .page-name {
            font-weight: 600;
            color: #ffffff;
        }
        .contact-info {
            background-color: #003366; /* Dark Blue */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .contact-info h3 {
            margin-bottom: 20px;
            color: #ffffff;
        }
        .contact-info ul li {
            margin-bottom: 20px;
            color: #ffffff;
        }
        .contact-info ul li i {
            color: #ffffff;
        }
        .contact-form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .contact-form textarea {
            resize: none;
        }
        .contact-form button {
            background-color: #003366; /* Dark Blue */
            border: none;
            padding: 10px 20px;
            color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .contact-form button:hover {
            background-color: #00509E; /* Lighter Blue */
        }
        .form-control {
            border: 1px solid #ced4da;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: #003366; /* Dark Blue */
            box-shadow: 0 0 0 0.2rem rgba(0,51,102,.25);
        }
        footer {
            background-color: #003366; /* Keep the footer original color */
            color: #ffffff; /* Footer text color */
        }

        /* Admin Response Section */
        .response-message {
            background-color: #e7f1ff;
            border-left: 5px solid #003366;
            padding: 10px;
            margin-top: 30px;
        }
        .response-message p {
            margin: 0;
            color: #003366;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div id="page-wrapper">
    <div class="row"> 
        <!-- Header -->
        <?php include("include/header.php"); ?>
        
        <!-- Banner -->
        <div class="banner-full-row"></div>
        
        <!-- Contact Information -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5">
                        <div class="contact-info">
                            <h3>Contacts</h3>
                            <ul>
                                <li class="d-flex mb-4"> 
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    <div>
                                        <h5>Address</h5>
                                        <span>James Street West, Westlands 407, Kenya</span>
                                    </div>
                                </li>
                                <li class="d-flex mb-4"> 
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    <div>
                                        <h5>Call Us</h5>
                                        <span>0723 45 67 80</span>
                                    </div>
                                </li>
                                <li class="d-flex mb-4"> 
                                    <i class="fas fa-envelope mr-2"></i>
                                    <div>
                                        <h5>Email Address</h5>
                                        <span>helpline@gmail.com.com</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h2 class="text-secondary text-center mb-4">Get In Touch</h2>
                            <?php echo $msg; ?><?php echo $error; ?>
                            <form action="#" method="post" onsubmit="return validateForm()">
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address*" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone*" maxlength="10" required>
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject*" required>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea name="message" class="form-control" rows="5" placeholder="Type Comments..." required></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" value="send message" name="send" class="btn btn-primary">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Admin Response Section (conditionally displayed) -->
        <?php if ($show_response): ?>
            <div class="full-row">
                <div class="container">
                    <div class="response-message">
                        <p>Admin Response: Thank you for reaching out to us. We will get back to you shortly.</p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <!-- Map -->
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29921.88989279091!2d72.89392697798161!3d20.373147326844283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0d1d69db97345%3A0x8bc4433aecadadfd!2sROFEL%20ARTS%20%26%20COMMERCE%20COLLEGE!5e0!3m2!1sen!2sin!4v1585740130321!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <!-- Footer -->
        <?php include("include/footer.php"); ?>
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
    </div>
</div>

<!-- JS Links --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/custom.js"></script>

<!-- Form validation with JS -->
<script>
    function validateForm() {
        var phone = document.forms["contactForm"]["phone"].value;
        var email = document.forms["contactForm"]["email"].value;
        var phoneRegex = /^07[0-9]{8}$/;
        var emailRegex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;

        if (!phone.match(phoneRegex)) {
            alert("Please enter a valid Kenyan phone number starting with 07.");
            return false;
        }

        if (!email.match(emailRegex)) {
            alert("Please enter a valid Gmail address.");
            return false;
        }
        return true;
    }
</script>

</body>
</html>
