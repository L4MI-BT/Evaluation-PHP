<?php require_once "require/connexionbdd.php" ?>
<?php require_once "require/header.php" ?>

<?php

$idUser = (isset($_SESSION['id_user'])) ? $_SESSION['id_user'] : null;
$titre = (isset($_GET['title']) && (!empty($_GET['title']))) ? $_GET['title'] : null;
$descript = (isset($_GET['descript']) && (!empty($_GET['descript']))) ? $_GET['descript'] : " ";
$date = (isset($_GET['date']) && (!empty($_GET['date']))) ? $_GET['date'] : null;

$querySelect = $bdd->prepare("SELECT titre_ FROM article WHERE titre_=:titre");
$querySelect->bindValue(':titre', $titre, PDO::PARAM_STR);
$querySelect->execute();
$titreTake = $querySelect->fetch(PDO::FETCH_ASSOC);

if(!$titreTake){
    $query = $bdd->prepare("INSERT INTO article (titre_, description_, date_, id_user) VALUES (:titre, :description, :date, :id_user)");
    $query->bindValue(':titre', $titre, PDO::PARAM_STR);
    $query->bindValue(':description', $descript, PDO::PARAM_STR);
    $query->bindValue(':date', $date, PDO::PARAM_STR);
    $query->bindValue(':id_user', $idUser, PDO::PARAM_INT);

    if($titre!==null && $date!==null && $idUser!=null){
        $query->execute();
        echo "ajout reussi";
        echo "<a href=\"gestion-article.php\">Retour au gestionnaire des articles";
    }else{
        echo "un problème est survenue lors de l'ajout";
    }
}else{
    echo "le titre est déjà utilisé pour un autre article";
}
?>

<?php require_once "require/footer.php" ?>