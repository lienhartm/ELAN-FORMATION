<?php

  session_start();

    require_once "../app/dao.php";

      if(isset($_POST['submit'])){

        $pdo = new DAO();

        $texte = isset($_POST['texte']) ? $_POST['texte'] : '';
        $user = isset($_POST['user']) ? $_POST['user'] : '';
        $creation = date("Y-m-d H:i:s");
        $idsujet = isset($_POST['id']) ? $_POST['id'] : '';

        $sql = "INSERT INTO messager (texte, auteur, creation, id_sujet) VALUES (:texte, :auteur, :creation, id_sujet)";
        
        $data = [':texte' => $texte, ':auteur' => $user, ':creation' => $creation, ':id_sujet' => $idsujet];
        
        $result = $pdo->executeRequest($sql, $data);

        echo "Message enregistre!";

      }

?>