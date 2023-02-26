<?php
        session_start();
        $isLoggedIn = isset($_SESSION["email"]);
        require ("/xampp/htdocs/TP4795PROJECTINTERFACE/PHP/insert.php");
        //inserts the packages into the db
        insertPackages();
        require ("/xampp/htdocs/TP4795PROJECTINTERFACE/PHP/travel_packages_list_page.php");
        $packages = getPackages();
        $page = 8;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../Images_and_Icons/FlyTimeFavicon.ico" type="image/x-icon">
    <title>Phone House</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/travel_packages_list_page.css">
    <script src="../JS/travel_packages_list_page.js"></script>
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
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-row justify-content-between align-items-center filters">
                        <h6>Showing 4 out of 12 results.</h6>
                    </div>
                </div>
            </div>
            <div class="row mt-1" id="Items">
            <?php for ($i = $page; $i < $page+4; $i++) 
                { ?>
                    <div class="col-md-6">
                        <div class="p-card bg-white p-2 rounded px-1 mt-3 mb-3">
                            <div class="d-flex justify-content-center">
                                <h5 class="mt-2"><?php echo $packages[$i]['ToCity']; ?></h5>
                            </div>
                            <div class="d-flex justify-content-center">
                                <img src="<?php echo $packages[$i]['PhotoURL'];?>" width="400" height="300">
                            </div>
                            <div class="d-flex justify-content-center">
                                <p>
                                    From: <?php echo $packages[$i]['FromCity'];?><br>
                                    To: <?php echo $packages[$i]['ToCity'];?><br>
                                    From: <?php echo $packages[$i]['FromDate'];?><br>
                                    To: <?php echo $packages[$i]['ToDate'];?><br>
                                    Duration: <?php echo $packages[$i]['Duration'];?>
                                </p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <h1><?php echo $packages[$i]['Price'];?></h1>
                            </div>
                            <form class="d-flex justify-content-end" id="BuyProduct" action="../PHP/buy.php" method="post">
                                <input type='text' id='ProductID' class="form-control" name='ProductID' style="display: none;" 
                                    value="<?php echo $packages[$i]['ProductID'];?>"/>
                                <input type="button" id="Register" class="btn btn-secondary btn-block" value="Buy Package"
                                    onclick="Done(<?php echo $packages[$i]['Quantity'];?>,this.form)">
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="d-flex justify-content-end text-right mt-2">
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="travel_packages_list_page2.php" aria-label="Previous"><span
                                    aria-hidden="true">«</span></a></li>
                        <li class="page-item"><a class="page-link" href="travel_packages_list_page.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="travel_packages_list_page2.php">2</a></li>
                        <li class="page-item"><a class="page-link" href="travel_packages_list_page3.php">3</a></li>
                    </ul>
                </nav>
            </div>
        </div>

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
    </header>
</body>

</html>