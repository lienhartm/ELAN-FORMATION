<?php

require_once "../app/dao.php";

class StagiaireControleur {

    public function listStagiaire() {

        $pdo = new DAO();

        $requete = "SELECT * FROM stagiaire ORDER BY nom ASC";

        $stagiaires = $pdo->executeRequest($requete);

        require "../view/list/listStagiaire.php";

    }
    
    public function detailStagiaire($id) {

        $pdo = new DAO();

        $requete = "SELECT * FROM stagiaire ORDER BY nom ASC";

        $stagiaires = $pdo->executeRequest($requete);

        $pdo = new DAO();

        $requete1 = "SELECT 
                    f.id_formation as fidformation, f.titre as ftitre, f.chapitre as fchapitre, f.resumer as fresumer, f.debut as fdebut, f.fin as ffin, f.nb_place as fnbplace, 
                    i.id_formation as iidformation, i.id_stagiaire as iidstagiaire, i.id_formation as iidformation, 
                    s.id_stagiaire as sidstagiaire, s.nom as snom, s.prenom as sprenom, s.sexe as ssexe, s.naissance as snaissance, s.ville as sville, s.courriel as scourriel, s.telephone as stelephone 
                    FROM formation AS f 
                    INNER JOIN inscription AS i ON f.id_formation = i.id_formation
                    INNER JOIN stagiaire AS s ON s.id_stagiaire = i.id_stagiaire
                    WHERE s.id_stagiaire = :id_stagiaire";

        $data = [':id_stagiaire' => $id];

        $stages = $pdo->executeRequest($requete1, $data);

        require "../view/detail/detailStagiaire.php";

    }

}

?>
<!--

-->