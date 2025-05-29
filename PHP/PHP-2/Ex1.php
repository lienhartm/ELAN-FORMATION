<html>
    <body>
        <h1>Algorithmes PHP n°2</h1>
    <br><br>
    <h2><u>Exercice 1:</u></h2>
    <p>
        Soit le tableau suivant:
        <br>
        <code>$capitales = array("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome");</code>
        <br>
        Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays
        <br>
        s'affichera en majuscule et que le tableau est trié par ordre alphabétique<b>du nom de pays</b>grâce à
        <br>
        une fonction personnalisée.
    </p>
    <h3>Réponse:</h3>
<?php
    $texte = "Mon texte en paramètre";
    echo $texte;
    // appel de la function
    echo functionMajRouge($texte);
    // function
    function functionMajRouge($texte) {
        // transformation en majuscule
        $texte = strtoupper($texte);
        // affichage en balise html avec style du texte
        echo "<br><p style ='color:red'>". $texte."</p> <br>";
    }
    ?>
    <style>
        body {
            margin-left: 100px;
        }
        h1 {
            text-align: center;
        }
    </style>
    </body>
</html>

