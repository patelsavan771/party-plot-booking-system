<?php
    //form input from user
    $email = $_GET["email"];
    $pass = $_GET["password"];

    $dbhost = "localhost";
    $user = "root";
    $dbpass = "";
    $dbname = "party_plot";

    $conn = mysqli_connect($dbhost, $user, $dbpass, $dbname);

    if(!$conn) {
        die("DB error.".mysqli_error($conn));
    }
    // echo "Connected.";

    $q = "select * from login where username = '".$email."' and pass ='".$pass."'";
    // $q = "select * from login";

    $ret = mysqli_query($conn, $q);
    echo mysqli_num_rows($ret);

    if(mysqli_num_rows($ret) == 1) {
        setcookie("email", $email, time() + 3600);
        setcookie("username", $email, time() + 3600);
        header("location:index.php");
    }
    else {
        header("location:login.html");
    }
