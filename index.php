<?php
session_name('pascal');
session_start();
if(isset($_SESSION['name']) and !empty($_SESSION['name'])){
    header('location:connecter.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenu</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    html, body{
        height: 100%;
    }
</style>
<body>
    <div class="welcome">
        <div class="welcome-text">
            <p>Bienvenue sur L1Forum</p>
        </div>
        <div class="welcome-btn">
            <a href="connexion.php"><button type="submit" class="btn-1">Commencer</button></a>
        </div>
    </div>
</body>
</html>