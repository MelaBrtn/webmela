<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>

        <?php   
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=tpslam3versioning-mb', 'root', '');

        $recupUsername = $_POST['username'];
        $recupPassword = $_POST['password'];

        $req = $bdd->prepare('SELECT Login, MotDePasse FROM utilisateur');
        $req->execute(array(
            'username' => $recupUsername,
            'password' => $recupPassword));
        
        $resultat = $req->fetch();
        
        if (!$req)
        {
            header('Location: inscrire.php');
        }
        elseif(!$req)
        {
        
            echo 'Vous êtes connecté !';
        }
