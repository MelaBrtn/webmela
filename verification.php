<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '';
    $db_name     = 'tpslam3versioning-mb';
    $db_host     = '127.0.0.1';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');   

           if($username !== "" && $password !== "")
           {
               $requete = "SELECT count(*) FROM utilisateur where 
                     Login = '".$username."' AND MotDePasse = '".$password."' ";
               $exec_requete = mysqli_query($db,$requete);
               $reponse      = mysqli_fetch_array($exec_requete);
               $count = $reponse['count(*)'];
               if($count!=0) // nom d'utilisateur et mot de passe correctes
                {
                $_SESSION['username'] = $username;
                header('Location: confirmation.php');
                }
                else
        {
           header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: inscrire.php');
}
mysqli_close($db); // fermer la connexion
?>