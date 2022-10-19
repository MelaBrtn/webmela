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
                
                if (isset($_POST['submit'])) {
                    if (empty($_POST['pseudo'])) {
                        $errors['pseudo'] = 'Un pseudo est exigé';
                    }
                    if (empty($_POST['mail'])) {
                        $errors['mail'] = 'Un email est exigé';
                    }
                    if (empty($_POST['password'])) {
                        $errors['password'] = 'Un mot de passe est exigé';
                    }
                    if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
                        $errors['passwordConf'] = 'Les deux mots de passe ne sont pas identiques';
                    }

                    $pseudo = $_POST['pseudo'];
                    $email = $_POST['mail'];
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password

                }

            ?>

            <a href="index.php">Retour à la connexion</a>
        </form>
    </div>

    </body>