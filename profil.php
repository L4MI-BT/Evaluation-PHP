<?php require_once "require/connexionbdd.php" ?>
<?php require_once "require/header.php" ?>

<?php 
if(isset($_SESSION['user'])){

    $email = $_SESSION['user'];

    $query = $bdd->prepare("SELECT login_, password_ FROM user_ WHERE email_=:email");
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $results = $query -> fetch(PDO:: FETCH_ASSOC);
    ?>
    <form action="traiment-update-profil.php" method="POST" onsubmit="return formModifProfil()">
        <label for="login-modif">Nouveau login</label>
        <input type="text" name="login" id="login-modif" value="<?php echo $results['login_'] ?>">
        <label for="acMdp-modif">ancien Mot de passe</label>
        <input type="password" name="acMdp" id="acMdp-modif">
        <label for="newMdp-modif">Nouveau mot de passe</label>
        <input type="password" name="newMdp" id="newMdp-modif">
        <input type="submit" value="Modifier">
    </form>
<?php
}else{
    header('location: index.php');
    exit;
}
?>
<?php require_once "require/footer.php" ?>