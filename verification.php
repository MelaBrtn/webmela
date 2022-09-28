<?php   
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=tpslam3versioning-mb', 'root', '');

        $recupUsername = $_POST['username'];
        $recupPassword = $_POST['password'];

        $req = $bdd->prepare"SELECT Login, MotDePasse FROM utilisateur WHERE Login = '".$Login"' AND mdp = '".$MotDePasse"'";
        $req->execute(array(
            'username' => $recupUsername,
            'password' => $recupPassword));
        
        $resultat = $req->fetch();
        
        if (!$req==0)
        {
            header('Location: inscrire.php');
        }
        elseif(!$req)
        {
        
            echo 'Vous êtes connecté !';
        }
?>