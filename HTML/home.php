<?php
        session_start();
        $isLoggedIn = isset($_SESSION["email"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <link rel="icon" href="../Images_and_Icons/FlyTimeFavicon.ico" type="image/x-icon">
        <title>FlyTime Airlines</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
                integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
                crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">

</head>

<body>
        <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="home.php">
                        <img src="../Images_and_Icons/FlyTimeLogo.png" width="100" height="50">
                </a>
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
                        data-target="#main-navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-navigation">
                        <ul class="navbar-nav">
                                <?php if (!$isLoggedIn) 
                                { ?>
                                        <li class="nav-item">
                                                <a class="nav-link" href="sign_up.php">Register</a>
                                        </li>
                                <?php } ?>
                                <?php if (!$isLoggedIn) 
                                { ?>
                                        <li class="nav-item">
                                                <a class="nav-link" href="login.php">Log In</a>
                                        </li>
                                <?php } ?>
                                <?php if ($isLoggedIn) 
                                { ?>
                                        <li class="nav-item">
                                                <a class="nav-link" href="my_orders.php">My Orders</a>
                                        </li>
                                <?php } ?>
                                <li class="nav-item">
                                        <a class="nav-link" href="travel_packages_list_page.php">Travel Packages</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                <?php if ($isLoggedIn) 
                                { ?>
                                        <li class="nav-item">
                                                <a class="nav-link" href="../PHP/logout.php">Log Out</a>
                                        </li>
                                <?php } ?>
                        </ul>
                </div>
        </nav>

        <header class="page-header header container-fluid">
                <div class="description">
                        <h1>Welcome to FlyTime Airlines</h1>
                        <p>We started as a school project and today we are among the top 10 Airlines in Greece</p>
                        <a class="btn btn-outline-* btn-lg" href="travel_packages_list_page.php" role="button">Discover Our Travel Packages</a>
                </div>
        </header>

        <footer class="page-footer">
                <div class="container">
                        <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                        <h6 class="text-uppercase font-weight-bold">Contact</h6>
                                        <p>Estavromenos, TK 71410 Heraklion, Crete, Greece
                                                <br />info@flytime.gr
                                                <br />+30 - 2810 - 379200,
                                                <br />+30 - 2821 - 023000</p>
                                </div>
                        </div>
                </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
                integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
                integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
                crossorigin="anonymous"></script>
        <script src="../JS/main.js"></script>
</body>

</html>