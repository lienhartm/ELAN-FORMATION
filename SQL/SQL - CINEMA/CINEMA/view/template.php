<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>CINEMA</title>
            <!---->
            <meta charset="UTF-8">
            <meta name="keywords" content="HTML, CSS, JS, PHP, SQL">
            <meta name="description" content="CINEMA">
            <meta name="author" content="LIENHART MICHAEL">
            <!-- <meta http-equiv="refresh" content="30"> -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!---->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="style/style.css">
            <script src="script/script.js"></script>
        <!---->
        </head>
        <body>
            <header>
                <h1>Bienvenue sur cinema</h1>
                <h2>Ceci est ma page d'acceuil</h2>
            </header>
            <nav>
                <ul>
                    <li class="nav"><a href="index.php?action=listFilms">Films</a></li>
                    <li class="nav"><a href="index.php?action=listGenres">Genre</a></li>
                    <li class="nav"><a href="index.php?action=listActeurs">Acteurs</a></li>
                    <li class="nav"><a href="index.php?action=listRealisateurs">Realisateurs</a></li>
                </ul>
            </nav>
            <main>
                    <?= $contenu ?>
            </main>
            <footer>
                    <p class="vignette"><h6 class="vignette">Site exercice - CINEMA - RAN ELAN FORMATION 08/2022-10/2022</h6></p>
            </footer>
        </body>
    </html>
<!---->
