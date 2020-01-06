<?php
namespace src\session;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>L1Forum - Créer un compte</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body, html{
        height: 100%;
    }
    body{
        background: #f8f8f8;
    }
    .bloc-page{
        height: 90%;
        margin: 10px 0px;
    }
</style>
<body>
    <div class="bloc-page">
        <div class="main-side-auto">
            <h1>Créer un compte gratuitement</h1>
            <p class="small-title">Trouvez vos réponses</p>
            <div class="form">
                <form action="src\authentification.php" method="POST">
                    <label for="">Nom</label>
                    <input type="text" placeholder="Nom complet" name="name">
                    <label for="">Matricule</label>
                    <input type="text" placeholder="ex : 18BN037" name="matricule">
                    <label for="">Email</label>
                    <input type="email" placeholder="ex : 18bn037@esisalama.org" name="email">
                    <label for="">Mot de passe</label>
                    <input type="password" name="passe">
                    <label for="">Confirmer le mot de passe</label>
                    <input type="password"  name="confirm">
                    <input type="submit" value="s'inscrire">
                    <button type="submit" class="btn-1">S'inscrire</button>
                </form>
                
            </div>
            
        </div>
    </div>
</body>
</html>