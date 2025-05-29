<html>
    <body>
        <h1>Algorithmes PHP n°2</h1>
    <br><br>
    <h2><u>Exercice 4:</u></h2>
    <p>
        A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
        <br>
        le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s'ouvrir dans un
        <br>
        nouvel onglet et le tableau sera trié par ordre alphabétique <b>de la capitale</b>).
        <br><br>
        On admet que l'URL de la page Wikipédia de la capitale adopte la forme:
        <span>https://fr.wikipédia.org/wiki/</span>
        <br><br>
        Le tableau passé en argument sera le suivant:
        <br>
        <code>$capitales = array("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome", "Espagne"=>"Madrid");</code>
    </p>
    <h3>Réponse:</h3>
    <?php
    $capitales = array("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome", "Espagne"=>"Madrid");

    // ksort() value en ordre alpha
    ksort($capitales);
    // affichage de l'entête du tableau
    echo "<table><tr><th>Pays</th><th>Capitale</th><th>Lien wiki</th></tr>";
    // foreach(table as key => value)  parcours le tableau avec des nom de variable
    foreach($capitales as $pays => $capitale) {
    // affiche les variables du tableau dans la suite
    echo "<tr><td>" . strtoupper($pays) . "</td><td>" . $capitale . "</td><td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien</a></td></tr>";
    }
    // ferme la table
    echo "</table>";
    ?>
    <style>
        body {
            margin-left: 100px;
        }
        h1 {
            text-align: center;
        }
        span {
            color:olive;
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

