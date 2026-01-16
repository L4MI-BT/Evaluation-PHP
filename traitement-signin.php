<?php require_once "require/connexionbdd.php" ?>
<?php require_once "require/header.php" ?>
<?php
$login = (isset($_POST['login']) && (!empty($_POST['login']))) ? $_POST['login'] : null;
$email = (isset($_POST['email']) && (!empty($_POST['email']))) ? $_POST['email'] : null;
$password = (isset($_POST['mdp']) && (!empty($_POST['mdp']))) ? $_POST['mdp'] : null;
$passwordConf = (isset($_POST['confMdp']) && (!empty($_POST['confMdp']))) ? $_POST['confMdp'] : null;
$passwordHash = ($password === $passwordConf) ? password_hash($passwordConf, PASSWORD_DEFAULT) : null;

$querySelect = $bdd->prepare("SELECT email_ FROM user_ WHERE email_=:email");
$querySelect->bindValue(':email', $email, PDO::PARAM_STR);
$querySelect->execute();
$emailTake = $querySelect->fetch(PDO::FETCH_ASSOC);

if(!$emailTake){
    $query = $bdd->prepare("INSERT INTO user_ (login_, email_, password_) VALUES (:login_, :email_, :password_)");
    $query->bindValue(':login_', $login, PDO::PARAM_STR);
    $query->bindValue(':email_', $email, PDO::PARAM_STR);
    $query->bindValue(':password_', $passwordHash, PDO::PARAM_STR);

    if($login!==null && $email!==null && $passwordHash!==null){
        $query->execute();
        echo "Inscription réussi ! Bienvenue $login ";
        $_SESSION['user'] = $email;
        echo "retour à <a href=\"index.php\">l'acceuil</a>";
        setcookie('login', $login);

        $queryInfo = $bdd->prepare("SELECT * FROM user_ WHERE email_ = :email"); 
        $queryInfo->bindValue(":email", $email, PDO::PARAM_STR);
        $queryInfo->execute();
        $user = $queryInfo->fetch(PDO::FETCH_ASSOC);
        $_SESSION['role'] = $user['role'];
        $_SESSION['id_user'] = $user['id_user'];
    }
}else{
    echo "Email déjà existante, merci de vous <a href=\"log-in.php\">connecter</a>";
}
?>

<?php require_once "require/footer.php" ?>