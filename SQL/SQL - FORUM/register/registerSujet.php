<?php

    session_start();

    require_once "../app/dao.php";

      if(isset($_POST['submit'])){

        $pdo = new DAO();

        $titre = isset($_POST['sujet']) ? $_POST['sujet'] : '';
        $user = isset($_POST['user']) ? $_POST['user'] : '';
        $creation = date("Y-m-d H:i:s");

        $sql = "INSERT INTO sujet (titre, auteur, creation) VALUES (:titre, :auteur, :creation)";
        
        $data = [':titre' => $titre, ':auteur' => $user, ':creation' => $creation];
        
        $result = $pdo->executeRequest($sql, $data);

        echo "Sujet enregistre!";
  
      }

?>