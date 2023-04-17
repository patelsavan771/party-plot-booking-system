<?php
    $email = $_GET["username"];
    $name = $_GET["name"];
    $phone = $_GET["phone"];

    $dbhost = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "party_plot";

    $conn = mysqli_connect($dbhost, $user, $pass, $dbname);

    if(!$conn) {
        die("DB error.".mysqli_error($conn));
    }
    // echo "Connected.";

    $q = "update login set name ='".$name."', phone = '".$phone."', username = '".$email."' where username = '".$_COOKIE['username']."'";
    // $q = "select * from login";

    $ret = mysqli_query($conn, $q);
    $r = mysqli_fetch_assoc($ret);



?>
