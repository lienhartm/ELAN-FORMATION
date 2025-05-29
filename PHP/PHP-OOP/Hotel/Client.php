<?php

    //  $client0 = new Client ($nom, $prenom);

    class Client {

        private $nom;
        private $prenom;
        private $reservations;
        private $hotel;

        public function __construct($nom, $prenom ) {

            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->reservations = [];
            $this->hotel = [];

        }

        public function addReservation(Reservation $reservation) {
            $this->reservations[] = $reservation;
        }
        public function addHotel(Hotel $hotel) {
            $this->hotel[] = $hotel;
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
        public function __toString() {
            return "";
        }
        // lister les reservations d'un client
        public function listeReservation_client() {
            $totalPrix = 0;
            $compteur = 0;
            $list = "";
            $client = "Réservations de ".$this->prenom." ".$this->nom;
            foreach($this->reservations as $reservation) {
                $depart = date_format(date_create($reservation->getDate_depart()),"d");
                $arrivee = date_format(date_create($reservation->getDate_arrivee()),"d");
                $diff = $depart-$arrivee;
                // $nb_jour = date_format($diff, "d");
                $totalPrix += ($reservation->getChambre()->getPrix()*$diff);
                $compteur++;
                $list .= "Hotel : ".$reservation->getHotel()->getNom()." / ".$reservation->getChambre()->getNom()."(2 lits - ".$reservation->getChambre()->getPrix()." € - Wifi : ".$reservation->getChambre()->getWifi().") du ".$reservation->getDate_arrivee()." au ".$reservation->getDate_depart()."<br>";
            }
            return $client."<br>".$compteur." réservations<br><br>".$list."<br>Total : ".$totalPrix." €";
        }
    }

?>