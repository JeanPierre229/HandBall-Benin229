<?php
    session_start();

    $id_error = null;
    $mailError = null;
    $mail = null;
    $mp = null;
    include 'connectDataBase.php';
    $requete = $connect->prepare("SELECT * FROM utilisateur_parent");
    $requete->execute();
    $utilisateur_parent = $requete->fetchAll();

    $requete = $connect->prepare("SELECT * FROM utilisateurs_joueurs");
    $requete->execute();
    $utilisateur_joueur = $requete->fetchAll();

    $requete = $connect->prepare("SELECT * FROM utilisateur_entraineur");
    $requete->execute();
    $utilisateur_entraineur = $requete->fetchAll();

    if(!empty($_POST) && isset($_POST)){ 
        if($_POST['statut'] === "parent"){
            if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
                foreach ($utilisateur_parent as $user) {
                    if (
                        $user['email'] === $_POST['mail']
                        && $user['motDePasse'] === sha1($_POST['motDePasse'])
                    ) {
                        $_SESSION['nom_prenoms'] = $user['noms_prenoms'];
                        $_SESSION['mail'] = $user['mail'];
                        $_SESSION['ville'] = $user['ville'];
                        header("Location: accueil.php");
                    }else{
                        $id_error = "Identifiants incorrects, rééssayer avec les bons identifiants et avec le bon statut !";
                    }
                }
            }else{
                $mailError = "Votre mail n'est pas valide !";
            }  
        }elseif($_POST['statut'] === "joueur"){
            if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
                foreach ($utilisateur_joueur as $user) {
                    if (
                        $user['email'] === $_POST['mail']
                        && $user['motDePasse'] === sha1($_POST['motDePasse'])
                    ) {
                        $_SESSION['nom_prenoms'] = $user['noms_prenoms'];
                        $_SESSION['mail'] = $user['mail'];
                        $_SESSION['ville'] = $user['ville'];
                        header("Location: accueil.php");
                    }else{
                        $id_error = "Identifiants incorrects, rééssayer avec les bons identifiants et avec le bon statut !";
                    }
                }   
            }else{
                $mailError = "Votre mail n'est pas valide !";
            }  
        }elseif($_POST['statut'] === "entraineur"){
            if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
                foreach ($utilisateur_entraineur as $user) {
                    if (
                        $user['mail'] === $_POST['mail']
                        && $user['motDePasse'] === sha1($_POST['motDePasse'])
                    ) {
                        $_SESSION['nom_prenoms'] = $user['noms_prenoms'];
                        $_SESSION['mail'] = $user['mail'];
                        $_SESSION['ville'] = $user['ville'];
                        header("Location: accueil.php");
                    }else{
                        $id_error = "Identifiants incorrects, rééssayer avec les bons identifiants et avec le bon statut !";
                    }
                }
            }else{
                $mailError = "Votre mail n'est pas valide !";
            }  
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
                        <legend class="text-center text-primary">Connexion</legend>
                        <div class="mt-2">
                            <div class="row mx-2">
                                <p>Je suis: </p>
                                <div>
                                <br>
                                    <input type="radio" name="statut"  value="parent" id="parent" class="mx-1" required>
                                    <label for="parent"> Parent</label>
                                </div>
                                <div>
                                    <br>
                                    <input type="radio" name="statut" value="joueur" id="joueur" class="mx-1" required>
                                    <label for="parent"> Joueur</label>
                                </div>
                                <div>
                                    <br>
                                    <input type="radio" name="statut" value="entraineur" id="entraineur" class="mx-1" required>
                                    <label for="parent"> Entraineur</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2">
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
                            <input type="checkbox" name="rester_connecte" id="rester_connecter" checked>
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