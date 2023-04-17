<?php

    session_start();

    if(isset($_GET["date"])) {
        // $fname = $_GET["fname"];
        // $lname = $_GET["lname"];

        // $phone = $_GET["phone"];
        // $email = $_GET["email"];
        
        // $addr = $_GET["addr"];

        $date = $_GET["date"];

        $_SESSION["date"] = $date;

        // $guest = $_GET["guest"];

        // $city = $_GET["city"];

        // print "Your selected date : ".$date;

        $dbhost = "localhost";
        $user = "root";
        $passdb = "";
        $dbname = "party_plot";

        $conn = mysqli_connect($dbhost, $user, $passdb, $dbname);

        if(!$conn) {
            die("Cannot connect to DB.<br>".mysqli_error($conn));
        }

        $q = "select * from booking where booking_date='".$date."'";

        $result = mysqli_query($conn, $q);

        if(!$result) {
            die("cannot fire query".mysqli_error($conn));
        }

        if($result->num_rows > 0) {
            include 'book.php';
            include 'popup.php';
        }
        else {
            header("location:book2.php");            
        }
        // 

        

    }
?>