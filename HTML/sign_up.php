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
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/sign_up.css">
    <script src="../JS/email-validation.js"></script>
    <script src="../JS/password-validation.js"></script>
    <script src="../JS/sign_up.js"></script>
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
        <form class="container-fluid" id="Mcontainer" action="../PHP/sign_up.php" method="post">
            <h1 class="text-center">Register</h1>
            <div class="container features">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12" id="Col1">
                        <h3 class="feature-title">credentials</h3>
                        <div class="form-group">
                            <input type='email' id='Email' class="form-control" name='Email' placeholder="Email *"
                                onfocusout="ValidateEmail(this)" />
                            <p name="Message1" id="Message1">Invalid Email</p>
                        </div>
                        <div class="form-group">
                            <input type='password' id='Password' class='form-control' name='Password'
                                placeholder="Password *" onkeyup="FirstPasswordValidation()"
                                onfocusout="ValidatePassword()" />
                            <p name="Message2" id="Message2">Password must have:</p>
                            <p id="Length" class="invalid">A length of <b>8</b> characters,</p>
                            <p id="Capital" class="invalid">At least 1 <b>Capital</b> character,</p>
                            <p id="Letter" class="invalid">1 <b>Lowercase</b> character,</p>
                            <p id="Number" class="invalid"><b>A number 0-9</b> and,</p>
                            <p id="SpecialChar" class="invalid">At least 1 <b>Special Character</b> .</p>
                        </div>
                        <div class="form-group">
                            <input type='password' id='Retype_Password' class='form-control'
                                placeholder="Retype Password *" onkeyup="MatchCheck()" onfocusout="MatchCheck()" />
                            <p name="Message3" id="Message3">Passwords do not match</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12" id="Col2">
                        <h3 class="feature-title text-right">Personal</h3>
                        <div class="form-group">
                            <input type='text' id='FName' class="form-control" name='FName' placeholder="Name *" />
                            <p name="Message4" id="Message4">Empty Name</p>
                        </div>
                        <div class="form-group">
                            <input type='text' id='LName' class="form-control" name='LName' placeholder="Surname *" />
                            <p name="Message5" id="Message5">Empty Surname</p>
                        </div>
                        <div class="form-group">
                            <input type="date" id="Birthday" class="form-control" name="Birthday">
                            <p name="Message6" id="Message6">Empty Date</p>
                        </div>
                        <div class="form-group">
                            <input type='tel' id='Phone' class="form-control" name='Phone' placeholder="Telephone *" />
                            <p name="Message7" id="Message7">Empty Phone Number</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12" id="Col2">
                        <h3 class="feature-title text-left">Details</h3>
                        <div class="form-group">
                            <input type='text' id='Street' class="form-control" name='Street' placeholder="Street *" />
                            <p name="Message8" id="Message8">Empty Street</p>
                        </div>
                        <div class="form-group">
                            <input type='text' id='StreetNumber' class="form-control" name='StreetNumber'
                                placeholder="Street Number *" />
                            <p name="Message9" id="Message9">Empty Street Number</p>
                        </div>
                        <div class="form-group">
                            <input type='text' id='City' class="form-control" name='City'
                                placeholder="City, Country *" />
                            <p name="Message10" id="Message10">Empty City, Country</p>
                        </div>
                        <div class="form-group">
                            <input type='text' id='PostalCode' class="form-control" name='PostalCode'
                                placeholder="Postal Code *" />
                            <p name="Message11" id="Message11">Empty Postal Code</p>
                        </div>

                    </div>
                </div>
                <input type="button" id="Register" class="btn btn-secondary btn-block" value="Register"
                    onclick="Done()">
                <p name="Message12" id="Message12">* Mandatory Fields</p>
                <?php if ($isMistake) 
                { ?>
                    <p style="color:red;">Email Already Exists</p>
                <?php 
                    session_unset();
                    session_destroy();
                } ?>
            </div>
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
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="../JS/main.js"></script>
</body>

</html>