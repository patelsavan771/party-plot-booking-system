<?php 

    $email = $_COOKIE["email"];

    $dbhost = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "party_plot";

    $conn = mysqli_connect($dbhost, $user, $pass, $dbname);

    if(!$conn) {
        die("DB error.".mysqli_error($conn));
    }
    // echo "Connected.";

    $q = "select * from login where username = '".$email."'";
    // $q = "select * from login";

    $ret = mysqli_query($conn, $q);
    $r = mysqli_fetch_assoc($ret);






?>
<!DOCTYPE html>
<html lang="en">

<head itemscope="" itemtype="http://schema.org/WebSite">
    <title itemprop="name">Preview Bootstrap snippets. account setting or edit profile</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description"
        content="Preview Bootstrap snippets. account setting or edit profile. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <meta name="keywords"
        content="bootdey, bootstrap, theme, templates, snippets, bootstrap framework, bootstrap snippets, free items, html, css, js">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.bootdey.com/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="135x140" href="https://www.bootdey.com/img/bootdey_135x140.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.bootdey.com/img/bootdey_76x76.png">
    <link rel="canonical"
        href="https://www.bootdey.com/snippets/preview/account-setting-or-edit-profile?full-screen=true" itemprop="url">
    <meta property="twitter:account_id" content="2433978487" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@bootdey">
    <meta name="twitter:creator" content="@bootdey">
    <meta name="twitter:title" content="Preview Bootstrap  snippets. account setting or edit profile">
    <meta name="twitter:description"
        content="Preview Bootstrap snippets. account setting or edit profile. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <meta name="twitter:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-1187.png">
    <meta name="twitter:url"
        content="https://www.bootdey.com/snippets/preview/account-setting-or-edit-profile?full-screen=true">
    <meta property="og:title" content="Preview Bootstrap  snippets. account setting or edit profile">
    <meta property="og:url"
        content="https://www.bootdey.com/snippets/preview/account-setting-or-edit-profile?full-screen=true">
    <meta property="og:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-1187.png">
    <meta property="og:description"
        content="Preview Bootstrap snippets. account setting or edit profile. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <link rel="alternate" type="application/rss+xml"
        title="Latest snippets resources templates and utilities for bootstrap from bootdey.com:"
        href="http://bootdey.com/rss" />
    <link rel="author" href="https://plus.google.com/u/1/106310663276114892188" />
    <link rel="publisher" href="https://plus.google.com/+Bootdey-bootstrap/posts" />
    <meta name="msvalidate.01" content="23285BE3183727A550D31CAE95A790AB" />
    <script src="/cache-js/cache-1635427806-97135bbb13d92c11d6b2a92f6a36685a.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/style.css">
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
    <div id="snippetContent" style="padding : 50px 50px; margin:30px 100px ; border:4px solid rgb(164, 213, 233)">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <div class="container">
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar"> <img
                                            src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                            alt="Maxwell Admin"></div>
                                    <h5 class="user-name"><?=$r["name"]?></h5>
                                    <h6 class="user-email"><?=$r["username"]?></h6>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Personal Details</h6>
                                </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group"> <label for="fullName">Full Name</label> <input type="text"
                                            class="form-control" id="fullName" name="name" placeholder="Enter full name" value="<?=$r["name"]?>"></div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group"> <label for="eMail">Email</label> <input type="email"
                                            class="form-control" id="eMail" placeholder="Enter email ID" name="username" value="<?=$r["username"]?>"></div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group"> <label for="phone">Phone</label> <input type="text"
                                            class="form-control" id="phone" placeholder="Enter phone number" name="phone" value="<?=$r["phone"]?>"></div>
                                </div>
                                
                            </div>
                            
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right"> <button type="button" id="submit" name="submit"
                                            class="btn btn-secondary">Cancel</button> <button type="button" id="submit"
                                            name="submit" class="btn btn-primary">Update</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            body {
                margin: 0;
                color: #2e323c;
                background: #f5f6fa;
                position: relative;
                height: 100%;
            }

            .account-settings .user-profile {
                margin: 0 0 1rem 0;
                padding-bottom: 1rem;
                text-align: center;
            }

            .account-settings .user-profile .user-avatar {
                margin: 0 0 1rem 0;
            }

            .account-settings .user-profile .user-avatar img {
                width: 90px;
                height: 90px;
                -webkit-border-radius: 100px;
                -moz-border-radius: 100px;
                border-radius: 100px;
            }

            .account-settings .user-profile h5.user-name {
                margin: 0 0 0.5rem 0;
            }

            .account-settings .user-profile h6.user-email {
                margin: 0;
                font-size: 0.8rem;
                font-weight: 400;
                color: #9fa8b9;
            }

            .account-settings .about {
                margin: 2rem 0 0 0;
                text-align: center;
            }

            .account-settings .about h5 {
                margin: 0 0 15px 0;
                color: #007ae1;
            }

            .account-settings .about p {
                font-size: 0.825rem;
            }

            .form-control {
                border: 1px solid #cfd1d8;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                border-radius: 2px;
                font-size: .825rem;
                background: #ffffff;
                color: #2e323c;
            }

            .card {
                background: #ffffff;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border: 0;
                margin-bottom: 1rem;
            }

            #custom-nav {
                background-color: rgb(164, 213, 233);
            }
        </style>
        <script type="text/javascript"></script>
    </div>
    <script type="text/javascript">(function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-49755460-1', 'auto', { 'allowLinker': true });
        ga('require', 'linker');
        ga('linker:autoLink', ['bootdey.com', 'www.bootdey.com', 'demos.bootdey.com']);
        ga('send', 'pageview');</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>

</html>