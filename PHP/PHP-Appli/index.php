<?php

require 'fonctions.php';

    session_start(); // appel de la fonction

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Caddie ©</title>
    </head>
    <body>
<!-- AFFICHAGE DU NOMBRE D'ARTICLE -->
<?php   echo    "<p><strong>Nonbre de produit dans le panier: ".nbDeProduits()."</strong></p>",
                    "<br>".
                    addFlash()/*,
                    "<p><b>".$alert."</b></p>"*/;  ?>

        <fieldset>
            <h1>Ajouter un produit</h1>
            <br>
            <form action="traitement.php?action=submit" method="post">
                <p>
                    <label>
                        Nom du produit :
                        <input type="text" name="name">
                    </label>
                </p>
                <p>
                    <label>
                        Prix du produit :
                        <input type="number" step="any" name="price">
                    </label>
                </p>
                <p>
                    <label>
                        Quantité désirée :
                        <input type="number" name="qtt" value="1">
                    </label>
                </p>
                <p>
                    <input type="submit" name="submit" value="Ajouter le produit">

                </p>
            </form>
        </fieldset>

<?php

    echo    "<a class='button default page' href='index.php?'>Ticket</a>",
            "<a class='button default' href='recap.php'>Panier</a>";

?>

    </body>
</html>
