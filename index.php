<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Party Plot | Party Plot.com</title>

    <!--  bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>




    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.jpeg" alt="MyOnlineMeal.com">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="login.html">Login</a></li>
            <li class="item"><a href="#contact">Enquiry</a></li>
            <li class="item"><a href="admin.php">Admin</a></li>
        </ul>
        <div class="btn-group" style="position: absolute; right: 15px;">
            <button type="button"  class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php 
                    if(isset($_COOKIE["username"])) {
                        print $_COOKIE["username"];
                    }
                    else {
                        print "guest";
                    }
                     
              ?>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="profile.php" class="dropdown-item">My Profile</a>
              <!-- <button class="dropdown-item" type="button">Another action</button> -->
              <a href="logout.php" class="dropdown-item">Logout</a>
            </div>
        </div>
    </nav>

    <section id="home">
        <h1 class="h-primary">Best Place For Your Memories</h1>
        <p>Giving your Event a new Wing</p>
        <p>Feel that best, Arrange the Best</p>
        <button class="btn" onclick="location.href='book.php'">Book Now !</button>
    </section>
    <hr>
    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="img/1.jpg" alt="Best Food">
                <h2 class="h-secondary center">Food Catering</h2>
                <p class="center">Paragraph</p>
            </div>
            <div class="box">
                <img src="img/2.png" alt="Best Decoration">
                <h2 class="h-secondary center">Best Decoration</h2>
                <p class="center">Paragraph</p>
            </div>
            <div class="box">
                <img src="img/3.jpg" alt="Best Planed">
                <h2 class="h-secondary center">Wedding Planner</h2>
                <p class="center">Paragraph</p>
            </div>
        </div>
    </section>
    <hr>
    <section id="contact">
        <h1 class="h-primary center">Enquiry Form</h1>
        <div id="contact-box">
            <form action="enquiry.php">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="date">Check Date</label>
                    <input type="date" name="date" id="date" placeholder="Check Date">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="msg" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn" id="enquiry_btn">Enquiry</button>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.Party Plot.com. All rights reserved!
        </div>
    </footer>
</body>

</html>