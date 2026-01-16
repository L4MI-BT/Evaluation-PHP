<?php require_once "require/connexionbdd.php" ?>

<?php require_once "require/header.php" ?>

<?php
session_start();
session_destroy();

setcookie('login', '', -1);
unset($_COOKIE['login']);

header('Location: index.php');
exit;
?>
<?php require_once "require/footer.php" ?>