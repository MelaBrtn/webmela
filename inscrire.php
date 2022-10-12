<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
    <div id="container">
        <form name="inscription" method="post">
        <h1>Inscription</h1>
            <label><b>Pseudo</b></label>
            <input type="text" placeholder="Entrer votre pseudo" name="pseudo" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

            <label><b>Confirmation de mot de passe</b></label>
            <input type="password" placeholder="Confirmer votre mot de passe" name ="password" required>

            <label><b>Adresse email</b></label><br>
            <input type="mail" placeholder="Entrer votre email" name="mail" required>

            <input type="submit" id='submit' value='Inscription' >

            <?php
                $bdd = new PDO('mysql:host=127.0.0.1;dbname=tpslam3versioning-mb', 'root', '');
                
                if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {
                    $pseudo = $_POST['pseudo'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                
                   // var_dump($pseudo);
                    //var_dump($password);
                
                    $q = $bdd->prepare('INSERT INTO utilisateur (Login, MotDePasse) VALUES (:pseudo, :password)');
                    $q->bindValue('Login', $pseudo);
                    $q->bindValue('MotDePasse', $password);
                    $res = $q->execute();
                
                    if ($res) {
                        echo "Inscription réussie";
                    }
                }
            ?>

            <a href="index.php">Retour à la connexion</a>
        </form>
    </div>

    </body>