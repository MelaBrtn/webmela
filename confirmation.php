<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
        <?php
                session_start();
                if($_SESSION['username'] !== ""){
                    $recupUsername = $_SESSION['username'];
                    // afficher un message
                    echo "Bonjour $recupUsername, vous êtes connecté";
                }
            ?></br>
            <a href="deconnexion.php">Déconnexion</a>
        </div>

        
    </body>
</html>