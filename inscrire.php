<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
    <div id="container">
        <form name="inscription" method="post" action="">
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
        </form>
    </div>

    </body>