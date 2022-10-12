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
                    $username = $_SESSION['username'];
                    // afficher un message
                    echo "Bonjour $username, vous êtes connecté";
                }
            ?>
        </div>

        <a href="index.php">Déconnexion</a>
    </body>
</html>