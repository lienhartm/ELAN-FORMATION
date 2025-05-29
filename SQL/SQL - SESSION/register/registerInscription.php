<?php

    require_once "../app/dao.php";

      if(isset($_POST['submit'])){

        $pdo = new DAO();

        $stagiaire = isset($_POST['stagiaire']) ? $_POST['stagiaire']: '';
        $formation = isset($_POST['formation']) ? $_POST['formation']: '';
        
        $sql = "INSERT INTO inscription (id_stagiaire, id_formation) VALUES (:id_stagiaire, :id_formation)";
        
        $data = [':id_stagiaire' => $stagiaire, ':id_formation' => $formation];
        
        $result = $pdo->executeRequest($sql, $data);

        echo "Session enregistre!";
  
      }

?>
