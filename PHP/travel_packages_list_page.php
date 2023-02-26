<?php
    function getPackages() 
    {
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

        $select = mysqli_query($conn, "SELECT * FROM travelpackage");

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