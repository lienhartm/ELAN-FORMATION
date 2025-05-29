<h2 style="text-align:center"><b>~~# Liste des stagiaires #~~</b></h2>
<div style='display: flex; flex-wrap: wrap; margin: 10px; '>
<?php 

foreach($stagiaires->fetchAll() as $stagiaire) {?>


    <a href="../controleur/traitement.php?action=detailStagiaire&id=<?= $stagiaire['id_stagiaire']?>">
        <figure style="border: 1px brown solid; padding: 4px; margin: 20px;">
            <img src="../image/img_avatar.png" alt="Avatar" style="width:100px;height:100px;">
            <figcaption style="background-color: brown; color: goldenrod; font-style: italic; padding: 2px; text-align: center;">
                <?= $stagiaire['nom'] . " " . $stagiaire['prenom'] ?>
            </figcaption>
        </figure>
    </a><br>

<?php } ?>
</div>