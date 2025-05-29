<?php

    require_once "../app/dao.php";

      if(isset($_POST['submit'])){

        $pdo = new DAO();

        $titre = isset($_POST['titre']) ? $_POST['titre']:'';
        $chapitre = isset($_POST['chapitre']) ? $_POST['chapitre']:'';
        $resumer = isset($_POST['resumer']) ? $_POST['resumer']:'';
        $debut = isset($_POST['debut']) ? $_POST['debut']:'';
        $fin = isset($_POST['fin']) ? $_POST['fin']:'';
        $nb_place = isset($_POST['nb_place']) ? $_POST['nb_place']:'';

        $sql = "INSERT INTO formation (titre, chapitre, resumer, debut, fin, nb_place) VALUES (:titre, :chapitre, :resumer, :debut, :fin, :nb_place)";
        
        $data = [':titre' => $titre, ':chapitre' => $chapitre, ':resumer' => $resumer, ':debut' => $debut, ':fin' => $fin, ':nb_place' => $nb_place];
        
        $result = $pdo->executeRequest($sql, $data);

        echo "Module Enregistrer!";
  
      }

?>