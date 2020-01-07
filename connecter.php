<?php
session_name('pascal');
session_start();
unset($_SESSION['name']);
header('location:connexion.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="src/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEMBRE</title>
</head>
<body>
    
</body>
</html>