<?php
// session_start();

// Redirect to login if not logged in
// if (!isset($_SESSION['role']) || !isset($_SESSION['id']) || !isset($_SESSION['username'])) {
//     $em = "Please login first";
//     header("Location: login.php?error=" . urlencode($em));
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <input type="checkbox" id="checkbox">
    <?php include "inc/header.php" ?>
    <div class="body">
        <?php include "inc/nav.php" ?>

        <section class="section-1">
            Manage Users
        </section>
    </div>
</body>
</html>
