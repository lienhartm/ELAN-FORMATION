<?php
    session_start(); // appel de la fonction
    // requiere la page ...
    require 'fonctions.php';
    $alert = "";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Récapitulatif des produits</title>
    </head>
    <body>

    <?php

$message= "";
                echo    addFlash(),
                        "<div class='table'>",
                        "<h1>Panier</h1>";

                //var_dump($_SESSION); // nous affiche le tableau de session
                // vérifie si la clé du tableau de session n'existe ou ne contient aucune donnée
                if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
                    echo "Aucun produit en session...<br><br>";
                }
                else{   // affichage dynamique des produits
                    echo "<table>",
                            "<thead>",
                                "<tr>",
                                    "<th>#</th>",
                                    "<th>Nom</th>",
                                    "<th>Prix</th>",
                                    "<th>Quantité</th>",
                                    "<th>Total</th>",
                                "</tr>",
                            "</thead>",
                            "<tbody>";
                    $totalArticle = 0; // nb total article
                    $totalGeneral = 0; // initialisation de la variable total
                    // itération du tableau de deux variables '$index' et '$product'
                    foreach($_SESSION['products'] as $index => $product){
                    // affichage des produits dans un tableau
                        echo "<tr>",
                                "<td>".$index."</td>",
                                "<td>".$product['name']."</td>",
                                "<td>".number_format($product['price'], 2, ",", "&nbsp;")."&nbsp;€</td>", // affichage de la valeur monétaire
                                "<td><a class='left' href='traitement.php?action=moins&index=$index'>-</a>".$product['qtt']."<a class='right' href='traitement.php?action=plus&index=$index'>+</a></td>",// recupere les references si action
                                "<td>".number_format($product['total'], 2, ",", "&nbsp;")."&nbsp;€</td>", // affichage de la valeur monétaire
                                "<td class='supprimer'><a href='traitement.php?action=article&index=$index'>X</a></td>",//supprimer article
                            "</tr>";
                        $totalArticle+= $product['qtt']; // calcul du nb article
                        $totalGeneral+= $product['total']; // calcul du total
                    }
                    echo "<tr>",// affiche le total d'article
                            "<td colspan=4>Total article : </td>",
                            "<td><strong>".$totalArticle."</strong></td>",
                        "</tr>",
                        "<tr>",// affichage du total a la fin du tableau
                            "<td colspan=4>Total général : </td>",
                            "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>",
                        "</tr>",
                        "</tbody>",
                        "</table>",
                        "<br>",
                        "</div>";
                }
                // NAVIGATION AVEC RENVOIE DE $totalArticle et de l'action 'panier'
                echo    "<a class='button default' href='index.php?'>Ticket</a>",
                        "<a class='button default page' href='recap.php'>Panier</a>",
                        "<a class='button default action' href='traitement.php?action=panier' type='text/html' >Supprimer</a>";

            ?>
       
    </body> 
</html>
