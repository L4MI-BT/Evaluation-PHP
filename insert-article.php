<?php require_once "require/connexionbdd.php" ?>
<?php require_once "require/header.php" ?>
<?php 
if(isset($_SESSION['user'])){
    ?>
    <h1>Ajouter un article</h1>
    <form action="traitement_add_article.php" onsubmit="return formInsert()">
        <label for="title-insert">Titre(*)</label>
        <input type="text" name="title" id="title-insert" required>
        <label for="descript-insert">Description</label>
        <textarea name="descript" id="descript-insert"></textarea>
        <label for="date-insert">Date</label>
        <input type="date" id="date-insert" name="date">
        <input type="submit" value="Ajouter">
    </form>
    <?php
}else{
    header('location: index.php');
    exit;
}
?>

<?php require_once "require/footer.php" ?>