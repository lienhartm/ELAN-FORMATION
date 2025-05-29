<h2 style="text-align:center"><b>~~# Liste des formations #~~</b></h2>
<div style='display: flex; flex-wrap: wrap; margin: 10px; '>
<?php 

foreach($sessions->fetchAll() as $session) {?>

    <a href="../controleur/traitement.php?action=listModule&id=<?= $session['titre']?>">
        <figure style="border: 1px brown solid; padding: 4px; margin: 20px;">
            <img src="../image/img_avatar.png" alt="Avatar" style="width:100px;height:100px;">
            <figcaption style="background-color: brown; color: goldenrod; font-style: italic; padding: 2px; text-align: center;">
                <?= $session['titre']?>
            </figcaption>
        </figure>
    </a><br>

<?php } ?>
</div>