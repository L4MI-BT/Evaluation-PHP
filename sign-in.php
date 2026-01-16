<?php require_once "require/header.php" ?>

<main>
    <form action="traitement-signin.php" method="POST" onsubmit="return formInscript()">
        <label for="login-inscription">Login</label>
        <input type="text" name="login" id="login-inscription" required>
        <label for="email">Email</label>
        <input type="email-inscription" id="email-inscription" name="email" required>
        <label for="mdp-inscription">Mot de passe</label>
        <input type="password" name="mdp" id="mdp-inscription" required>
        <label for="confMdp-inscription">Confirmer votre mot de passe</label>
        <input type="password" name="confMdp" id="confMdp-inscription" required>
        <input type="submit" value="S'inscrire">
    </form>
</main>

<?php require_once "require/footer.php" ?>