<?php

    require_once "../app/dao.php";

      if(isset($_POST['submit'])){

        $pdo = new DAO();

        $id = isset($_POST['id']) ? $_POST['id']:'';
        $mdp = isset($_POST['mdp']) ? $_POST['mdp']:'';
        $nom = isset($_POST['nom']) ? $_POST['nom']:'';
        $prenom = isset($_POST['prenom']) ? $_POST['prenom']:'';
        $sexe = isset($_POST['sexe']) ? $_POST['sexe']:'';
        $naissance = isset($_POST['naissance']) ? $_POST['naissance']:'';
        $ville = isset($_POST['ville']) ? $_POST['ville']:'';
        $email = isset($_POST['email']) ? $_POST['email']:'';
        $tel = isset($_POST['tel']) ? $_POST['tel']:'';

        $sql = "INSERT INTO stagiaire (identifiant, motdepasse, nom, prenom, sexe, naissance, ville, courriel, telephone) VALUES (:identifiant, :motdepasse, :nom, :prenom, :sexe, :naissance, :ville, :courriel, :telephone)";
        
        $data = [':identifiant' => $id, ':motdepasse' => $mdp, ':nom' => $nom, ':prenom' => $prenom, ':sexe' => $sexe, ':naissance' => $naissance, ':ville' => $ville, ':courriel' => $email, ':telephone' => $tel];
        
        $result = $pdo->executeRequest($sql, $data);

        echo "Stagiaire Enregistrer!";
  
      }

?>


