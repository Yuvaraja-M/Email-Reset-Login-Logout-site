<?php
    require 'functions.php';
    if(!isset($_SESSION["user"])) {
        header("location: login.php");
        exit();
    }

    if(isset($_GET["logout"])) {
        logoutUser();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Account</title>
</head>
<body>
    <div class="page">
        <h2>Hello <?php echo $_SESSION["user"]; ?></h2>
        <a href="?logout">Logout</a>
    </div>
</body>