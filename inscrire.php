<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
    <div id="container">
        <form name="inscription" method="post" action="">
            <label>Pseudo</label>
            <input type="text" placeholder="Mettre votre pseudo" name="pseudo" required>
            <label>Mot de passe</label>
            <input type="password" placeholder="Entre votre mot de passe" name="password" required>
            <label>Confirmation de mot de passe</label>
            <input type="password" name ="password" required>
            <label>Adresse email</label><br>
            <input type="mail" placeholder="Entrez votre email" name="mail" required>
            <input type="submit" id='submit' value='Inscription' >
    </form>
</div>

    </body>