<?php
    setcookie("username", "", time() - 60);
    setcookie("email", "", time() - 60);
    session_start();
    session_destroy();

    header("location:index.php");
?>