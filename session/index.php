<?php
session_start() ;

if($_SESSION["check"] != 1){
    header("location:login.php") ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="about.php">About</a></li>
        <li><a href="exit.php">Log out</a></li>

    </ul>

    <h1>Home page</h1>
</body>
</html>