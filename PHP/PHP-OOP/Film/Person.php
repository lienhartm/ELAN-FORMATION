<?php

    class Person {

        protected $nom;
        protected $prenom;
        protected $sexe;
        protected $date_de_naissance;
   

        public function __construct ($nom, $prenom, $sexe, $date_de_naissance) {

            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->sexe = $sexe;
            $this->date_de_naissance = $date_de_naissance;
        
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
        public function getSexe() {
            return $this->sexe;
        }
        public function setSexe($sexe) {
            $this->sexe = $sexe;
        }
        public function getDate_de_naissance() {
            return $this->date_de_naissance;
        }
        public function setDate_de_naissance($date_de_naissance) {
            $this->date_de_naissance = $date_de_naissance;
        }
        public function __toString() {
            return "Nom : ".$this->getNom()."<br>Prenom : ".$this->getPrenom()."<br>Sexe : ".$this->getSexe()."<br>Date de naissance : ".$this->getDate_de_naissance();
        }

    }


