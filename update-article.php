<?php require_once "require/connexionbdd.php" ?>
<?php require_once "require/header.php" ?>

<?php 

if(isset($_SESSION['user'])){
    $id = $_GET['id'];
    $query = $bdd->prepare("SELECT titre_, description_, id_article FROM article WHERE id_article=:id");
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $results = $query -> fetch(PDO:: FETCH_ASSOC);
    ?>
    <form action="traitement_update_article.php" onsubmit="return formUpdateArticle()">
        <label for="title-update">Titre(*)</label>
        <input type="text" name="title" id="title-update" value="<?php echo $results['titre_'] ?>">
        <label for="descript-update">Description</label>
        <textarea name="descript" id="descript-update"><?php echo $results['description_'] ?></textarea>
        <label for="majDate-update">Date de mise à jour</label>
        <input type="date" name="majDate" id="majDate-update">
        <input type="hidden" name="id_article" value="<?php echo $results['id_article'] ?>">
        <input type="submit" value="Modifier" >
    </form>
    <?php
}else{
    header('location: index.php');
    exit;
} 
?>
<?php require_once "require/footer.php" ?>