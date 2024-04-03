<?php
    session_start();
    $_SESSION['mailError'] = null;
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
                    header('Location: accueil.php');
                }else{
                    $_SESSION['mailError'] = "Identifiants incorrects !";
                    header('Location: connexion.php');
                }
            }
        }else{
            $_SESSION['mailError'] = "Votre mail n'est pas valide !";
            header('Location: connexion.php');
        }  
    }
?>