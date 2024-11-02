<header id="header" class="fixed-header w-100">
    <div class="top-header bg-dark-blue py-1"> <!-- Reduced padding -->
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <ul class="list-unstyled d-flex mb-0">
                        <li class="mr-3">
                            <a href="tel:+254720777585" class="text-white d-flex align-items-center">
                                <i class="fas fa-phone-alt text-light mr-1 fa-lg"></i> <!-- Reduced icon size -->
                                <span class="small-text">+254 720 777 585</span> <!-- Smaller text -->
                            </a>
                        </li>
                        <li>
                            <a href="mailto:eunice@gmail.com" class="text-white d-flex align-items-center">
                                <i class="fas fa-envelope text-light mr-1 fa-lg"></i> <!-- Reduced icon size -->
                                <span class="small-text">eunice@gmail.com</span> <!-- Smaller text -->
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <div class="top-contact">
                        <ul class="list-text-white d-table">
                            <li class="d-flex align-items-center">
                                <i class="fas fa-user text-primary mr-1 fa-lg"></i> <!-- Reduced icon size -->
                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <a href="logout.php" class="text-white small-text">Logout</a> <!-- Smaller text -->
                                <?php } else { ?>
                                    <a href="login.php" class="text-white small-text">SignUp</a> <!-- Smaller text -->
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav secondary-nav py-1"> <!-- Reduced padding -->
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="navbar-brand" href="#">
                    <video class="nav-logo" autoplay muted loop>
                        <source src="images/logo/logo.mp4" type="video/mp4">
                        <img src="images/logo/logo.png" alt="Logo" class="fallback-logo">
                    </video>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span> <!-- Hamburger icon -->
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
        font-size: 0.8rem; /* Smaller font size for better visibility */
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
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Added shadow for depth */
    }
    .navbar-brand {
        padding: 0;
        display: flex;
        align-items: center;
    }
    .nav-logo {
        max-height: 60px; /* Adjusted logo height */
        object-fit: contain;
    }
    .fallback-logo {
        display: none;
    }
    .navbar-nav .nav-link {
        color: #003366;
        padding: 8px 10px; /* Adjusted padding */
        transition: background-color 0.3s ease, color 0.3s ease;
        border-radius: 5px;
        font-size: 0.9rem; /* Slightly smaller font size */
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
        padding: 8px 10px; /* Adjusted padding */
        transition: background-color 0.3s ease, color 0.3s ease;
        font-size: 0.9rem; /* Slightly smaller font size */
    }
    .dropdown-menu .nav-link:hover {
        background-color: #003366;
        color: #ffffff;
    }
    .btn-submit {
        background-color: #003366;
        color: #ffffff;
        border: none;
        padding: 8px 10px; /* Adjusted padding */
        transition: background-color 0.3s ease, transform 0.2s ease;
        border-radius: 5px;
        font-weight: bold;
        font-size: 0.9rem; /* Smaller button text */
    }
    .btn-submit:hover {
        background-color: #f39c12;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }
    @media (max-width: 768px) {
        .navbar-nav .nav-link {
            padding: 8px 5px; /* Further reduced padding for mobile */
        }
        .btn-submit {
            padding: 8px 10px; /* Adjusted padding for mobile */
        }
        .nav-logo {
            max-height: 50px; /* Smaller logo height for mobile */
        }
    }
</style>

<script>
    let lastScrollTop = 0;
    const header = document.getElementById("header");

    window.addEventListener("scroll", function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scrolling down
            header.style.top = "-80px"; // Adjust to the header height
        } else {
            // Scrolling up
            header.style.top = "0";
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
    });
</script>
