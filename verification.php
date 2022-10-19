<?php   
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=tpslam3versioning-mb', 'root', '');

        if (isset($_POST['submitLogin'])) {
         if (empty($_POST['username'])) {
             $errors['username'] = 'Le login est nécessaire';
         }
         if (empty($_POST['password'])) {
             $errors['password'] = 'Le mot de passe est nécessaire';
            }
         }

        $recupUsername = $_POST['username'];
        $recupPassword = $_POST['password'];

        if (count($errors) === 0) {
         $query = "SELECT * FROM utilisateur WHERE Login = ? LIMIT 1";
         $stmt = $bdd->prepare($query);
         $stmt->bind_param($recupUsername, $recupPassword);

         if ($stmt->execute()) {
            $result = $stmt->get_result();
            $recupUsername = $result->fetch_assoc();
            if (password_verify($recupPassword, $recupUsername['password'])) { // if password matches
                $stmt->close();

                $_SESSION['id'] = $recupUsername['id'];
                $_SESSION['username'] = $recupUsername['username'];
                $_SESSION['email'] = $recupUsername['email'];
                $_SESSION['verified'] = $recupUsername['verified'];
                $_SESSION['message'] = 'Vous êtes connecté';
                $_SESSION['type'] = 'alert-success';
                header('location: confirmation.php');
                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "Mauvais utilisateur ou mot de passe saisit";
            }
        } else {
            $_SESSION['message'] = "L'identification a échoué";
            $_SESSION['type'] = "alert-danger";
        }
    }


      //  $stmt = $bdd->prepare('SELECT * FROM utilisateur WHERE Login = ? LIMIT 1;');
       // $stmt->execute([$recupUsername]);
       // $recupUsername = $stmt->fetch(\PDO::FETCH_ASSOC);

    //    if ($recupPassword == $recupUsername['MotDePasse']) {
      //     return header('location: confirmation.php');
        //} 
       // else {
         //  return header('Location: inscrire.php');

           // }
?>