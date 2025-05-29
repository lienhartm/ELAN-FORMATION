<h2 style="text-align:center"><b>~~# Liste des sujets #~~</b></h2>
<?php 

foreach($sujets->fetchAll() as $sujet) {?>


    <a href="../../controleur/traitement.php?action=detailSujet&id=<?= $sujet['id_sujet'] ?>" target="content">
        <p><?= $sujet['titre'] ?></p>
    </a><br>

<?php } ?>