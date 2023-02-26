<?php
    function getOrders($email) 
    {
        $isLoggedIn = isset($email);
        if(!$isLoggedIn)
        {
            header("Location: ../HTML/login.php");
            exit;
        }

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

        $select = mysqli_query($conn, "SELECT * FROM travelorder o join travelpackage p
                    on o.ProductID = p.ProductID WHERE Email = '".$email."'");
        $packages = array();
        $index = 0;
        while($row = $select->fetch_assoc())
        {
            $packages[$index] = $row;
            $index+=1;
        }  
        $conn -> close();
        return $packages;
    }
?>