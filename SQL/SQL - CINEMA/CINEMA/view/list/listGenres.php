<?php

ob_start();

?>

<h2 style="text-align:center"><b>~~# Liste des genres #~~</b></h2>
<div style='display: flex; flex-wrap: wrap; margin: 10px; '>
<?php 

foreach($genres->fetchAll() as $genre) {?>

    <a href="index.php?action=detailGenre&id=<?= $genre['id_genre']?>">
        <figure style="border: 1px brown solid; padding: 4px; margin: 20px;">
            <img src="image/img_avatar.png" alt="Avatar" style="width:100px;height:100px;">
            <figcaption style="background-color: brown; color: goldenrod; font-style: italic; padding: 2px; text-align: center;">
                <?= $genre['libelle']?>
            </figcaption>
        </figure>
    </a><br>

<?php } ?>
</div>
<?php

$contenu  = ob_get_clean();

require "view/template.php";

?>

