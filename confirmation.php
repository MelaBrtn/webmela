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
                if($_SESSION['Login'] !== ""){
                    $user = $_SESSION['Login'];
                    // afficher un message
                    echo "Bonjour $user, vous êtes connecté";
                }
            ?>
        </div>
    </body>
</html>