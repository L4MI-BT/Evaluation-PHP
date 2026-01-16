<?php require_once "require/connexionbdd.php" ?>
<?php require_once "require/header.php" ?>
<?php 

if(!$_SESSION['user']){
    header('location: index.php');
}
?>
<a href="insert-article.php">Poster un article</a>
<br>
<hr>
<br>
<?php
$idUser = (isset($_SESSION['id_user'])) ? $_SESSION['id_user'] : null;

if($_SESSION['role'] === 'editeur'){
    $query = $bdd->prepare("SELECT * FROM article WHERE id_user=:id_user ORDER BY date_ DESC");
    $query->bindValue("id_user", $idUser, PDO::PARAM_INT);
    $query->execute();

}elseif($_SESSION['role'] === 'admin'){
    $query = $bdd->prepare("SELECT * FROM article ORDER BY date_ DESC");
    $query->execute();

}   
    ?>
    <h2>Articles</h2><br>
    <?php
    foreach ($query as $info) {
    echo "<div>
            <ul>
                <li><h3>{$info['titre_']}</h3></li>
                <br>
                <li><p>{$info['description_']}</p></li>
                <br>
                <li>date de dernière mise à jour: {$info['date_']}</li>
                <li><a href=\"update-article.php?id={$info['id_article']}\">Modifier</a> / <a href=\"delete-article.php?id={$info['id_article']}\">Supprimer</a>
            </ul>
            <hr>
        </div>";
    }


?>

<?php require_once "require/footer.php" ?>