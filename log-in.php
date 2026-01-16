
<?php require_once "require/header.php" ?>
<main>
    <form action="traitement-login.php" method="POST" onsubmit="return formConnexion()">
        <label for="login-connexion">Login</label>
        <input type="text" name="login" id="login-connexion">
        <label for="email-connexion">Email</label>
        <input type="email" id="email-connexion" name="email">
        <label for="mdp-connexion">Mot de passe</label>
        <input type="password" name="mdp" id="mdp-connexion">
        <input type="submit" value="Se connecter">
    </form>
    <br>
    Vous n'avez pas encore de compte ? <a href="sign-in.php">Insris-toi</a>
</main>

<?php require_once "require/footer.php" ?>