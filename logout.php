<?php
    session_start();

    session_unset();
    session_destroy();

    $em = "First login";
    header("Location: login.php");
    exit();
?>