<?php
    session_start();
    // print "in confirm.php <br>";
    if(isset($_GET["pay"])) {

        print $_SESSION["fname"];

        $dbhost = "localhost";
        $user = "root";
        $passdb = "";
        $dbname = "party_plot";

        $conn = mysqli_connect($dbhost, $user, $passdb, $dbname);

        if(!$conn) {
            die("Cannot connect to DB.<br>".mysqli_error($conn));
        }


        $fname = $_SESSION["fname"];
        $lname = $_SESSION["lname"];

        $phone = $_SESSION["phone"];
        $email = $_SESSION["email"];

        $address = $_SESSION["address"];

        $date = $_SESSION["date"];

        $guest = $_SESSION["guest"];

        $city = $_SESSION["city"];

        $decoration = $_SESSION["theme"];
        $food = $_SESSION["food"];
        $planner = $_SESSION["planner"];

        $payment = $_SESSION["amount"];
        date_default_timezone_set('Asia/Kolkata');

        $payment_time = date("d/m/Y h:i:s");
        $_SESSION["payment_time"] = $payment_time;

        $q = "insert into booking values ('".$fname."' ,'".$lname."' ,'".$phone."' ,'".$email."' ,'".$address."' ,'".$date."' ,".$guest." ,'".$city."' ,'".$decoration."' ,'".$food."' ,".$planner." ,".$payment.")";

        $result = mysqli_query($conn, $q);
        if(!$result) {
            die("cannot fire query".mysqli_error($conn));
        }
        else {
            header("location:receipt.php");
        }
    }
    else {
        header("location:checkout.php");           
    }
?>