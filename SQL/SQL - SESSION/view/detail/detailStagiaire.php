<?php foreach($stagiaires->fetchAll() as $stagiaire) {
        if($stagiaire['id_stagiaire']===$_GET['id']){ ?>

        <div style="float:left;">
        <figure style="border: 1px brown solid; padding: 4px; margin: 20px;float: left;margin-right: 50px;">
            <img src="../image/img_avatar.png" alt="Avatar" style="width:100px;height:100px;">
        </figure>
        <h1><?= $stagiaire['nom']." ".$stagiaire['prenom'] ?></h1>
        <ul>
        <li>Telephone : <?= $stagiaire['telephone'] ?></li>
        <li>Courriel : <?= $stagiaire['courriel'] ?></li>
        <li>Ville : <?= $stagiaire['ville'] ?></li>
        <li>Ne le : <?= $stagiaire['naissance'] ?></li>
        <li>Sexe : <?= $stagiaire['sexe'] ?></li>
        </ul><br>

<?php   foreach($stages->fetchAll() as $stage) {
          if($stage['iidstagiaire']===$_GET['id']){ ?>
        
        <p style="margin-left:50px;">Session : <?= $stage['ftitre'] ?> Module : <?= $stage['fchapitre'] ?> Du <?= $stage['fdebut'] ?> au <?= $stage['ffin'] ?></p>

<?php }}}} ?>

