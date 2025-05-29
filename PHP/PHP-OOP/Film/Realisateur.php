<?php
    
    require_once "Person.php";

    class Realisateur extends Person {

        private $films;

        public function __construct ($nom, $prenom, $sexe, $date_de_naissance) {

            parent::__construct($nom, $prenom, $sexe, $date_de_naissance);
            $this->films = [];  // table for the class repertories in this
            
        }
        
        public function addFilm(Film $film) {
            $this->films[] = $film;
            // array push all instance of the class
        }
        // function qui permet de lister les films d'après un réalisateur
        public function filmographie() {
            $filmo = "<b><u>Nom du réalisateur</u></b> : ".$this->nom."<br><br>";
            foreach($this->films as $film){
                $filmo .= $film."<br><br>";
            }
            return $filmo;
        }

   
    public function __toString() {
        return parent::__toString();
   }
}

?>