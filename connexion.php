<?php
    session_start();
    $id_error = null;
    $mailError = null;
    $mail = null;
    $mp = null;
    $connect = new PDO('mysql: host=localhost; dbname=handball', 'root', '');
    $requete = $connect->prepare("SELECT * FROM users");
    $requete->execute();
    $users = $requete->fetchAll();

    if(!empty($_POST) && isset($_POST)){ 
        if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
            foreach ($users as $user) {
                if (
                    $user['mail'] === $_POST['mail']
                    && $user['motDePasse'] === sha1($_POST['motDePasse'])
                ) {
                    $_SESSION['nom_prenoms'] = $user['noms_prenoms'];
                    $_SESSION['mail'] = $user['mail'];
                    $_SESSION['ville'] = $user['ville'];
                    header("Location: accueil.php");
                }else{
                    $id_error = "Identifiants incorrects !";
                }
            }
        }else{
            $mailError = "Votre mail n'est pas valide !";
        }  
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waxangari_Labs - Connexion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/head-icon.png">
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="images/wax-04.png" alt="Un joueur de handball" class="img">
                </div>
                <div class="col-6 mt-5">
                    <form action="connexion.php" method="post">
                        <div class="mt-2">
                            <legend class="text-center text-primary">Connexion</legend>
                            <?php if($id_error): ?>
                                <p class="alert alert-danger">
                                    <?= $id_error ?>
                                </p>
                            <?php endif ?>
                            <?php if($mailError): ?>
                                <p class="alert alert-danger">
                                    <?= $mailError ?>
                                </p>
                            <?php endif ?>
                            <label class="form-label" for="email">Adresse Email</label>
                            <input class="form-control input-back" name="mail" id="mail" type="text" placeholder="Veuillez entrer votre adresse email" required>
                        </div>
                        <div class="mt-2">
                            <label class="form-label" for="mots_de_passe">Mots de passe</label>
                            <input class="form-control input-back" name="motDePasse" id="motDePase" type="password" placeholder="Votre Mots de Passe" required>
                        </div>
                        <div class="mt-2">
                            <input type="checkbox" name="rester_connecte" id="rester_connecter">
                            <label for="rester_connecter">Restez connecté</label>
                        </div>
                        <div class="mt-2 text-center">
                            <button class="btn btn-primary" type="submit">Me Connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>