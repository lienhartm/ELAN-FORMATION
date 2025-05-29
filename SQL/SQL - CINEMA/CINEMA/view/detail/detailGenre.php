<?php

ob_start();

?>

<?php 
$libelle = True;
foreach($films->fetchAll() as $film) {
    if($film['id_genre']===$_GET['id']) {
        if ($libelle){
            echo    "<h2 style=' text-align: center'><b>~~# " . $film['libelle'] . " #~~</b></h2>",
                    "<div style=' display: flex; flex-wrap: wrap; margin: 10px; '>";
            $libelle = False;
        }?>

        
        <a href="index.php?action=detailFilm&id=<?= $film['id_film']?>">
            <figure style="border: 1px brown solid; padding: 4px; margin: 20px;">
                <img src="image/img_avatar.png" alt="Avatar" style="width:100px;height:100px;">
                <figcaption style="background-color: brown; color: goldenrod; font-style: italic; padding: 2px; text-align: center;">
                    <?= $film['nom']?>
                </figcaption>
            </figure>
        </a><br>

<?php } }

echo "</div>";

$contenu  = ob_get_clean();

require "view/template.php";

?>

