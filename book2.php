<?php
    session_start();
    if(!isset($_COOKIE["email"])) {
        header("location:login.html");
    }

    if(isset($_GET['submit'])) {
        $_SESSION["fname"] = $_GET["fname"];
        $_SESSION["lname"] = $_GET["lname"];

        $_SESSION["phone"] = $_GET["phone"];
        $_SESSION["email"] = $_GET["email"];
        
        $_SESSION["address"] = $_GET["address"];

        $_SESSION["date"] = $_GET["date"];

        $_SESSION["guest"] = $_GET["guest"];

        $_SESSION["city"] = $_GET["city"];

        $_SESSION["decoration"] = 0;
        $_SESSION["food"] = 0;
        $_SESSION["planner"] = 0;

        header("location: Food.php");
    }
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
        
            <form action="<?php $_PHP_SELF ?>"> 
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="phone">Phone No.</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone No." required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" placeholder="Date" value="<?=$_SESSION['date'];?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="guest">Number of Guest</label>
                    <input type="number" class="form-control" id="guest" name="guest" placeholder="Guest" required>
                    </div>
                </div>


                <div class="form-group">
                    <!-- <label for="services">Services you want to add</label>

                    <div class="form-group">
                                <input class="form-check-input" type="checkbox" value="decoration" id="decoration" name="decoration">
                                <label class="form-check-label" for="decoration">
                                    Decoration (Theme)
                                </label>
                            </div>

                            <div class="form-group">
                                <input class="form-check-input" type="checkbox" value="food" id="food" name="food">
                                <label class="form-check-label" for="food">
                                    Food Catering
                                </label>
                            </div>


                            <div class="form-group">
                                <input class="form-check-input" type="checkbox" value="planner" id="planner" name="planner" checked>
                                <label class="form-check-label" for="planner">
                                    Wedding Planner
                                </label>
                            </div> -->


                    <!-- <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"> -->
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="city">City</label>
                    <select id="city" name="city" class="form-control">
                        <option>--select--</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Mehsana">Mehsana</option>
                        <option value="Vadodara">Vadodara</option>
                        <option value="Surat">Surat</option>
                    </select>
                    </div>
                    
                </div>
                <!-- <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        
                    </label>
                    </div>
                </div> -->
                <button type="submit" class="btn btn-primary" name="submit">Check me out</button>
                </form>

            </div>
        </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    </body>
</html>