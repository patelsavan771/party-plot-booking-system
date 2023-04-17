<?php
    session_start();
    if(isset($_GET['submit2'])) {
        $_SESSION["theme"] = $_GET['theme'];
        $_SESSION["planner"] = $_GET["planner"];
        header("location:checkout.php");

    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>decoration page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        .form-con {
    
    margin: 50px 150px;
    border: 4px solid rgb(164, 213, 233);
    padding: 50px;
}

#custom-nav {
    background-color: rgb(71, 155, 190);
}

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
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
        <form action="<?php $_PHP_SELF ?>">
            <div style="width:50%; margin:auto; text-align:center;margin-top:25px;">
                
                    <h3>Select your Theme:</h3>
                    <div class="gallery" >
                    
                        <img src="img/Panjabi.jpg" alt="Cinque Terre" width="600" height="400">
                    
                    <div class="desc">theme-1</div>
                    <input type="radio" name="theme" id="" value="theme1" checked>
                    </div>

                    <div class="gallery">
                        <img src="img/Kathiyawadi.jpg" alt="Forest" width="600" height="400">
                    
                    <div class="desc">theme-2</div>
                    <input type="radio" name="theme" id=""value="theme2">
                    </div>

                    <div class="gallery">
                    
                        <img src="img/south.jpg" alt="Northern Lights" width="600" height="400">
                    
                    <div class="desc">theme-3</div>
                    <input type="radio" name="theme" id="" value="theme3">
                    </div>
            </div>
            <br>
            <div style="display:block;">
            <label for="planner">Do you want wedding planner?</label>
            <input type="radio" name="planner" id="" value="0"> No
            <input type="radio" name="planner" id="" value="1"> Yes
            <br>
            <input type="submit" value="Next" name="submit2">
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
                    

    </body>
</html>