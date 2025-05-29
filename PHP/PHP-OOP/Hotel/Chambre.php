<?php

    //  $chambre0 = new Chambre (Hotel $hotel, $nom, $prix, $wifi, $statut);

    class Chambre {

        private string $nom;
        private float $prix;
        private bool $wifi;
        private bool $statut;
        private Hotel $hotel;

        public function __construct(Hotel $hotel, $nom, $prix, $wifi, $statut) {

            $this->nom = $nom;
            $this->prix = $prix;
            $this->wifi = $wifi;
            $this->statut = $statut;
            $this->hotel = $hotel;
            $this->hotel->addChambre($this);
            $this->reservations = [];

        }

        public function addReservation(Reservation $reservation) {
            $this->reservations[] = $reservation;
        }

        public function getNom() {
            return $this->nom;
        }
        public function setNom($nom) {
            $this->nom = $nom;
        }
        public function getPrix() {
            return $this->prix;
        }
        public function setPrix($prix) {
            $this->prix = $prix;
        }
        public function getWifi() {
            if($this->wifi == 0) {
                return "non";
            }
            else {
                return "oui";
            }
        }
        public function setWifi($wifi) {
            $this->wifi = $wifi;
        }
        public function getStatut() {
            if($this->statut == 0) {
                return "disponible";
            }
            else {
                return "reservee";
            }
        }
        public function setStatut($statut) {
            $this->statut = $statut;
        }
        public function __toString() {
            return "";
        }

    }

?>
