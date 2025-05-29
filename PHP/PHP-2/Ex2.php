<html>
    <body>
        <h1>Algorithmes PHP n°2</h1>
    <br><br>
    <h2><u>Exercice 2:</u></h2>
    <p>
        Créer une fonction personnalisée <code>convertirMajRouge()</code> permettant de transformer une chaîne de
        <br>
        caractère passée en argument en majuscules et en rouge.
        <br><br>
        Vous devrez appeler la fonction comme suit: <code>convertirMajRouge($texte);</code>
    </p>
    <h3>Réponse:</h3>
    <?php
    // tableau
    $capitales = array("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome");
    // appel de function
    echo afficherTableHTML($capitales);
    // function
    function afficherTableHTML($capitales) {
        // ksort() value en ordre alpha
        ksort($capitales);
        // affichage de l'entête du tableau
        echo "<table><tr><th>Pays</th><th>Capitale</th></tr>";
        // foreach(table as key => value)  parcours le tableau avec des nom de variable
        foreach($capitales as $pays => $capitale) {
            // affiche les variables du tableau dans la suite
            echo "<tr><td>" . strtoupper($pays) . "</td><td>" . $capitale . "</td></tr>";
        }
        // ferme la table
        echo "</table>";
    }
    ?>
    <style>
        body {
            margin-left: 100px;
        }
        h1 {
            text-align: center;
        }
        /* met en forme le tableau d'une bordure */
        table, td, th {
            border: 1px solid;
        }
        table {
            border-collapse: collapse;
        }
        th {
            font-weight: bold;
        }
    </style>
    </body>
</html>

