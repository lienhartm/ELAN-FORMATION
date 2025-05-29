<?php

require_once "app/dao.php";

class RealisateurControlleur {

    public function listRealisateurs() {

        $pdo = new DAO();

        $requete = "SELECT id_realisateur, nom, prenom FROM realisateur ORDER BY nom ASC";

        $realisateurs = $pdo->executeRequest($requete);

        require "view/list/listRealisateurs.php";

    }

    public function detailRealisateur() {

        $pdo = new DAO();
        
        $requete = "SELECT id_realisateur, nom, prenom, sexe, naissance FROM realisateur";

        $realisateurs = $pdo->executeRequest($requete);
        
        $pdo = new DAO();

        $requete1 = "SELECT id_realisateur, nom , date_de_sortie FROM film";

        $filmo = $pdo->executeRequest($requete1);

        require "view/detail/detailRealisateur.php";

    }
}

?>