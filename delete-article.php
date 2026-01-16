<?php require_once "require/connexionbdd.php" ?>
<?php require_once "require/header.php" ?>
<?php
if(isset($_SESSION['user'])){
    $id = $_GET['id'];
    if(isset($_GET["id"]) && !empty($_GET["id"])) {
        $query = $bdd->prepare("DELETE FROM article WHERE id_article=:id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query -> execute();
        echo "lien supprimé";
    }

}else{
    header('location: index.php');
    exit;
}
?>
<a href="gestion-article.php">Retour au gestionnaire des articles</a>

<?php require_once "require/footer.php" ?>