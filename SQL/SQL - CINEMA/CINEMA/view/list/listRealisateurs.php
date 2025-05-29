<?php

ob_start();

?>

<h2 style="text-align:center"><b>~~# Liste des realisateurs #~~</b></h2>
<div style='display: flex; flex-wrap: wrap; margin: 10px; '>
<?php 

foreach($realisateurs->fetchAll() as $realisateur) {?>

    <a href="index.php?action=detailRealisateur&id=<?= $realisateur['id_realisateur']?>">
        <figure style="border: 1px brown solid; padding: 4px; margin: 20px;">
            <img src="image/img_avatar.png" alt="Avatar" style="width:100px;height:100px;">
            <figcaption style="background-color: brown; color: goldenrod; font-style: italic; padding: 2px; text-align: center;">
                <?= $realisateur['nom'] . " " . $realisateur['prenom'] ?>
            </figcaption>
        </figure>
    </a><br>

<?php } ?>
</div>
<?php

$contenu  = ob_get_clean();

require "view/template.php";

?>
