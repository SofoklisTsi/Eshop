<?php
        session_start();
        $isLoggedIn = isset($_SESSION["email"]);
        if($isLoggedIn)
                header("Location: ../HTML/home.php");
        $isMistake = isset($_SESSION["mistake"]);
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
        <link rel="stylesheet" type="text/css" href="../CSS/login.css">
        <script src="../JS/email-validation.js"></script>
        <script src="../JS/login.js"></script>
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
                                <li class="nav-item">
                                        <a class="nav-link" href="sign_up.php">Register</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="login.php">Log In</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="travel_packages_list_page.php">Travel Packages</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                        </ul>
                </div>
        </nav>

        <header class="page-header header container-fluid">
                <form class="description" id="LoginForm" action="../PHP/login.php" method="post">
                        <h1>Log In</h1>
                        <div class="form-group">
                                <input type='email' id='Email' class="form-control" name='Email' placeholder="Email *"
                                        onfocusout="ValidateEmail(this)" />
                                <p name="Message1" id="Message1">Invalid Email</p>
                        </div>
                        <div class="form-group">
                                <input type='password' id='Password' class='form-control' name='Password'
                                        placeholder="Password *"/>
                                <p name="Message2" id="Message2">Empty Password</p>
                        </div>
                        <input type="button" id="Register" class="btn btn-secondary btn-block" value="Log In"
                                onclick="Done()">
                        <?php if ($isMistake) 
                        { ?>
                                <p style="color:red;">Wrong Combination</p>
                        <?php 
                                    session_unset();
                                    session_destroy();
                        } ?>
                </form>
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
                crossorigin="anonymous">
        </script>
        <script src="../JS/main.js"></script>
</body>

</html>