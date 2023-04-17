<?php
    echo $_GET["email"];

    if(isset($_GET["email"]) && isset($_GET["password"])) {
        echo "in";
        $email = $_GET["email"];
        $pass = $_GET["password"];
        $name = $_GET["name"];

        // if(strcmp($pass,$cpass) == 1) {
        //     header("location:login.html");
        // }

        $dbhost = "localhost";
        $user = "root";
        $passdb = "";
        $dbname = "party_plot";

        $conn = mysqli_connect($dbhost, $user, $passdb, $dbname);

        if(!$conn) {
            die("Cannot connect to DB.<br>".mysqli_error($conn));
        }
        // echo "Connected.";

        $q = "insert into login (username, pass, name) values ('".$email."' ,'".$pass."','".$name."')";

        $ret = mysqli_query($conn, $q);

        if(!$ret) {
            die("cannot fire query".mysqli_error($conn));
        }
        header("location:login.html");
    }
    
?>