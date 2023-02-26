<?php
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $fname = $_POST['FName'];
    $lname = $_POST['LName'];
    $birtday = $_POST['Birthday'];
    $phone = $_POST['Phone'];
    $street = $_POST['Street'];
    $streetnumber = $_POST['StreetNumber'];
    $city = $_POST['City'];
    $postal = $_POST['PostalCode'];

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

    $select = mysqli_query($conn, "SELECT * FROM client WHERE Email = '".$_POST['Email']."'");
    if(mysqli_num_rows($select)) 
    {
        $conn -> close();
        session_start();
        $_SESSION["mistake"] = true;
        header("Location: ../HTML/sign_up.php");
        exit;
    }
    $sql = "INSERT INTO client (Email, Password, FName, LName, BDate, Phone, 
                Street, StreetNumber, City, PostalCode) VALUES
                ('$email', '$password', '$fname', '$lname', '$birtday', '$phone',
                '$street', '$streetnumber', '$city', '$postal')";

    if($conn -> query($sql) === TRUE)
    {
        echo "new record created successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn -> error;
    }
    
    $conn -> close();

    header("Location: ../HTML/login.php");
    exit;
?>