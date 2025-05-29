<?php

ob_start();

foreach($realisateurs->fetchAll() as $realisateur) { 
    if($realisateur['id_realisateur']===$_GET['id']){ ?>

        <figure style="border: 1px brown solid; padding: 4px; margin: 20px;float: left;margin-right: 50px;">
            <img src="image/img_avatar.png" alt="Avatar" style="width:100px;height:100px;">
        </figure>
        <h1><?= $realisateur['nom']." ".$realisateur['prenom'] ?></h1>
        <ul>
        <li>Ne le : <?= $realisateur['naissance'] ?></li>
        <li>Sexe : <?= $realisateur['sexe'] ?></li>
        </ul><br>
   
        <?php 

foreach($filmo->fetchAll() as $film) {
    if($film['id_realisateur']===$_GET['id']){  ?>
    
    <p style="margin-left:50px;">A réalisé <?= $film['nom'] ?> qui est sortie le <?= $film['date_de_sortie'] ?></p>

<?php }}  }} 

$contenu  = ob_get_clean();

require "view/template.php";

?>
