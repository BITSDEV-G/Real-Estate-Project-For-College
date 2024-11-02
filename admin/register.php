<?php 
include("config.php");
$error = "";
$msg = "";

if (isset($_REQUEST['insert'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $dob = $_REQUEST['dob'];
    $phone = $_REQUEST['phone'];
    
    if (!empty($name) && !empty($email) && !empty($pass) && !empty($dob) && !empty($phone)) {
        $sql = "INSERT INTO admin (auser, aemail, apass, adob, aphone) VALUES ('$name', '$email', '$pass', '$dob', '$phone')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $msg = 'Admin registered successfully';
        } else {
            $error = '* Registration failed, please try again';
        }
    } else {
        $error = "* Please fill in all the fields!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Ventura - Register</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(120deg, #2980b9, #8e44ad);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }
        
        .login-body {
            animation: fadeIn 1.2s ease-out;
        }

        .login-wrapper {
            background: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            max-width: 400px;
            width: 100%;
            animation: slideUp 1s ease-out;
        }

        .login-right-wrap h1 {
            font-size: 26px;
            font-weight: bold;
            color: #34495e;
        }
        
        .account-subtitle {
            font-size: 16px;
            margin-bottom: 20px;
            color: #7f8c8d;
            font-weight: 500;
        }

        .btn-primary {
            background: #3498db;
            border: none;
            border-radius: 50px;
            transition: background 0.4s ease;
        }

        .btn-primary:hover {
            background: #2980b9;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .error-message, .success-message {
            text-align: center;
            margin: 15px 0;
        }

        .error-message {
            color: #e74c3c;
        }

        .success-message {
            color: #2ecc71;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(100px); }
            to { transform: translateY(0); }
        }
    </style>
</head>
<body>

    <!-- Main Wrapper -->
    <div class="page-wrappers login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Secure Register</h1>
                            <p class="account-subtitle">Unlock Your Dashboard</p>

                            <!-- Display error or success message -->
                            <?php if ($error): ?>
                                <p class="error-message"><?php echo $error; ?></p>
                            <?php endif; ?>
                            
                            <?php if ($msg): ?>
                                <p class="success-message"><?php echo $msg; ?></p>
                            <?php endif; ?>

                            <!-- Registration Form -->
                            <form method="post">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Password" name="pass" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="date" placeholder="Date of Birth" name="dob" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Phone" name="phone" maxlength="10" required>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit" name="insert">Register</button>
                                </div>
                            </form>
                            <!-- /Registration Form -->
                            
                            <div class="text-center dont-have">Already have an account? <a href="index.php">Login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
    
    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    
    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
    
</body>
</html>
