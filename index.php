<?php require_once "require/connexionbdd.php" ?>
<?php require_once "require/header.php" ?>

<?php 

if(isset($_SESSION['user'])){
    echo "<a href=\"gestion-article.php\">gestionnaire des articles</a>";
    echo "<br><hr><br>";
}


$query = $bdd->prepare("SELECT * FROM article LEFT JOIN user_ ON article.id_user = user_.id_user ORDER BY date_ DESC");
$query->execute();

foreach ($query as $info) {
    echo "<div class=\"article\">
            <ul>
                <li><h3>{$info['titre_']}</h3></li>
                <br>
                <li><p class=\"active description\">{$info['description_']}</p></li>
                <br>
                <li>publié par {$info['login_']}</li>
                <li>date de dernière mise à jour: {$info['date_']}</li>
            </ul>
            <button class=\"btn\">Voir plus</button>
            <hr>
        </div>";
}

?>

<?php require_once "require/footer.php" ?>