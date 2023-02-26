<?php
    function insertPackages() 
    {
        $package = array(
                array("#01","328,40€","027","../Images_and_Icons/Destinations/Balladolid.jfif",
                        "Athens","Balladolid","2022-01-01","2022-02-02","31 Days"),
                array("#02","258,40€","048","../Images_and_Icons/Destinations/Barcelona.jpg",
                        "Athens","Barcelona","2022-02-02","2022-03-03","31 Days"),
                array("#03","614,95€","012","../Images_and_Icons/Destinations/Cadiz.jpg",
                        "Athens","Cadiz","2022-01-05","2022-01-10","5 Days"),
                array("#04","327,87€","046","../Images_and_Icons/Destinations/Granada.jfif",
                        "Athens","Granada","2022-02-05","2022-02-10","5 Days"),
                array("#05","102,87€","078","../Images_and_Icons/Destinations/Jaen.jfif",
                        "Athens","Jaen","2022-01-10","2022-01-20","10 Days"),
                array("#06","997,00€","009","../Images_and_Icons/Destinations/Madrid.jfif",
                        "Athens","Madrid","2022-02-10","2022-02-20","10 Days"),
                array("#07","222,34€","046","../Images_and_Icons/Destinations/Malaga.jfif",
                        "Athens","Malaga","2022-03-15","2022-03-26","11 Days"),
                array("#08","444,11€","034","../Images_and_Icons/Destinations/Rota.jpg",
                        "Athens","Rota","2022-04-15","2022-04-26","11 Days"),
                array("#09","386,99€","009","../Images_and_Icons/Destinations/Salamanca.jfif",
                        "Athens","Salamanca","2023-01-01","2023-01-05","4 Days"),
                array("#10","1.414,90€","003","../Images_and_Icons/Destinations/Sevilla.jpg",
                        "Athens","Sevilla","2022-10-23","2023-01-10","80 Days"),
                array("#11","179,42€","031","../Images_and_Icons/Destinations/Soria.jfif",
                        "Athens","Soria","2023-04-01","2023-04-03","2 Days"),
                array("#12","246,99€","000","../Images_and_Icons/Destinations/Zaragoza.jfif",
                        "Athens","Zaragoza","2023-02-01","2023-04-01","2 Months")
        );

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
        if(!mysqli_num_rows($select)) 
        {
            foreach ($package as $pack)
            {
                $sql = "INSERT INTO travelpackage (ProductID, Price, Quantity, PhotoURL, FromCity, ToCity, 
                        FromDate, ToDate, Duration) VALUES
                        ('$pack[0]', '$pack[1]', '$pack[2]', '$pack[3]', '$pack[4]', '$pack[5]',
                        '$pack[6]', '$pack[7]', '$pack[8]')";
                $conn -> query($sql);
            }
        }    
        $conn -> close();
    }
?>

