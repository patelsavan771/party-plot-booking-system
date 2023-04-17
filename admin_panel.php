<?php
    session_start();

    if(!isset($_SESSION['admin'])) {
        header("location:index.php");       
    }

    $dbhost = "localhost";
    $user = "root";
    $passdb = "";
    $dbname = "party_plot";

    $conn = mysqli_connect($dbhost, $user, $passdb, $dbname);

    if(!$conn) {
        die("Cannot connect to DB.<br>".mysqli_error($conn));
    }

    $q = "select * from booking order by booking_date";
    $result = mysqli_query($conn, $q);
    if(!$result) {
        die("cannot fire query".mysqli_error($conn));
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/book.css">

    <style>
        #t1 th, td{
            padding: 3px;

        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-lightblue" id="custom-nav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
                </li> -->
            </ul>
            
            <div class="btn-group">
                <button type="button" style="background-color: white; color: black;" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">My Profile</button>
                <!-- <button class="dropdown-item" type="button">Another action</button> -->
                <a href="logout.php" class="dropdown-item">Logout</a>
                </div>
            </div>
        </nav>


        <h2>Welcome Admin,</h2>
        <h3>Bookings : </h3>

        <div class="container">
            <table border="1" id = "t1">
                <tr>
                    <th>fname</th>
                    <th>lname</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>addr</th>
                    <th>booking date</th>
                    <th>guest</th>
                    <th>city</th>
                    <th>decoration</th>
                    <th>food</th>
                    <th>planner</th>
                    <th>payment</th>
                </tr>

                <?php
                    while($r = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        foreach($r as $x => $y) {
                            echo "<td>$y</td>";
                        }
                        echo "</tr>";
                    }
                ?>
                
    

                <tr>

                </tr>
            </table>
        </div>







        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    
</body>
</html>