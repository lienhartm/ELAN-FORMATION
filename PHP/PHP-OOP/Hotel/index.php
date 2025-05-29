<?php

    require "Chambre.php";
    require "Client.php";
    require "Hotel.php";
    require "Reservation.php";

    //  $hotel0 = new Hotel ($nom, $addresse, $total_chambre, $chambre_occupe);

     $hotel1 = new Hotel ("Hilton **** Strasbourg", "10 route de la Gare 67000 STRASBOURG", 30 ,0);
     $hotel2 = new Hotel ("Regent **** Paris", "61 rue Dauphine 75006 Paris", 30, 0);

    //  $chambre0 = new Chambre (Hotel $hotel, $nom, $prix, $wifi, $statut);

     $chambre1 = new Chambre ($hotel1, "Chambre 1", "120", "0", "0");
     $chambre2 = new Chambre ($hotel1, "Chambre 2", "120", "0", "0");
     $chambre3 = new Chambre ($hotel1, "Chambre 3", "120", "1", "0");
     $chambre4 = new Chambre ($hotel1, "Chambre 4", "120", "0", "0");
     $chambre5 = new Chambre ($hotel1, "Chambre 5", "120", "0", "0");

     $chambre6 = new Chambre ($hotel2, "Chambre 1", "220", "0", "0");
     $chambre7 = new Chambre ($hotel2, "Chambre 2", "220", "0", "0");
     $chambre8 = new Chambre ($hotel2, "Chambre 3", "220", "0", "0");
     $chambre9 = new Chambre ($hotel2, "Chambre 4", "220", "0", "0");
     $chambre10 = new Chambre ($hotel2, "Chambre 5", "220", "0", "0");

    //  $client0 = new Client ($nom, $prenom);

    $client1 = new Client ("GIBELLO", "Virgile");
    $client2 = new Client ("MURMANN", "Micka");

    //  $reservation0 = new Reservation (Client $client, Hotel $hotel, Chambre $chambre, $date_arrivee, $date_depart);

     $reservation1 = new Reservation ($client1 ,$hotel1, $chambre1, "01-01-2001", "10-01-2001");
     $reservation2 = new Reservation ($client2 ,$hotel1, $chambre2, "10-01-2001", "20-01-2001");
     $reservation3 = new Reservation ($client1 ,$hotel1, $chambre3, "11-01-2001", "21-01-2001");


//  Enlever ces mêmes marqueur pour la démonstration

    /* Etat des reservations d'un hotel */
    // echo $hotel2->info();

    /* I. lister les reservations d'un hotel */
    // echo $hotel1->listeReservation_client_hotel();

    /* II. lister les reservations d'un hotel */
    // echo $hotel2->listeReservation_client_hotel();
    /* AUCUNE RESERVATION */

    /* lister les reservations d'un client */
    // echo $client2->listeReservation_client();

    /* Statut general des chambres pour un hotel */
    // echo $hotel1->statut();


?>