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
                <div class="col-md-4">
                    <div class="top-contact float-right">
                        <ul class="list-text-white d-table">
                            <li><i class="fas fa-user text-primary mr-1"></i>
                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <a href="logout.php">Logout</a>&nbsp;&nbsp;<?php } else { ?>
                                    <a href="login.php">SignUp&nbsp;&nbsp;<?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav secondary-nav py-1">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand" href="#">
                    <video class="nav-logo" autoplay muted loop>
                        <source src="images/logo/logo.mp4" type="video/mp4">
                        <img src="images/logo/logo.png" alt="Logo" class="fallback-logo">
                    </video>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
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
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
    }
    #header {
        position: fixed;
        width: 100%;
        z-index: 999;
        transition: top 0.3s; /* Smooth transition for header */
    }
    .bg-dark-blue {
        background-color: #003366;
    }
    .top-header {
        border-bottom: 1px solid #f39c12;
    }
    .top-header ul {
        padding: 0;
        margin: 0;
        font-size: 0.7rem; /* Smaller font size */
    }
    .top-header a {
        color: #ffffff;
        transition: color 0.3s ease;
    }
    .top-header a:hover {
        color: #f39c12;
    }
    .main-nav {
        background-color: #ffffff;
    }
    .navbar-brand {
        padding: 0;
        display: flex;
        align-items: center;
    }
    .nav-logo {
        max-height: 80px; /* Smaller logo height */
        object-fit: contain;
    }
    .fallback-logo {
        display: none;
    }
    .navbar-nav .nav-link {
        color: #003366;
        padding: 6px 10px; /* Smaller padding */
        transition: background-color 0.3s ease, color 0.3s ease;
        border-radius: 5px;
        font-size: 0.9rem; /* Smaller font size */
    }
    .navbar-nav .nav-link:hover {
        background-color: #003366;
        color: #ffffff;
    }
    .dropdown-menu {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .dropdown-menu .nav-link {
        color: #003366;
        padding: 6px 10px; /* Smaller padding */
        transition: background-color 0.3s ease, color 0.3s ease;
        font-size: 0.9rem; /* Smaller font size */
    }
    .dropdown-menu .nav-link:hover {
        background-color: #003366;
        color: #ffffff;
    }
    .btn-submit {
        background-color: #003366;
        color: #ffffff;
        border: none;
        padding: 6px 10px; /* Smaller padding */
        transition: background-color 0.3s ease, transform 0.2s ease;
        border-radius: 5px;
        font-weight: bold;
    }
    .btn-submit:hover {
        background-color: #f39c12;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }
    @media (max-width: 768px) {
        .navbar-nav .nav-link {
            padding: 6px 8px; /* Smaller padding for mobile */
        }
        .btn-submit {
            padding: 6px 10px; /* Smaller padding for mobile */
        }
        .nav-logo {
            max-height: 70px; /* Smaller logo height for mobile */
        }
    }
</style>
