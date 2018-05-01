<?php
    session_start();
    include "connect_db.php";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>    
        <title>Camagru</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
    </head>
    <body>
        <header class="col-md-12 text-center">
            <p>Hello</p>
        </header>
        <form method="post" action="create_user.php">
            <p>Adresse e-mail</p> <input name="mail" type="mailto" value=""></input>
            <p>Nom d'utilisateur</p> <input name="username" value="" placeholder="Nom"></input>
            <p>Mot de passe</p> <input name="passwd" type="password" value=""></input>
            <p>Confirmer Mot de passe</p> <input name="chk_passwd" type="password" value=""></input>
            <input name="submit" type="submit" value="OK"></input>
        </form>
    </body>
</html>

