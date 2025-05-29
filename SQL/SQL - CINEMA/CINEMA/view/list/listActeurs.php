<?php

ob_start();

?>

<h2 style="text-align:center"><b>~~# Liste des acteurs #~~</b></h2>
<div style='display: flex; flex-wrap: wrap; margin: 10px; '>
<?php 

foreach($acteurs->fetchAll() as $acteur) {?>


    <a href="index.php?action=detailActeur&id=<?= $acteur['id_acteur']?>">
        <figure style="border: 1px brown solid; padding: 4px; margin: 20px;">
            <img src="image/img_avatar.png" alt="Avatar" style="width:100px;height:100px;">
            <figcaption style="background-color: brown; color: goldenrod; font-style: italic; padding: 2px; text-align: center;">
                <?= $acteur['nom'] . " " . $acteur['prenom'] ?>
            </figcaption>
        </figure>
    </a><br>

<?php } ?>
</div>
<?php

$contenu  = ob_get_clean();

require "view/template.php";

?>
