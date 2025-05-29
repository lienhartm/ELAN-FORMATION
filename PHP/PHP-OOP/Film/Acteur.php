<?php

    require_once "Person.php";

    // require va appeler le fichier et s'il ne le trouve pas , il fera une fatale error

    // require once , va utiliser le fichier et le rendre disponible après utilisation pour un autre fichier

    class Acteur extends Person {
        
        private $casting;
        
        public function __construct ($nom, $prenom, $sexe, $date_de_naissance) {
            // héritage de la classe Person
            parent::__construct($nom, $prenom, $sexe, $date_de_naissance);
            // mise en place d'une table 'casting'
            $this->casting = [];
        // getter / setter 
        }
        public function getNom() {
            return $this->nom;
        }
        public function setNom($nom) {
            $this->nom = $nom;
        }
        public function getPrenom() {
            return $this->prenom;
        }
        public function setPrenom($prenom) {
            $this->prenom = $prenom;
        }
        // fonction 'addCasting' qui appel la table 'casting' pour cette même class
        public function addCasting(Casting $casting) {
            $this->casting[] = $casting;
            // array push
        }
        // fonction pour connaître la filmographie d'une personne ici un 'acteur'
        public function filmographie() {
            $filmo = "<b><u>L'acteur</u></b> : ".$this->nom." ".$this->getPrenom()." a joué dans les films suivants :<br><br>";
            foreach($this->casting as $casting){ // parcours de la table 'casting'
                $filmo .= $casting->getFilm()."<br><br>";
            }
            return $filmo;  // retour de la concaténation de '$filmo'
        }
   
        public function __toString() {
            return parent::__toString();
        }

}

?>