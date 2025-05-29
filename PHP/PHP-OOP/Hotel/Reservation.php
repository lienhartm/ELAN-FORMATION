<?php

    //  $reservation0 = new Reservation (Client $client, Hotel $hotel, Chambre $chambre, $date_arrivee, $date_depart);

    class Reservation {

        private $client;
        private $hotel;
        private $chambre;
        private $date_arrivee;
        private $date_depart;

        private static $nb_chambre_reservee = 0; // attribut statique de compteur à zero

        public function __construct(Client $client, Hotel $hotel, Chambre $chambre, $date_arrivee, $date_depart) {

            $this->client = $client;
            $this->hotel = $hotel;
            $this->chambre = $chambre;
            $chambre->setStatut(true);
            $this->date_arrivee = date_format(date_create($date_arrivee),"m/d/Y");
            $this->date_depart = date_format(date_create($date_depart),"m/d/Y");
            $this->client->addReservation($this);
            $this->hotel->addReservation($this);
            $this->chambre->addReservation($this);

        }

        public function getClient() {
            return $this->client;
        }
        public function setClient($client) {
            $this->client = $client;
        } 
        public function getHotel() {
            return $this->hotel;
        }
        public function setHotel($hotel) {
            $this->hotel = $hotel;
        }
        public function getChambre() {
            return $this->chambre;
        }
        public function setChambre($chambre) {
            $this->chambre = $chambre;
        }
        public function getDate_arrivee() {
            return $this->date_arrivee;
        }
        public function setDate_arrivee($date_arrivee) {
            $this->date_arrivee = $date_arrivee;
        }
        public function getDate_depart() {
            return $this->date_depart;
        }
        public function setDate_depart($date_depart) {
            $this->date_depart = $date_depart;
        }
        public function __toString() {
            return $this->getClient()." - ".$this->getChambre()." du ".$this->getDate_arrivee()." au ".$this->getDate_depart();
        }

    }

?>