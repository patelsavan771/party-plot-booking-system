<?php

    session_start();
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
    $food_crg =$_SESSION["food_crg"];
    $theme_crg = $_SESSION["theme_crg"];
    $planner_crg = $_SESSION["planner_crg"];
    $amount_paid = $_SESSION["amount"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Receipt</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/book.css">
    <style>
        table {
            width:50%;
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
                <?php print $_COOKIE["username"] ?>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">My Profile</button>
                <!-- <button class="dropdown-item" type="button">Another action</button> -->
                <a href="logout.php" class="dropdown-item">Logout</a>
                </div>
            </div>
        </nav>



        <!-- ................................form starts from here..................................... -->


        <div class="form-con">
        
            <div>
                <?php 
                    print "<h1>Successfull Payment Receipt</h1>";
                    print "<p><strong>Name :  </strong>$fname $lname<p>";
                    print "<p><strong>Email :  </strong>$email<p>";
                    print "<p><strong>Phone :  </strong>$phone<p>";
                    print "<p><strong>City :  </strong>$city<p>";
                    print "<p><strong>Time :  </strong>".$_SESSION["payment_time"]."<p>";


                    ?>

                    <table border="1">
                        <tr>
                            <th>Service</th>
                            <th>Charges</th>
                        </tr>

                        <tr>
                            <td>Party Plot Rent</td>
                            <td>1,00,000</td>
                        </tr>
                        <tr>
                            <td>food (<?= $food ?>)</td>
                            <td><?= $food_crg ?></td>
                        </tr>   
                        <tr>
                            <td>Theme (<?= $decoration?>)</td>
                            <td><?= $theme_crg ?></td>
                        </tr>
                        <tr>
                            <td>Planner (<?= $planner?>)</td>
                            <td><?= $planner_crg ?></td>
                        </tr>

                        <tr>
                            <th>Total</td>
                            <th><?= $payment ?></td>
                        </tr>
                    </table>


                    <?php
                    print "<br>paid amount : ".$payment."<br><br>";
                ?>

                <button onclick="print()">Print receipt</button>
            </div>

        </div>
        </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    </body>
</html>
