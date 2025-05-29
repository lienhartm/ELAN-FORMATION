<?php

    require_once "../app/dao.php";

    class SujetControleur {

        function listSujet() {

            $pdo = new DAO();

            $requete = "SELECT id_sujet, titre, auteur, creation  FROM sujet ORDER BY creation ASC";

            $sujets = $pdo->executeRequest($requete);

            require_once "./../view/list/listSujet.php";
            //  Warning: require(./../view/list/listSujet.php): failed to open stream: No such file or directory in C:\laragon\www\FORUM\controleur\SujetControleur.php on line 15
            //  Fatal error: require(): Failed opening required './../view/list/listSujet.php' (include_path='.;C:/laragon/etc/php/pear') in C:\laragon\www\FORUM\controleur\SujetControleur.php on line 15

        }

        function detailSujet($id) {

            $pdo = new DAO();

            $requete = "SELECT * FROM sujet ORDER BY creation ASC WHERE id_sujet = :id_sujet";

            $data = [':id_sujet' => $id];

            $sujets = $pdo->executeRequest($requete, $data);

            $pdo = new DAO();

            $requete1 = "SELECT * FROM messager ORDER BY creation ASC WHERE id_sujet = :id_sujet ";

            $data1 = [':id_sujet' => $id];

            $messages = $pdo->executeRequest($requete1, $data1);

            require "./../view/detail/detailSujet.php";
            
        }

    }

?>