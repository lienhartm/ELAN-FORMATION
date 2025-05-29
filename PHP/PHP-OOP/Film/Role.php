<?php

    class Role {

        protected $nom;
        private $castings;


        public function __construct ($nom) {

            $this->nom = $nom;
            $this->castings = [];
            
        }

        public function addCasting(Casting $casting) {
            $this->castings[] = $casting;
            // array push
        }

        public function getRole() {
            return $this->nom;
        }
        public function setRole($role){
            $this->role = $role;
        }
        public function __toString() {
            return "Rôle : ".$this->getRole();
        }
        // function 'acteur' liste les acteurs ayant ayant eu le rôle de // listActeur_by_role
        public function listActeur_by_role() {
            $castrole = "Les acteurs jouant dans le rôle de : ".$this->nom."<br><br>";
            foreach($this->castings as $casting) {
                $castrole .= $casting->getActeur()."<br><br>";
            }
            return $castrole;
        }
    }

?>