<?php

    if(isset($_GET["date"])) {
        $name = $_GET["name"];
        $email = $_GET["email"];
        $phone = $_GET["phone"];
        $msg = $_GET["msg"];
        $date = $_GET["date"];

        print "Your selected date : ".$date;

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
            print "<br><h2>sorry bro, someone getting married on your dream date.</h2>";
        }
        else {
            print "<br><h2>Congratulations bro, book the date before someone booked.</h2>";
            print "you will contacted soon!";
            $q = "insert into enquiry values ('".$name."' ,'".$email."' ,'".$phone."' ,'".$date."' ,'".$msg."')";

            $result = mysqli_query($conn, $q);

            if(!$result) {
                die("cannot fire query".mysqli_error($conn));
            }
        }

        

    }
?>