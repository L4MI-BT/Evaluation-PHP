<?php require_once "require/connexionbdd.php" ?>
<?php require_once "require/header.php" ?>
<?php

$id = $_GET['id_article'];
$title = $_GET['title'];
$descript = $_GET['descript'];
$majDate = $_GET['majDate'];


$query = $bdd->prepare("UPDATE article SET titre_=:titre, description_=:description, date_=:date WHERE id_article=:id");
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->bindValue(':titre', $title, PDO::PARAM_STR);
$query->bindValue(':description', $descript, PDO::PARAM_STR);
$query->bindValue(':date', $majDate, PDO::PARAM_STR);
$query->execute();
echo "modification réussi avec succées"
?>
<a href="gestion-article.php">Retour au gestionnaire des articles</a>

<?php require_once "require/footer.php" ?>