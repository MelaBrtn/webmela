<?php   
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=tpslam3versioning-mb', 'root', '');

        $recupUsername = $_POST['username'];
        $recupPassword = $_POST['password'];

        $stmt = $this->pdo->prepare('SELECT * FROM utilisateur WHERE Login = ? LIMIT 1');
        $stmt->execute([$recupUsername]);
        $recupUsername = $stmt->fetch(\PDO::FETCH_ASSOC);

        if (password_verify($recupPassword, $recupUsername['password'])) {
            return header('location: confirmation.php');
        } 
        else {
            return header('Location: inscrire.php');
            }
?>