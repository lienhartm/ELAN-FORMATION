<!doctype html>
    <html>
        <head>
            <link rel="stylesheet" href="../style/style.css">
        </head>
        <body>
            <header>
                <h1>FORUM</h1>
                <nav>
                    <ul>
                        <li><a href="view/form/formSujet.php" target="content">Form Sujet</a></li>
                        <li><a href="controleur/traitement.php?action=listSujet" target="aside">Sujet</a></li>
                    </ul>
                </nav>
            </header>
            <main>
                <iframe name="aside" style="width:600px;height:600px;"></iframe>
                <iframe name="content" style="width:900px;height:600px;"></iframe>
            </main>
        </body>
    </html>
    <?php
    $path = "/path/to/file";
    echo "Path : $path";
    require "$path";
    ?>