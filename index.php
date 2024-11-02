<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
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
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
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

<!--	Title
	=========================================================-->
<title>Real Estate</title>
</head>
<body>

<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
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



<!--	Page Loader  -->

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
		
        <!--	Banner Start   -->
        <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('images/banner/04.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                    <div class="hero-section text-white d-flex align-items-center" style="background: url('your-hero-image.jpg') no-repeat center center/cover; height: 100vh;">
                                        <div class="container text-center">
                                            <h1 class="display-4 mb-4"><span class="text-primary">Find</span> Your Dream House</h1>
                                            <p class="lead mb-5">Discover properties that suit your style and needs.</p>
                                            <form method="post" action="propertygrid.php" class="p-4 rounded mx-auto" style="background-color: rgba(0, 31, 63, 0.8); width: 80%; max-width: 900px;">
                                                <div class="row justify-content-center">
                                                    <div class="col-md-6 col-lg-2 mb-3">
                                                        <div class="form-group">
                                                            <select class="form-control custom-select" name="type" style="color: #013a63;">
                                                                <option value="" disabled selected>Select Type</option>
                                                                <option value="apartment">Apartment</option>
                                                                <option value="flat">Flat</option>
                                                                <option value="bungalow">Bungalow</option>
                                                                <option value="house">House</option>
                                                                <option value="villa">Villa</option>
                                                                <option value="office">Office</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-2 mb-3">
                                                        <div class="form-group">
                                                            <select class="form-control custom-select" name="stype" style="color: #013a63;">
                                                                <option value="" disabled selected>Select Status</option>
                                                                <option value="rent">Rent</option>
                                                                <option value="sale">Sale</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-2 mb-3">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" name="min-price" placeholder="Min Price (Ksh)" style="color: #013a63;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-2 mb-3">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" name="max-price" placeholder="Max Price (Ksh)" style="color: #013a63;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-2 mb-3">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #014f86; border-color: #014f86;">
                                                                Search
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <style>
                                        /* Hero Section Styling */
                                        .hero-section {
                                            position: relative;
                                            color: #ffffff;
                                            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
                                        }

                                        /* Form Control Styling */
                                        .form-control {
                                            border: 2px solid #014f86;
                                            border-radius: 8px;
                                            transition: all 0.3s ease;
                                        }

                                        .form-control:focus {
                                            border-color: #0179b3;
                                            box-shadow: 0 0 8px rgba(1, 79, 134, 0.5);
                                        }

                                        /* Button Styling */
                                        .btn-primary:hover {
                                            background-color: #0179b3;
                                            border-color: #0179b3;
                                        }
                                        .page-loader {
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            background-color: rgba(255, 255, 255, 0.8);
                                            transition: opacity 0.3s ease;
                                        }

                                        .cube-loader {
                                            width: 80px;
                                            height: 80px;
                                            position: relative;
                                            transform-style: preserve-3d;
                                            animation: rotate 2s infinite linear;
                                        }

                                        .cube {
                                            position: absolute;
                                            width: 20px;
                                            height: 20px;
                                            background-color: #003366; /* Dark blue */
                                            opacity: 0.8;
                                            border-radius: 5px;
                                            animation: bounce 1s infinite alternate;
                                        }

                                        .cube:nth-child(1) {
                                            transform: translateZ(40px);
                                            animation-delay: 0s;
                                        }
                                        .cube:nth-child(2) {
                                            transform: rotateY(90deg) translateZ(40px);
                                            animation-delay: 0.2s;
                                        }
                                        .cube:nth-child(3) {
                                            transform: rotateY(180deg) translateZ(40px);
                                            animation-delay: 0.2s;
                                        }
                                        .cube:nth-child(4) {
                                            transform: rotateY(270deg) translateZ(40px);
                                            animation-delay: 0.2s;
                                        }

                                        @keyframes rotate {
                                            from {
                                                transform: rotateY(0deg);
                                            }
                                            to {
                                                transform: rotateY(360deg);
                                            }
                                        }

                                        @keyframes bounce {
                                            from {
                                                transform: translateY(0);
                                            }
                                            to {
                                                transform: translateY(-20px);
                                            }
                                        }

                                        .loading-text {
                                            font-size: 1.5rem;
                                            color: #003366; /* Dark blue */
                                            font-weight: bold;
                                            animation: fadeIn 0.5s ease-in-out;
                                        }

                                        @keyframes fadeIn {
                                            from {
                                                opacity: 0;
                                            }
                                            to {
                                                opacity: 1;
                                            }
                                        }

                                        /* Text Primary Color */
                                        .text-primary {
                                            color: #00bfff !important;
                                        }
                                          /* Custom Color Scheme */
                                        .text-dark-blue {
                                            color: #002366;
                                        }
                                        .full-row {
                                            padding: 60px 0;
                                            position: relative;
                                        }

                                        .count {
                                            border: 2px solid transparent; /* Add border for hover effect */
                                            transition: border 0.3s, transform 0.3s;
                                        }

                                        .count:hover {
                                            border: 2px solid rgba(255, 255, 255, 0.5); /* Change border color on hover */
                                            transform: scale(1.05); /* Slightly enlarge the card on hover */
                                        }

                                        .count-num {
                                            font-size: 40px; /* Make the count number larger */
                                            font-weight: bold;
                                            transition: color 0.3s;
                                        }

                                        .count-num.text-primary {
                                            color: #002366; /* Use Bootstrap's primary color */
                                        }

                                        .text-white {
                                            font-size: 18px; /* Increase font size for better readability */
                                            margin-top: 10px; /* Add margin for spacing */
                                        }


                                        .hover-text-primary:hover {
                                            color: #002366; /* Dark blue for hover effect */
                                        }

                                        .card {
                                            transition: transform 0.2s; /* Minimal animation for card */
                                        }

                                        .card:hover {
                                            transform: scale(1.02); /* Slight scaling on hover */
                                        }

                                        .list-inline-item {
                                            margin-right: 1rem; /* Space between icons */
                                        }
                                        .icon-3d {
                                            font-size: 2rem; /* Adjust size as needed */
                                            color: #007bff; /* Primary color for icons */
                                            transition: transform 0.3s ease, box-shadow 0.3s ease;
                                            /* Adding a slight shadow for 3D effect */
                                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                                        }

                                        .icon-3d:hover {
                                            transform: translateY(-5px); /* Lift effect on hover */
                                            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4); /* Enhance shadow on hover */
                                        }
                                        .testimonial-card {
                                            transition: transform 0.3s;
                                            border: none;
                                        }

                                        .testimonial-card:hover {
                                            transform: translateY(-5px);
                                        }

                                        .testimonial-card .card-body {
                                            border-radius: 10px 10px 0 0;
                                        }

                                        .testimonial-card .card-footer {
                                            border-top: 1px solid #dee2e6;
                                            border-radius: 0 0 10px 10px;
                                        }


                                        </style>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM5F1It4M/ocq1D1vS13H/4mFoP+1W5mRZ8E8P" crossorigin="anonymous">
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM5F1It4M/ocq1D1vS13H/4mFoP+1W5mRZ8E8P" crossorigin="anonymous">
                                        <!-- Include Font Awesome CDN in the head of your HTML -->
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM5F1It4M/ocq1D1vS13H/4mFoP+1W5mRZ8E8P" crossorigin="anonymous">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script>
$(document).ready(function(){
    $(".recent-review").owlCarousel({
        items: 1,
        dots: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true
    });
});
</script>
                                        /* Responsive Design */
                                        @media (max-width: 768px) {
                                            .display-4 {
                                                font-size: 2.5rem;
                                            }
                                        }
                                    </style>

                                    </div>
                                    <div class="col-md-8 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="city" placeholder="Enter City or Enter State" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-2">
                                        <div class="form-group">
                                            <button type="submit" name="filter" class="btn btn-primary w-100">Search Property</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	Banner End  -->
           <!-- Text Block One -->
<div class="full-row bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2>
            </div>
        </div>
        <div class="text-box-one">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                    <div class="card p-4 text-center rounded mb-4 transition-3s shadow-sm" style="border: none; transition: all 0.3s; width: 100%;">
                        <i class="fas fa-home text-primary flat-medium mb-3 fa-3x"></i>
                        <h5 class="text-secondary py-3 m-0"><a href="#" class="hover-text-primary">Rental Services</a></h5>
                        <p>We offer reliable rental options to suit your budget and lifestyle, making it easier to find the perfect home for you.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                    <div class="card p-4 text-center rounded mb-4 transition-3s shadow-sm" style="border: none; transition: all 0.3s; width: 100%;">
                        <i class="fas fa-list-alt text-primary flat-medium mb-3 fa-3x"></i>
                        <h5 class="text-secondary py-3 m-0"><a href="#" class="hover-text-primary">Property Listings</a></h5>
                        <p>Explore our curated list of properties available for sale and rent, with options tailored to meet your unique needs.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                    <div class="card p-4 text-center rounded mb-4 transition-3s shadow-sm" style="border: none; transition: all 0.3s; width: 100%;">
                        <i class="fas fa-chart-line text-primary flat-medium mb-3 fa-3x"></i>
                        <h5 class="text-secondary py-3 m-0"><a href="#" class="hover-text-primary">Secure Investments</a></h5>
                        <p>Get professional advice on safe property investments in Kenya to help grow your portfolio with confidence.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                    <div class="card p-4 text-center rounded mb-4 transition-3s shadow-sm" style="border: none; transition: all 0.3s; width: 100%;">
                        <i class="fas fa-headset text-primary flat-medium mb-3 fa-3x"></i>
                        <h5 class="text-secondary py-3 m-0"><a href="#" class="hover-text-primary">Customer Support</a></h5>
                        <p>Our dedicated team is here to assist you 24/7, ensuring that your experience with us is smooth and enjoyable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
		<!-----  Our Services  ---->
<!-----  Recent Properties  ---->
<div class="full-row bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-secondary text-center mb-4">Recent Properties</h2>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <?php 
                    $query = mysqli_query($con, "SELECT property.*, user.uname, user.utype, user.uimage FROM `property`, `user` WHERE property.uid=user.uid ORDER BY date DESC LIMIT 12");
                    while ($row = mysqli_fetch_array($query)) { 
                    ?>
                    <div class="col-md-4 mb-4"> <!-- Change to col-md-4 for three cards per row -->
                        <div class="card border-0 shadow-sm h-100"> <!-- Added h-100 for equal height -->
                            <img src="admin/property/<?php echo $row['18'];?>" class="card-img-top" alt="Property Image" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title text-secondary">
                                    <a href="propertydetail.php?pid=<?php echo $row['0'];?>" class="text-decoration-none hover-text-primary"><?php echo $row['1'];?></a>
                                </h5>
                                <p class="card-text">
                                    <span class="text-primary"><strong>$<?php echo $row['13'];?></strong></span> 
                                    <span class="text-dark"><?php echo $row['12'];?> Sqft</span>
                                </p>
                                <div class="d-flex justify-content-between">
                                    <span class="text-capitalize"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo $row['14'];?></span>
                                    <span class="text-dark"><i class="fas fa-user text-primary"></i> By: <?php echo $row['uname'];?></span>
                                </div>
                                <div class="mt-2">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fas fa-bed text-primary"></i> <?php echo $row['6'];?> Beds</li>
                                        <li class="list-inline-item"><i class="fas fa-bath text-primary"></i> <?php echo $row['7'];?> Baths</li>
                                        <li class="list-inline-item"><i class="fas fa-utensils text-primary"></i> <?php echo $row['9'];?> Kitchen</li>
                                        <li class="list-inline-item"><i class="fas fa-balcony text-primary"></i> <?php echo $row['8'];?> Balcony</li>
                                        <li class="list-inline-item"><i class="far fa-calendar-alt text-primary"></i> 6 Months Ago</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>


		<!--	Recent Properties  -->
     <!-- Why Choose Us -->
<div class="full-row living bg-one overlay-secondary-half" style="background-image: url('images/haddyliving.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="living-list pr-4">
                    <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                    <ul class="list-unstyled">
                        <li class="mb-4 text-white d-flex align-items-start"> 
                            <i class="fas fa-award flat-medium float-left d-table mr-4 icon-3d" aria-hidden="true"></i>
                            <div class="pl-2">
                                <h5 class="mb-3">Quality Living</h5>
                                <p>Experience a life of comfort and convenience in your new home. Our properties are located in prime areas with access to essential services and amenities.</p>
                            </div>
                        </li>
                        <li class="mb-4 text-white d-flex align-items-start"> 
                            <i class="fas fa-building flat-medium float-left d-table mr-4 icon-3d" aria-hidden="true"></i>
                            <div class="pl-2">
                                <h5 class="mb-3">Exceptional Properties</h5>
                                <p>We offer a wide range of houses and apartments tailored to meet your needs, from spacious family homes to chic urban flats.</p>
                            </div>
                        </li>
                        <li class="mb-4 text-white d-flex align-items-start"> 
                            <i class="fas fa-users flat-medium float-left d-table mr-4 icon-3d" aria-hidden="true"></i>
                            <div class="pl-2">
                                <h5 class="mb-3">Professional Guidance</h5>
                                <p>Our experienced agents provide personalized support throughout your property journey, ensuring you find the perfect fit for your lifestyle.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
		<!-- How It Works -->
<div class="full-row py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="text-secondary double-down-line">How It Works</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="icon-thumb-one text-center mb-5">
                    <div class="bg-dark text-white rounded-circle" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">1</div>
                    <div class="icon mb-3">
                        <i class="fas fa-user-check fa-3x text-dark"></i>
                    </div>
                    <h5 class="text-dark mt-4 mb-3">Initial Consultation</h5>
                    <p class="text-dark">We start by understanding your property needs and preferences. Our experts will guide you through the initial stages, ensuring we’re on the same page about what you're looking for.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-thumb-one text-center mb-5">
                    <div class="bg-dark text-white rounded-circle" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">2</div>
                    <div class="icon mb-3">
                        <i class="fas fa-file-alt fa-3x text-dark"></i>
                    </div>
                    <h5 class="text-dark mt-4 mb-3">Document Review</h5>
                    <p class="text-dark">Our team assists with reviewing all the necessary documentation and legal paperwork, making sure everything is in place for a smooth transaction.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-thumb-one text-center mb-5">
                    <div class="bg-dark text-white rounded-circle" style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin: 0 auto;">3</div>
                    <div class="icon mb-3">
                        <i class="fas fa-handshake fa-3x text-dark"></i>
                    </div>
                    <h5 class="text-dark mt-4 mb-3">Secure the Deal</h5>
                    <p class="text-dark">Once everything is approved, we finalize the deal, allowing you to acquire your property with confidence and ease. Welcome to your new home!</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
       <!-- Achievement
============================================================ -->
<div class="full-row overlay-secondary" style="background-image: url('images/counterbg.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; opacity: 0.9;">
    <div class="container">
        <div class="fact-counter">
            <div class="row">
                <div class="col-md-3">
                    <div class="count wow text-center mb-sm-50" data-wow-duration="300ms">
                        <i class="fas fa-home flat-large text-white"></i>
                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php
                            $query=mysqli_query($con,"SELECT count(pid) FROM property");
                            $row=mysqli_fetch_array($query);
                            echo $row[0]; ?>">0</div>
                        <div class="text-white h5">Property Available</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count wow text-center mb-sm-50" data-wow-duration="300ms">
                        <i class="fas fa-tags flat-large text-white"></i>
                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php
                            $query=mysqli_query($con,"SELECT count(pid) FROM property WHERE stype='sale'");
                            $row=mysqli_fetch_array($query);
                            echo $row[0]; ?>">0</div>
                        <div class="text-white h5">Sale Properties Available</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count wow text-center mb-sm-50" data-wow-duration="300ms">
                        <i class="fas fa-door-open flat-large text-white"></i>
                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php
                            $query=mysqli_query($con,"SELECT count(pid) FROM property WHERE stype='rent'");
                            $row=mysqli_fetch_array($query);
                            echo $row[0]; ?>">0</div>
                        <div class="text-white h5">Rent Properties Available</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="count wow text-center mb-sm-50" data-wow-duration="300ms">
                        <i class="fas fa-users flat-large text-white"></i>
                        <div class="count-num text-primary my-4" data-speed="3000" data-stop="<?php
                            $query=mysqli_query($con,"SELECT count(uid) FROM user");
                            $row=mysqli_fetch_array($query);
                            echo $row[0]; ?>">0</div>
                        <div class="text-white h5">Registered Users</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial Section -->
<div class="full-row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-sidebar p-4">
                    <div class="mb-3 col-lg-12">
                        <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Testimonials</h4>
                        <div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-primary">
                            <?php
                            // Fetch testimonials from the database
                            $query = mysqli_query($con, "SELECT feedback.*, user.uname, user.utype FROM feedback INNER JOIN user ON feedback.uid = user.uid WHERE feedback.status = '1'");
                            while ($row = mysqli_fetch_array($query)) {
                                // Escape the feedback content
                                $feedback_content = isset($row['fdescription']) ? htmlspecialchars($row['fdescription']) : 'No feedback available.';
                            ?>
                                <div class="card testimonial-card p-4 bg-white shadow-sm rounded">
                                    <div class="card-body">
                                        <p class="text-muted"><i class="fas fa-quote-left mr-2"></i><?php echo $feedback_content; ?> <i class="fas fa-quote-right mr-2"></i></p>
                                    </div>
                                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                                        <span class="text-primary font-weight-bold d-block text-capitalize"><?php echo htmlspecialchars($row['uname']); ?></span>
                                        <span class="text-secondary text-capitalize"><?php echo htmlspecialchars($row['utype']); ?></span>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonial Section -->


		
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-primary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

</script>
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
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
</body>

</html>