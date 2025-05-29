<?php
    session_start(); // démarre la session
    // verifie si la requete GET transmet bien une 'action'
if (isset($_GET['action'])){
// les actions
    switch($_GET['action']){
        // submit
        case "submit":
            // vérifie si la requête POST transmet bien une clé 'submit' au serveur
            if(isset($_POST['submit'])){
                // filtrer les valeurs transmises
                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);   // uniquement du texte
                $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);  // nombre à virgule avec '.' ou ','
                $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);    // nombre entier différent de zéro
                // verifier les valeur si différentes de 'false', 'null' ou '0'
                if($name && $price && $qtt){
                    // stocker les données produit dans un tableau associatif
                    $product = [
                        "name" => $name,
                        "price" => $price,
                        "qtt" => $qtt,
                        "total" => $price*$qtt
                    ];
                    // enregistrement du produit nouvellement crée en session
                    $_SESSION['products'][] = $product;
                    $_SESSION['message'] = "produit ajouté";
                    
                }/*
                else {
                    echo "Aucun article à enregistrer";
                }*/
                $totalArticle=0;
                foreach($_SESSION['products'] as $product){

                    $totalArticle+= $product['qtt'];
                }
                header("Location:index.php?totalArticle=$totalArticle"); // redirection...
            }
        break;
    // panier
        case "panier":
                unset($_SESSION['products']); // supprime la totalite du panier
                $_SESSION['message'] = "panier vidé";
                header("Location:recap.php"); // garde page
        break;
    // article
        case "article":
                unset($_SESSION['products'][$_GET['index']]); // supprime l'article du panier
                $_SESSION['message'] = "produit supprimé";
                header("Location:recap.php");
        break;
    // moins
        case "moins":
                $_SESSION['products'][$_GET['index']]['qtt']--; // decremente la quantite
                // calcul le nouveau total de larticle
                $_SESSION['products'][$_GET['index']]['total'] = $_SESSION['products'][$_GET['index']]['price']*$_SESSION['products'][$_GET['index']]['qtt'];
                $_SESSION['message'] = "produit retiré";
                header("Location:recap.php");
                // annule l'article si nombre d'article à zero
                if($_SESSION['products'][$_GET['index']]['qtt']===0){
                    unset($_SESSION['products'][$_GET['index']]);
                    $$_SESSION['message'] = "produit supprimé";
                    header("Location:recap.php");
                }
        break;
    // plus
        case "plus":
                $_SESSION['products'][$_GET['index']]['qtt']++; // incremente
                $_SESSION['products'][$_GET['index']]['total'] = $_SESSION['products'][$_GET['index']]['price']*$_SESSION['products'][$_GET['index']]['qtt'];
                $_SESSION['message'] = "produit ajouté";
                header("Location:recap.php?message=$message");
        break;
    // default

        case "valider":
            echo "";
        break;

        default:
                echo "";
    }
}
    //header("Location:index.php"); // redirection...
?>
