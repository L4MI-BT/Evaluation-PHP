<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <base href="http://dev.lucasbt/ecf_back/">
    <title>Eco pratique</title>
</head>
<body>
    <header>
        <h1><a href="index.php">Eco pratique</a></h1>
        <?php 
        session_start();
        if(isset($_SESSION['user'])){
            ?>
            <nav>
                Bonjour, <a href="profil.php"><?php echo "{$_COOKIE['login']} " ?></a>
                / <a href="deconnexion.php">deconnexion</a>
            </nav>
            <?php 
        }else{
            ?>
            <nav>
                <a href="log-in.php">Se connecter</a>
                <a href="sign-in.php">Se créer un compte</a>
            </nav>
            <?php
        }
        ?>
    </header>
    
