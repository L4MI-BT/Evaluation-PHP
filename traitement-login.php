<?php require_once "require/connexionbdd.php" ?>
<?php require_once "require/header.php" ?>

<?php 
$query = $bdd->prepare("SELECT * FROM user_ WHERE email_ = :email"); 
$query->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

if($user){
    if(password_verify($_POST['mdp'], $user['password_'])){
        $_SESSION['user'] = $user['email_'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['id_user'] = $user['id_user'];
        setcookie('login', $user['login_']);
        header('location: index.php');
        exit;
    }else{
        echo "mot de passe incorrecte";
    }
}else{
    echo "utilisateur non trouvé";
}
?>

<?php require_once "require/footer.php" ?>