<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");

// Initialize variables
$amount = $mon = $int = $interest = $pay = $month = '';

// Code for EMI Calculation
if (isset($_REQUEST['calc'])) {
    $amount = floatval($_REQUEST['amount']); // Convert to float
    $mon = intval($_REQUEST['month']);        // Convert to integer
    $int = floatval($_REQUEST['interest']);   // Convert to float

    $interest = $amount * $int / 100;         // Calculate interest
    $pay = $amount + $interest;                // Total amount

    // Check if months is greater than zero
    if ($mon > 0) {
        $month = $pay / $mon;                  // EMI per month
    } else {
        $month = 'N/A'; // or set to 0, or an appropriate message
    }
} else {
    $amount = $mon = $int = $interest = $pay = $month = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,500,600,700|Comfortaa:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <title>Real Estate EMI Calculator</title>

    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Muli', sans-serif;
        }

        .calculator-container {
            background-color: #ffffff; /* White background for contrast */
            color: #000; /* Black text color */
            padding: 40px;
            border-radius: 10px; /* More rounded corners */
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2); /* Soft shadow */
            transition: transform 0.2s; /* Transition for hover effect */
        }

        .calculator-container:hover {
            transform: scale(1.02); /* Slight scale effect on hover */
        }

        .calculator-title {
            margin-bottom: 30px;
            text-align: center;
            font-size: 2em;
            font-weight: bold;
            color: darkblue; /* Dark blue title */
        }

        table.items-list {
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
            color: darkblue; /* Dark blue for table text */
        }

        table.items-list th,
        table.items-list td {
            padding: 15px;
            text-align: center;
            border: 1px solid #007bff; /* Blue border for table cells */
        }

        table.items-list th {
            background-color: #0056b3; /* Darker blue for header */
            color: white; /* White text for header */
        }

        table.items-list tr:nth-child(even) {
            background-color: #e7f0ff; /* Light blue for alternate rows */
        }

        table.items-list tr:hover {
            background-color: #b3d7ff; /* Light blue on hover */
        }

        .calculate-btn {
            background-color: #0056b3; /* Button color */
            color: white; /* Button text color */
            border: none; /* No border */
            border-radius: 5px; /* Rounded corners */
            padding: 12px 25px; /* Padding */
            cursor: pointer; /* Pointer on hover */
            transition: background-color 0.3s; /* Smooth transition */
            font-size: 1.1em; /* Larger text for button */
        }

        .calculate-btn:hover {
            background-color: #003d7a; /* Darker blue on hover */
        }
    </style>
</head>

<body>
    <div id="page-wrapper">
        <div class="row">
            <?php include("include/header.php"); ?>

            <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>User Listed Property</b></h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">User Listed Property</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <div class="calculator-container">
                                <h2 class="calculator-title">EMI Calculator</h2>
                                <form action="" method="post" class="text-center">
                                    <div class="form-group">
                                        <input type="number" name="amount" class="form-control" placeholder="Enter Amount" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="month" class="form-control" placeholder="Enter Months" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="interest" class="form-control" placeholder="Enter Interest Rate (%)" required>
                                    </div>
                                    <button type="submit" name="calc" class="calculate-btn">Calculate EMI</button>
                                </form>

                                <center>
                                    <table class="items-list col-lg-8 mt-4">
                                        <thead>
                                            <tr>
                                                <th>Price</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td><b>Enter Amount</b></td>
                                                <td><b><?php echo htmlspecialchars($amount); ?></b></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><b>Enter Month</b></td>
                                                <td><b><?php echo htmlspecialchars($mon); ?></b></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><b>Enter Interest Rate</b></td>
                                                <td><b><?php echo htmlspecialchars($int); ?></b></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><b>Total Interest</b></td>
                                                <td><b><?php echo htmlspecialchars($interest); ?></b></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><b>Total Amount</b></td>
                                                <td><b><?php echo htmlspecialchars($pay); ?></b></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td><b>Pay Per Month (EMI)</b></td>
                                                <td><b><?php echo htmlspecialchars($month); ?></b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include("include/footer.php"); ?>
            <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        </div>
    </div>

    <script src="js/jquery.min.js"></script> 
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/custom.js"></script>
</body>
</html>
