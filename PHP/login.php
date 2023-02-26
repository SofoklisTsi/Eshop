<?php
    $email = $_POST['Email'];
    $password = $_POST['Password'];

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
    
    $select = mysqli_query($conn, "SELECT Password FROM client WHERE Email = '".$_POST['Email']."'");

    if(mysqli_num_rows($select) === 1) 
    {
        $row = $select->fetch_assoc();
        if($password === $row["Password"])
        {
            $conn -> close();
            session_start();
            $_SESSION["email"] = $email;
            header("Location: ../HTML/home.php");
            exit;
        }
    }
    $conn -> close();
    session_start();
    $_SESSION["mistake"] = true;
    header("Location: ../HTML/login.php");
    exit;
?>