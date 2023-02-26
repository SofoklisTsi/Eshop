<?php
    session_start();
    $isLoggedIn = isset($_SESSION["email"]);
    if(!$isLoggedIn)
    {
        header("Location: ../HTML/login.php");
        exit;
    }
    $email = $_SESSION['email'];
    $productID = $_POST['ProductID'];

    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname= "eshop";

    //Create connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    //Check connection
    if($conn -> connect_error)
    {
        die("Connection failed: " . $conn -> connect_error);
    }
    //Connected successfully
    
    $select = mysqli_query($conn, "SELECT ProductID FROM travelpackage WHERE productID = '".$productID."'");
    echo $productID;
    if(mysqli_num_rows($select) === 1) 
    {
        $sql = "INSERT INTO travelorder (ProductID, Email, DateOfOrder) VALUES
        ('$productID', '$email',CURRENT_DATE())";

        if($conn -> query($sql) === TRUE)
        {
        echo "new record created successfully";
        }
    }
    $conn -> close();
    header("Location: ../HTML/my_orders.php");
    exit;
?>