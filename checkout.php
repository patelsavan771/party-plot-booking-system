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

    $theme = $_SESSION["theme"];
    $food = $_SESSION["food"];
    $planner = $_SESSION["planner"];

    $amount = 100000; // party plot rent 

    $food_crg = 0;
    $theme_crg = 0;
    //food
    if($food == "punjabi") {
        $food_crg = $guest * 400;
        $amount += $guest * 400;
    } 
    else if($food == "Kathiyawadi") {
        $food_crg = $guest * 500;
        $amount += $guest * 500;
    }
    else if($food == "south indian") {
        $food_crg = $guest * 600;
        $amount += $guest * 600;
    }


    // theme
    if($theme == "theme1") {
        $theme_crg = 10000;
        $amount += 10000;
    } 
    else if($theme == "theme2") {
        $theme_crg = 20000;
        $amount += 20000;
    }
    else if($theme == "theme3") {
        $theme_crg = 25000;
        $amount += 25000;
    }


    $planner_crg = 0;
    if($planner == 1) {
        $planner_crg = 8000;
        $amount += 8000;
    }

    
    $_SESSION["food_crg"] = $food_crg;
    $_SESSION["theme_crg"] = $theme_crg;
    $_SESSION["planner_crg"] = $planner_crg;
    $_SESSION["amount"] = $amount;


    // databse operations............................


    // $fname = $_GET["fname"];
    // $lname = $_GET["lname"];

    // $phone = $_GET["phone"];
    // $email = $_GET["email"];
    
    // $address = $_GET["address"];

    // $date = $_GET["date"];

    // $guest = $_GET["guest"];

    // $city = $_GET["city"];

    // $decoration = 0;
    // $food = 0;
    // $planner = 0;

    // if(isset($_GET["decoration"])) {
    //     $decoration = 1;
    // }
    // if(isset($_GET["food"])) {
    //     $food = 1;
    // }
    // if(isset($_GET["planner"])) {
    //     $planner = 1;
    // }

    // $payment = 0;

    // $dbhost = "localhost";
    // $user = "root";
    // $passdb = "";
    // $dbname = "party_plot";

    // $conn = mysqli_connect($dbhost, $user, $passdb, $dbname);

    // if(!$conn) {
    //     die("Cannot connect to DB.<br>".mysqli_error($conn));
    // }

    // $q = "insert into dummy values ('".$fname."' ,'".$lname."' ,'".$phone."' ,'".$email."' ,'".$address."' ,'".$date."' ,".$guest." ,'".$city."' ,".$decoration." ,".$food." ,".$planner." ,".$payment.")";

    // $result = mysqli_query($conn, $q);

    // if(!$result) {
    //     die("cannot fire query".mysqli_error($conn));
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book page</title>
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
        
        <form action="confirm.php">
            <div>
                <?php 
                    date_default_timezone_set('Asia/Kolkata');
                    print "<h1>checkout </h1>";
                    print "<p><strong>Name :  </strong>$fname $lname<p>";
                    print "<p><strong>Email :  </strong>$email<p>";
                    print "<p><strong>Phone :  </strong>$phone<p>";
                    print "<p><strong>City :  </strong>$city<p>";
                    print "<p><strong>Time :  </strong>".date("d/m/Y h:i:s")."<p>";
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
                            <td>Theme (<?= $theme?>)</td>
                            <td><?= $theme_crg ?></td>
                        </tr>
                        <tr>
                            <td>Planner (<?= $planner?>)</td>
                            <td><?= $planner_crg ?></td>
                        </tr>

                        <tr>
                            <th>Total</td>
                            <th><?= $amount ?></td>
                        </tr>
                    </table>


                    <?php
                    print "<br>payable amount : ".$amount."<br><br>";
                ?>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input class="form-check-input" type="checkbox" value="paid" id="pay" name="pay">
                    <label class="form-check-label" for="pay">
                        pay
                    </label>
                </div>


                <!-- <div style="display:none;">
                    <input type="hidden" class="form-control" id="email" name="email" placeholder="Email" value="<?php print $email ?>">
                </div> -->
            

                <div class="form-group col-md-6">
                <label for="date">&nbsp;</label><br>
                <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </div>

            
        </form>

        </div>
        </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    </body>
</html>
