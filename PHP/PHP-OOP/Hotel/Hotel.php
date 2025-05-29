<?php

//  $hotel0 = new Hotel ($nom, $address, $nb_chambre);

    class Hotel {

        private string $nom;
        private string $address;
        private int $nb_chambre;
        private array $reservations;
        private array $chambres;

        public function __construct(string $nom, string $address, int $nb_chambre) {
            
            $this->nom = $nom;
            $this->address = $address;
            $this->nb_chambre = $nb_chambre;
            // $this->nb_occupee = $this->reservation->nb_occupee++;
            $this->reservations = [];
            $this->chambres = [];
            
        }

        public function addReservation(Reservation $reservation) {
            $this->reservations[] = $reservation;
        }
        public function addChambre(Chambre $chambre) {
            $this->chambres[] = $chambre;
        }

        public function getNom() {
            return $this->nom;
        }
        public function setNom($nom) {
            $this->nom = $nom;
        }
        public function getAddress() {
            return $this->address;
        }
        public function setAddress($address) {  //->format('d/m/Y')
            $this->address = $address;
        }
        public function getNb_chambre() {
            return $this->nb_chambre;
        }
        public function setNb_chambre($nb_chambre) {
            $this->nb_chambre = $nb_chambre;
        }
        public function __toString() {
            return "";
        }
        // lister les reservations CLIENT d'un hotel
        public function listeReservation_client_hotel() {
            $hotel = "<h2>Réservations de l'hôtel ".$this->nom."</h2>";
            $compteur = 0;
            $list = "";
            foreach($this->reservations as $reservation) {
                $compteur++;
                $list .= $reservation->getClient()->getPrenom()." ".$reservation->getClient()->getNom()." - ".$reservation->getChambre()->getNom()." - du ".$reservation->getDate_arrivee()." au ".$reservation->getDate_depart()."<br>";
            }
            if($compteur === 0) { return $hotel." Aucune réservation !"; }
            else {return $hotel."<b>".$compteur." RESERVATIONS</b><br><br>".$list;}
        }
        // compteur du nombre de chambre occupee
        public function nb_occupee() {
            $compteur = 0;
            foreach($this->reservations as $reservation) {
                $compteur++;
            }
            return $compteur;
        }
        // INFO Hotel - Totaux des chambres / occupee et restante
        public function info() {
            return "<h2>".$this->nom."</h2><h5>".$this->address."</h5><p>Nombre de chambre : ".$this->getNb_chambre()."<br>Nombre de chambres réservées : ".$this->nb_occupee()."<br>Nombre de chambres dispo : ".($this->getNb_chambre()-$this->nb_occupee()); 
        }

        public function statut() {
            $list = "";
            $statut = "Statuts des chambres de <b>".$this->getNom()."</b><table><tr><td>CHAMBRE</td><td>PRIX</td><td>WIFI</td><td>ETAT</td></tr>";
            foreach($this->chambres as $chambre) {
                $list .= "<tr><td>".$chambre->getNom()."</td><td>".$chambre->getPrix()."</td><td>".$chambre->getWifi()."</td><td>".$chambre->getStatut()."</td></tr>";
            }
            return $statut.$list."</table>";
        }

    }

?>