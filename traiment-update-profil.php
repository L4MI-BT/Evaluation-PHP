<?php require_once "require/connexionbdd.php" ?>
<?php require_once "require/header.php" ?>

<?php 
$email = isset($_SESSION['user']) ? $_SESSION['user'] : null;

$query = $bdd->prepare("SELECT password_ FROM user_ WHERE email_ = :email"); 
$query->bindValue(":email", $email, PDO::PARAM_STR);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

if($user){
    if(password_verify($_POST['acMdp'], $user['password_'])){

        $login = (isset($_POST['login']) && (!empty($_POST['login']))) ? $_POST['login'] : null;
        $newPassword = (isset($_POST['newMdp']) && (!empty($_POST['newMdp']))) ? $_POST['newMdp'] : null;
        $passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);

    }else{
        echo "ancien mot de passe incorrect";
    }

    $queryUpdate = $bdd->prepare("UPDATE user_ SET login_=:login, password_=:password WHERE email_=:email");
    $queryUpdate -> bindValue(":login", $login, PDO::PARAM_STR);
    $queryUpdate -> bindValue(":password", $passwordHash, PDO::PARAM_STR);
    $queryUpdate -> bindValue(":email", $email, PDO::PARAM_STR);

    if($login!==null && $email!==null && $passwordHash!==null){
        $queryUpdate->execute();
    }


}else{
    echo "utilisateur introuvable";
}
?>
<?php require_once "require/footer.php" ?>