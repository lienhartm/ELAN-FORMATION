<?php

require_once "../app/dao.php";

class SessionControleur {

    public function listSession() {
    
        $pdo = new DAO();

        $requete = "SELECT titre from formation GROUP BY titre";

        $sessions = $pdo->executeRequest($requete);

        require "./../view/list/listSession.php";

    }

    public function listModule($id) {

        $pdo = new DAO();

        $requete = "SELECT * FROM formation WHERE titre=:titre ORDER BY chapitre ASC";

        $data = [':titre' => $id];

        $sessions = $pdo->executeRequest($requete, $data);

        require "./../view/list/listModule.php";

    }

    public function detailModule($id) {

        $pdo = new DAO();
        
        $requete = "SELECT * FROM formation WHERE id_formation=:id_formation";

        $data = [':id_formation' => $id];

        $sessions = $pdo->executeRequest($requete, $data);
                       
        require "./../view/detail/detailModule.php";

    }
}

?>