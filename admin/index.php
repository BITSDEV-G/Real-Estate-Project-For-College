<?php 
session_start();
include("config.php");
$error = "";

// Check if logout message is present
$logoutMessage = isset($_GET['logout']) && $_GET['logout'] == 'success' ? "You have successfully logged out." : "";

if (isset($_POST['login'])) {
    // Retrieve and sanitize user input
    $user = trim($_REQUEST['user']);
    $pass = trim($_REQUEST['pass']);

    if (!empty($user) && !empty($pass)) {
        // Use prepared statements to prevent SQL injection
        $stmt = $con->prepare("SELECT auser, apass FROM admin WHERE auser=? AND apass=?");
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows == 1) {
            // Successful login, set session variable and redirect
            $_SESSION['auser'] = $user;
            // Add a delay to see the loader
            echo "<script>setTimeout(function(){ window.location.href = 'dashboard.php'; }, 1000);</script>";
            echo "<script>document.getElementById('loader').style.display = 'flex';</script>";
            exit();
        } else {
            // Invalid credentials
            $error = '* Invalid User Name and Password';
        }
    } else {
        // Empty fields error
        $error = "* Please Fill all the Fields!";
    }
}   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <style>
        /* Background animation */
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

        /* Wrapper styling */
        .login-wrapper {
            background: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            max-width: 400px;
            width: 100%;
            animation: slideUp 1s ease-out;
        }

        /* Header and subtitle */
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

        /* Button styling */
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

        /* Error and logout message styling */
        .error-message, .logout-message {
            text-align: center;
            margin: 15px 0;
        }

        .error-message {
            color: #e74c3c;
        }

        .logout-message {
            color: #2ecc71;
        }

        /* Animation Keyframes */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(100px); }
            to { transform: translateY(0); }
        }

        /* Cube Loader Styles */
        .page-loader {
            display: none; /* Hide loader by default */
            position: fixed;
            z-index: 9999;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
        }

        .loader-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .cube-loader {
            display: flex;
            justify-content: space-between;
            width: 50px; /* Adjust width as needed */
        }

        .cube {
            width: 15px; /* Cube size */
            height: 15px;
            background-color: #3498db;
            animation: cube 0.6s infinite alternate;
        }

        .cube:nth-child(2) {
            animation-delay: 0.2s;
        }

        .cube:nth-child(3) {
            animation-delay: 0.4s;
        }

        .cube:nth-child(4) {
            animation-delay: 0.6s;
        }

        @keyframes cube {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
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
                            <h1>Secure Login</h1>
                            <p class="account-subtitle">Unlock Your Dashboard</p>

                            <!-- Display error message if any -->
                            <?php if ($error): ?>
                                <p class="error-message"><?php echo $error; ?></p>
                            <?php endif; ?>
                            
                            <!-- Display logout success message -->
                            <?php if ($logoutMessage): ?>
                                <p class="logout-message"><?php echo $logoutMessage; ?></p>
                            <?php endif; ?>

                            <!-- Login Form -->
                            <form method="post" onsubmit="showLoader()">
                                <div class="form-group">
                                    <input class="form-control" name="user" type="text" placeholder="User Name" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="pass" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
                                </div>
                            </form>
                            
                            <!-- Registration Link -->
                            <div class="text-center dont-have">Don't have an account? <a href="register.php">Register</a></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- Loader -->
    <div id="loader" class="page-loader">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="loader-container text-center">
                <div class="cube-loader">
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                </div>
                <p class="loading-text mt-3">Loading, please wait...</p>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script>
        function showLoader() {
            document.getElementById('loader').style.display = 'flex';
        }
    </script>
</body>
</html>
