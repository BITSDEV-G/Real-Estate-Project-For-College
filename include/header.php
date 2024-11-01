<header id="header" class="fixed-header w-100">
    <div class="top-header bg-dark-blue py-1">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <ul class="list-unstyled d-flex mb-0">
                        <li class="mr-3">
                            <a href="tel:+254720777585" class="text-white">
                                <i class="fas fa-phone-alt text-light mr-1"></i>+254 720 777 585
                            </a>
                        </li>
                        <li>
                            <a href="mailto:eunice@gmail.com" class="text-white">
                                <i class="fas fa-envelope text-light mr-1"></i>eunice@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav secondary-nav py-1">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand" href="#">
                    <img class="nav-logo" src="images/logo/logo.png" alt="Logo" style="max-height: 30px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="agent.php">Agent</a></li>
                        <li class="nav-item"><a class="nav-link" href="property.php">Properties</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <?php if (isset($_SESSION['uemail'])) { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="request.php">Property Request</a></li>
                                    <li class="nav-item"><a class="nav-link" href="feature.php">Your Property</a></li>
                                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item"><a class="nav-link" href="login.php">Login/Register</a></li>
                        <?php } ?>
                    </ul>
                    <a class="btn btn-submit d-none d-xl-block" href="submitproperty.php">Submit Property</a>
                </div>
            </nav>
        </div>
    </div>
</header>

<style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4; /* Light background for contrast */
    }
    /* Header Styles */
    #header {
        position: relative;
    }
    .bg-dark-blue {
        background-color: #003366; /* Dark blue color */
    }
    .top-header {
        border-bottom: 1px solid #f39c12; /* Orange underline */
    }
    .top-header ul {
        padding: 0;
        margin: 0;
        font-size: 0.8rem; /* Smaller font size */
    }
    .top-header a {
        color: #ffffff;
        transition: color 0.3s ease;
    }
    .top-header a:hover {
        color: #f39c12; /* Light orange on hover */
    }
    .navbar-nav .nav-link {
        color: #ffffff; /* White for navbar links */
        padding: 8px 12px; /* Reduced padding for better compactness */
        transition: background-color 0.3s ease, color 0.3s ease;
        border-radius: 5px; /* Rounded corners */
    }
    .navbar-nav .nav-link:hover {
        background-color: #003366; /* Dark blue on hover */
        color: #ffffff; /* White text on hover */
    }
    .dropdown-menu {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .dropdown-menu .nav-link {
        color: #ffffff; /* White for dropdown links */
        padding: 8px 12px; /* Reduced padding for dropdown links */
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .dropdown-menu .nav-link:hover {
        background-color: #003366; /* Dark blue on dropdown link hover */
        color: #ffffff; /* White text on hover */
    }
    .btn-submit {
        background-color: #003366; /* Dark blue button color */
        color: #ffffff;
        border: none;
        padding: 8px 12px; /* Reduced padding for better compactness */
        transition: background-color 0.3s ease, transform 0.2s ease;
        border-radius: 5px; /* Rounded corners */
        font-weight: bold; /* Make the button text bold */
    }
    .btn-submit:hover {
        background-color: #f39c12; /* Button hover color */
        transform: translateY(-2px); /* Slight lift effect */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3); /* Add shadow on hover */
    }
    .nav-logo {
        max-height: 30px; /* Ensure logo fits well */
        transition: transform 0.3s ease;
    }
    .nav-logo:hover {
        transform: scale(1.1); /* Slight zoom on logo hover */
    }

    @media (max-width: 768px) {
        .navbar-nav .nav-link {
            padding: 8px; /* Further reduced padding on smaller screens */
        }
        .btn-submit {
            padding: 8px 12px; /* Adjust button size for mobile */
        }
    }
</style>
