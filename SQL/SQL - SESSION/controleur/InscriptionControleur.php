<?php

    require_once "../app/dao.php";

    class InscriptionControleur {

        public function listInscription() {

            $pdo = new DAO();

            $requete = "SELECT id_stagiaire, nom, prenom  FROM stagiaire ORDER BY nom ASC";

            $listStagiaire = $pdo->executeRequest($requete);

            $pdo = new DAO();

            $requete1 = "SELECT id_formation, titre, chapitre FROM formation ORDER BY titre ASC";

            $listFormation = $pdo->executeRequest($requete1);

            require "./../view/form/formInscription.php";

        }
    }

?>
