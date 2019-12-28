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
                <form action="forum.php" method="POST">
                    <label for="">Nom</label>
                    <input type="text" placeholder="Nom complet">
                    <label for="">Matricule</label>
                    <input type="text" placeholder="ex : 18BN037">
                    <label for="">Email</label>
                    <input type="email" placeholder="ex : 18bn037@esisalama.org">
                    <label for="">Mot de passe</label>
                    <input type="password">
                    <label for="">Confirmer le mot de passe</label>
                    <input type="password">
                </form>
                <button class="btn-1">S'inscrire</button>
            </div>
            
        </div>
    </div>
</body>
</html>