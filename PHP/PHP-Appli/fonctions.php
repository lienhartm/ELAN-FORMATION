<?php

        if($_SERVER['REQUEST_URI'] == 'PHP%20-%20appli/index.php'){
            session_start();
        }
// compte le nombre de produit
    function nbDeProduits() {

        $nbProduits = 0;

        if (!isset($_SESSION['products']) || empty($_SESSION['products'])){
            echo "Pas de produit dans le panier";
        } else {
            foreach($_SESSION['products'] as $product){
                $nbProduits+=$product['qtt'];
            }
        }

        return $nbProduits;
    
    }
// recupere les message traitement
    function addFlash(){

        if ( isset($_SESSION['message'])){
            echo "<p>".$_SESSION['message']."</p>";
            unset($_SESSION['message']);
        }
    }

    
/*
    function message($message="") {

        switch($message){

            case 0:
                return "Panier supprimé";
                break;

            case 1:
                echo "Article supprimé";
                break;
        
            case 2:
                echo "Quantité modifié";
                break;

            case 3:
                echo "Aucun produit en session...";
                break;

            case 4:
                echo "Aucun article à enregistrer";
                break;

            default:
                echo "ERROR";
        }
    }
*/
?>


